<?php
// var_dump($bd);
// echo "<br>";
// echo"Hello world, I'm the view into the 'Vista/Inicio/Principal.php'";
// $sentencia= prepare($)
// var_dump($bd->)
require_once "./Modelo/imagen.php";
?>
<!doctype html>
<html lang="es">
    <head>
        <title>Cinema</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="./Diseño/styleindex.css" >
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>
<!-- Body+Header -->

  <main>
    <!-- Si no comento la siguiente linea la pagina no es 100% responsive! -->
    <div class="row" id="Lista1" style="padding-top: 4rem ;">
      <div class="col-md-6" style="width:90%!important; padding-left:5vw; padding-rigth:5vw">
      <!-- Start Action CARD -->
        <div class="card card1!important" style=" ">
        <!-- Set title -->
          <h3 class="card-title">Peliculas de Accion</h3>
          <!-- inside card -->
          <div class="ListadePeliculas1">
            <section>
              <table>
                <th></th>
                <?php 
                  //Obtener la cantidad de URLs utilizando el modelo
                  $cantidad = $this->modelo->getCantAC(); 
                  //Acceder al número de URLs mediante la propiedad del objeto devuelto por la consulta
                  $num_urls = $cantidad->{'count(`numb_id`)'};
                  //Abre ciclo for, de 1 hasta el total de cantidad en la BBDD
                  for($i=1; $i<=$num_urls; $i++) {
                  //Accede a la URL que tiene la imagen en este caso //Ejemplo de file_url: https://cartelera.elpais.com/assets/uploads/2019/06/28030126/C_05611.jpg
                  $url = $this->modelo->getUrlEspecificAC($i);
                  //Obtiene el URL especifico con la imagen.
                  $especific_url= $url->{'file_url'};
                  //Accede al nombre individual del archivo.
                  $names= $this->modelo->getNamesAC($i);
                  //Obtiene el nombre especifico del archivo.
                  $especificName= $names->{'Nombre'};
                ?>
                  <td>
                    <img style="max-height: 22vw;" class="imagelist" alt="<?= $especificName ?>" src="<?=/* CARGA EN EL SRC el URL para cargar la imagen */ $especific_url; ?>">
                    <p class="card-subtitle"><?= $especificName ?></p>
                  </td>
                <?php
                  }
                ?>
              </table>
            </section>
          </div>
        </div>
      </div>
    </div>
    <div class="row" id="Lista1" style="padding-top: 1rem ;">
      <div class="col-md-6" style="width:90%!important; padding-left:5vw; padding-rigth:5vw">
      <!-- Start Action CARD -->
        <div class="card card1!important" style=" ">
        <!-- Set title -->
          <h3 class="card-title">Peliculas de Suspenso</h3>
          <!-- inside card -->
          <div class="ListadePeliculas1">
            <section>
              <table>
                <th></th>
                <?php 
                  //Obtener la cantidad de URLs utilizando el modelo
                  $cantidad = $this->modelo->getCantSu(); 
                  //Acceder al número de URLs mediante la propiedad del objeto devuelto por la consulta
                  $num_urls = $cantidad->{'count(`numb_id`)'};
                  //Abre ciclo for, de 1 hasta el total de cantidad en la BBDD
                  for($i=1; $i<=$num_urls; $i++) {
                  //Accede a la URL que tiene la imagen en este caso //Ejemplo de file_url: https://cartelera.elpais.com/assets/uploads/2019/06/28030126/C_05611.jpg
                  $url = $this->modelo->getUrlEspecificaSu($i);
                  //Obtiene el URL especifico con la imagen.
                  $especific_url= $url->{'file_url'};
                  //Accede al nombre individual del archivo.
                  $names= $this->modelo->getNameSu($i);
                  //Obtiene el nombre especifico del archivo.
                  $especificName= $names->{'Nombre'};
                ?>
                  <td>
                    <img style="max-height: 22vw;" class="imagelist" alt="<?= $especificName ?>" src="<?=/* CARGA EN EL SRC el URL para cargar la imagen */ $especific_url; ?>">
                    <p class="card-subtitle"><?= $especificName ?></p>
                  </td>
                <?php
                  }
                ?>
              </table>
            </section>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- FOOTER -->
