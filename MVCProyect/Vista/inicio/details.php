    <?php
        require_once "./controladores/config.php";
        require_once "./Modelo/imagen.php";
        $id= isset($_GET['id']) ? $_GET['id'] : '' ;
        $token=isset($_GET['token']) ? $_GET['token'] :'';
        $img401="https://www.elegantthemes.com/blog/wp-content/uploads/2019/12/401-error-wordpress-featured-image.jpg";
        $isIdandToken=true;
        $error_message = "Error: El ID o el token están vacíos.";
            
        if($id=='' || $token==''){
            $isIdandToken=false;
            echo $error_message;
        }
        else{
            $isIdandToken=true;
            $error_message = "Error: El token no es válido.";
            $token_temp= hash_hmac('sha256', $id, KEY_TOKEN);
            if($token_temp==$token){
                $imagen = new Imagen();
                $isIdandToken=true;
                $sqltest = $imagen->filtrado($id); // Ejecutamos el método filtrado
                $row = $sqltest;
                $nombre = $row['nombrePelicula'];
                $sinopsis = $row['sinopsis'];
                $imagen = "./Diseño/img/$id/principal.jpg";
                $precio = $row['precio'];
                $discount= $row['descuento'];
                $preciodesc= $precio-($precio*($discount/100));
            } else{
                echo $error_message;
                $isIdandToken=false;
            }
        }
    ?>
<!-- Body+Header -->
<main>
    <!-- It works, the TOKEN and ID is OK -->
    <?php if($isIdandToken==true){ ?>
        <br>
        <br><br>
    <?php
        // session_destroy();
        // print_r($_SESSION);
    ?>
    <div class="container-fluid">
        <div class="row">
                <div class="col-lg-4 order-lg-1 mb-3">
                    <!-- IMAGEN -->
                    <img class="img-fluid rounded" style="width:99%!important;" src="<?php echo $imagen;?>" alt="Imagen; <?php echo $nombre;?>">
                </div>
                <div class="col-md-7 col-lg-8 order-md-2">
                    <div class="card" style="max-width: 98%">
                        <div class="card-body">
                            <!-- ELEMENTOS PELICULA -->
                            <h1 class="card-title">Pelicula: <?=$nombre?> </h1>
                            <?php if($discount>0){ ?>
                                <p>PRECIO: <del><?php echo MONEDACLP . number_format($precio, 2, '.', ','); ?> </h3></del></p>
                                    <h3 style="" class="">
                                        <?php echo MONEDACLP . number_format($preciodesc, 2, '.', ',');?>
                                        <small class="text-success"><?php  echo $discount ?> % descuento</small>
                                    </h3>

                            <?php }else{ ?>
                                <p>PRECIO: <?php echo MONEDACLP . number_format($precio, 2, '.', ','); ?> </h3></p>
                            <?php } ?>

                            <p class="card-text lead">
                                <h5 class="font-weight-bold"><?= $sinopsis ?></h5>
                            </p>
                            <div class="d-grid gap-3 col-10 mx-auto">
                                <button class="btn btn-primary" type="button">Comprar ahora</button>
                                <button class="btn btn-primary-primary" type="button" onclick="addPelicula(<?php echo $id ?>, '<?php echo $token_temp ?>')">Agregar al carrito</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <?php } else{ ?>
    <!-- Token doesn't work, throw error 401, No permision -->
    <div style="display: flex;justify-content: center;align-items: center;height: 100vh;"class="containerError">
        <div style="max-width: 80%;margin: auto;text-align: center;" class="contentError">
            <img src="<?= $img401 ?>" alt="ERROR 401">
        </div>
    </div>
    <?php } ?>
 </main>
 <script>
    let formData;
    function addPelicula(id, token){
      let url= 'controladores/addToCart.php'
      let formData = new FormData()
      formData.append('id',id)
      formData.append('token',token)
      fetch(url, {
        method: 'POST',
        body: formData,
        mode: 'cors'
      }).then(response=>response.json()).then(data =>{
        if(data.ok){
          let elemento = document.getElementById('Cart')
          elemento.innerHTML= data.numero
        }
      })
      
    }
  </script>
