<?php
require_once "./Modelo/imagen.php";
$resultado1 = $this->modelo->resultado1();
$resultado2 = $this->modelo->resultado2();
$resultado3 = $this->modelo->resultado3();
require_once "./controladores/config.php";
?>
<!-- Body+Header -->

  <main>
    <!-- Si no comento la siguiente linea la pagina no es 100% responsive! -->
    <div class="row" id="Lista1" style="padding-top: 1rem ;">
      <div class="col-md-6" style="width:90%!important; padding-left:5vw; padding-rigth:5vw">
      <!-- Start Action CARD -->
        <div class="card card1!important" style=" ">
        <!-- Set title -->
          <h3 class="card-title">Peliculas de Accion</h3>
          <!-- inside card -->
          <div class="ListadePeliculas3">
            <section>
              <table>
                
                <?php 
                  foreach($resultado1 as $row) {
                    $id=$row['idPelicula'];
                    $disponibilidad=$row['disponible'];
                    if($disponibilidad>=1){
                    $id=$row['idPelicula'];
                    $image= "./Diseño/img/$id/principal.jpg";
                    if(!file_exists($image)){
                      $image="./Diseño/img/404.jpg";
                    } 
                    ?>
                    <td>
                    <a href="details.php?id=<?php echo $row['idPelicula']; ?>&token=<?php echo hash_hmac('sha256',$row['idPelicula'],KEY_TOKEN); ?>"><img style="max-height: 22vw;" class="imagelist" alt="<?php echo $row['nombrePelicula']; ?>" src="<?php echo $image; /* CARGA EN EL SRC el URL para cargar la imagen */?>"></a>
                    <div style="text-align:center; padding-top:1rem;">
                    <p class="card-text text-info"><?php echo $row['nombrePelicula']; ?></p>
                    <p class="card-text text-primary">$<?php echo number_format($row['precio'],0,'.',',');?></p>
                    </div>
                    </td>                     

                <?php
                  } else{
                    if(!file_exists($image)){
                      $image="./Diseño/img/404.jpg";
                    }  
                ?>
                  <td><img style="max-height: 22vw;" class="imagelist" alt="<?php echo $row['nombrePelicula']; ?>" src="<?php echo $image; /* CARGA EN EL SRC el URL para cargar la imagen */?>"></a>
                    <p class="card-subtitle"><?php echo $row['nombrePelicula']; ?> <br> No disponible!</p>
                  </td>
                <?php
                  }
                  }
                ?>
              </table>
            </section>
          </div>
        </div>
      </div>
    </div>
    <div class="row" id="Lista2" style="padding-top: 1rem ;">
      <div class="col-md-6" style="width:90%!important; padding-left:5vw; padding-rigth:5vw">
      <!-- Start Action CARD -->
        <div class="card card1!important" style=" ">
        <!-- Set title -->
          <h3 class="card-title">Peliculas de Suspenso</h3>
          <!-- inside card -->
          <div class="ListadePeliculas2">
            <section>
              <table>
                
                <?php 
                  foreach($resultado2 as $row) {
                    $id=$row['idPelicula'];
                    $disponibilidad=$row['disponible'];
                    if($disponibilidad>=1){
                    $id=$row['idPelicula'];
                    $image= "./Diseño/img/$id/principal.jpg";
                    if(!file_exists($image)){
                      $image="./Diseño/img/404.jpg";
                    } 
                    ?>
                    <td>
                    <a href="details.php?id=<?php echo $row['idPelicula']; ?>&token=<?php echo hash_hmac('sha256',$row['idPelicula'],KEY_TOKEN); ?>"><img style="max-height: 22vw;" class="imagelist" alt="<?php echo $row['nombrePelicula']; ?>" src="<?php echo $image; /* CARGA EN EL SRC el URL para cargar la imagen */?>"></a>
                    <div style="text-align:center; padding-top:1rem;">
                    <p class="card-text text-info"><?php echo $row['nombrePelicula']; ?></p>
                    <p class="card-text text-primary">$<?php echo number_format($row['precio'],0,'.',',');?></p>
                    </div>
                    </td>                     

                <?php
                  } else{
                    if(!file_exists($image)){
                      $image="./Diseño/img/404.jpg";
                    }  
                ?>
                  <td><img style="max-height: 22vw;" class="imagelist" alt="<?php echo $row['nombrePelicula']; ?>" src="<?php echo $image; /* CARGA EN EL SRC el URL para cargar la imagen */?>"></a>
                    <p class="card-subtitle"><?php echo $row['nombrePelicula']; ?> <br> No disponible!</p>
                  </td>
                <?php
                  }
                  }
                ?>
              </table>
            </section>
          </div>
        </div>
      </div>
    </div>
    <div class="row" id="Lista3" style="padding-top: 1rem ;">
      <div class="col-md-6" style="width:90%!important; padding-left:5vw; padding-rigth:5vw">
      <!-- Start Action CARD -->
        <div class="card card1!important" style=" ">
        <!-- Set title -->
          <h3 class="card-title">Peliculas de Aventuras</h3>
          <!-- inside card -->
          <div class="ListadePeliculas1">
            <section>
              <table>
                
                <?php 
                  foreach($resultado3 as $row) {
                    $id=$row['idPelicula'];
                    $disponibilidad=$row['disponible'];
                    if($disponibilidad>=1){
                    $id=$row['idPelicula'];
                    $image= "./Diseño/img/$id/principal.jpg";
                    if(!file_exists($image)){
                      $image="./Diseño/img/404.jpg";
                    } 
                    ?>
                    <td>
                    <a href="details.php?id=<?php echo $row['idPelicula']; ?>&token=<?php echo hash_hmac('sha256',$row['idPelicula'],KEY_TOKEN); ?>"><img style="max-height: 22vw;" class="imagelist" alt="<?php echo $row['nombrePelicula']; ?>" src="<?php echo $image; /* CARGA EN EL SRC el URL para cargar la imagen */?>"></a>
                    <div style="text-align:center; padding-top:1rem;">
                    <p class="card-text text-info"><?php echo $row['nombrePelicula']; ?></p>
                    <p class="card-text text-primary">$<?php echo number_format($row['precio'],0,'.',',');?></p>
                    </div>
                    </td>                     

                <?php
                  } else{
                    if(!file_exists($image)){
                      $image="./Diseño/img/404.jpg";
                    }  
                ?>
                  <td><img style="max-height: 22vw;" class="imagelist" alt="<?php echo $row['nombrePelicula']; ?>" src="<?php echo $image; /* CARGA EN EL SRC el URL para cargar la imagen */?>"></a>
                    <p class="card-subtitle"><?php echo $row['nombrePelicula']; ?> <br> No disponible!</p>
                  </td>
                <?php
                  }
                  }
                ?>
              </table>
            </section>
          </div>
        </div>
      </div>
    </div>
  </main>
</html>