</html>
    <!-- <div class="" id="ListaPeliculas1"> -->
      
      <!-- <section>
        <php? foreach ?>
        <img class="imagelist" src="https://as01.epimg.net/meristation/imagenes/2020/05/02/reportajes/1588440472_366490_1588440518_noticia_normal.jpg">
        <img class="imagelist" src="https://media.revistagq.com/photos/5ca5f1b3f46488687cf49211/master/w_1600,c_limit/peliculas_mas_taquilleras_5260.jpg">
        <img class="imagelist" src="https://as01.epimg.net/meristation/imagenes/2021/07/02/reportajes/1625238771_202608_1625238808_noticia_normal.jpg">
        <img class="imagelist" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBEImWqDxm7sN_82vZXwV9UHz6zkRI8BTd1s-Zrl3h&s">
        <img class="imagelist" src="https://media.revistagq.com/photos/5ca5f1b3f46488687cf49211/master/w_1600,c_limit/peliculas_mas_taquilleras_5260.jpg">
        <img class="imagelist" src="https://as01.epimg.net/meristation/imagenes/2021/07/02/reportajes/1625238771_202608_1625238808_noticia_normal.jpg">
        <img class="imagelist" src="https://media.revistagq.com/photos/5ca5f1b3f46488687cf49211/master/w_1600,c_limit/peliculas_mas_taquilleras_5260.jpg">
        <img class="imagelist" src="https://as01.epimg.net/meristation/imagenes/2021/07/02/reportajes/1625238771_202608_1625238808_noticia_normal.jpg">
        <img class="imagelist" src="https://media.revistagq.com/photos/5ca5f1b3f46488687cf49211/master/w_1600,c_limit/peliculas_mas_taquilleras_5260.jpg">
      </section> -->
    <!-- </div>
    <div class="" id="ListaPeliculas2">
      <section>
        <img class="imagelist" src="https://as01.epimg.net/meristation/imagenes/2021/07/02/reportajes/1625238771_202608_1625238808_noticia_normal.jpg">
        <img class="imagelist" src="https://media.revistagq.com/photos/5ca5f1b3f46488687cf49211/master/w_1600,c_limit/peliculas_mas_taquilleras_5260.jpg">
        <img class="imagelist" src="https://media.revistagq.com/photos/5ca5f1b3f46488687cf49211/master/w_1600,c_limit/peliculas_mas_taquilleras_5260.jpg">
        <img class="imagelist" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBEImWqDxm7sN_82vZXwV9UHz6zkRI8BTd1s-Zrl3h&s">
        <img class="imagelist" src="https://media.revistagq.com/photos/5ca5f1b3f46488687cf49211/master/w_1600,c_limit/peliculas_mas_taquilleras_5260.jpg">
        <img class="imagelist" src="https://as01.epimg.net/meristation/imagenes/2021/07/02/reportajes/1625238771_202608_1625238808_noticia_normal.jpg">
        <img class="imagelist" src="https://media.revistagq.com/photos/5ca5f1b3f46488687cf49211/master/w_1600,c_limit/peliculas_mas_taquilleras_5260.jpg">
        <img class="imagelist" src="https://as01.epimg.net/meristation/imagenes/2021/07/02/reportajes/1625238771_202608_1625238808_noticia_normal.jpg">
        <img class="imagelist" src="https://as01.epimg.net/meristation/imagenes/2020/05/02/reportajes/1588440472_366490_1588440518_noticia_normal.jpg">
      </section>
    </div>
    <div class="" id="ListaPeliculas3">
      <section>
        <img class="imagelist" src="https://as01.epimg.net/meristation/imagenes/2021/07/02/reportajes/1625238771_202608_1625238808_noticia_normal.jpg">
        <img class="imagelist" src="https://media.revistagq.com/photos/5ca5f1b3f46488687cf49211/master/w_1600,c_limit/peliculas_mas_taquilleras_5260.jpg">
        <img class="imagelist" src="https://as01.epimg.net/meristation/imagenes/2021/07/02/reportajes/1625238771_202608_1625238808_noticia_normal.jpg">
        <img class="imagelist" src="https://media.revistagq.com/photos/5ca5f1b3f46488687cf49211/master/w_1600,c_limit/peliculas_mas_taquilleras_5260.jpg">
        <img class="imagelist" src="https://media.revistagq.com/photos/5ca5f1b3f46488687cf49211/master/w_1600,c_limit/peliculas_mas_taquilleras_5260.jpg">
        <img class="imagelist" src="https://as01.epimg.net/meristation/imagenes/2021/07/02/reportajes/1625238771_202608_1625238808_noticia_normal.jpg">
        <img class="imagelist" src="https://media.revistagq.com/photos/5ca5f1b3f46488687cf49211/master/w_1600,c_limit/peliculas_mas_taquilleras_5260.jpg">
        <img class="imagelist" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBEImWqDxm7sN_82vZXwV9UHz6zkRI8BTd1s-Zrl3h&s">
        <img class="imagelist" src="https://as01.epimg.net/meristation/imagenes/2020/05/02/reportajes/1588440472_366490_1588440518_noticia_normal.jpg">
      </section>
    </div> -->
