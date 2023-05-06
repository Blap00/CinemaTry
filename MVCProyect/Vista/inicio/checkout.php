<?php
$producto= isset($_SESSION['carrito']['peliculas']) ? $_SESSION['carrito']['peliculas']: null;

if($producto!=null){
    $carrito = array(); // arreglo vacío
    foreach($producto as $clave => $asientos){
        $resultadocheck = $this->modelo->resultadoCheckout($clave, $asientos);

        // crear arreglo asociativo
        $item = array(
            "idPelicula" => isset($resultadocheck['idPelicula']) ? $resultadocheck['idPelicula'] : '',
            "nombrePelicula" => isset($resultadocheck['nombrePelicula']) ? $resultadocheck['nombrePelicula'] : '',
            "precio" => isset($resultadocheck['precio']) ? $resultadocheck['precio'] : '',
            "descuento" => isset($resultadocheck['descuento']) ? $resultadocheck['descuento'] : '',
            "asientos" => isset($resultadocheck['asientos']) ? $resultadocheck['asientos'] : '',
            "disponible" => isset($resultadocheck['disponible']) ? $resultadocheck['disponible'] : '',
        );

        array_push($carrito, $item); // agregar al arreglo $carrito
    }
}

?>

<!-- mostrar tabla con detalles del carrito -->
<main>
    <br><br><br>
    <div class="table-responsive" style="background-color: white!important;">
        <table class="table table-auto">
            <thead>
                <tr style="display: contents!important;">
                    <th scope="col">Pelicula</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Asientos solicitados</th>
                    <th scope="col">Asientos disponibles</th>
                    <th scope="col">Subtotal</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if(isset($carrito)){
                    foreach($carrito as $item){
                        //GET ID
                        $_id= $item['idPelicula'];
                        // convert "precio" to float before multiplying
                        $precio = (floatval($item["precio"]));
                        // calculate "Precio"-"Precio"*"Descuento"%
                        $precioDesc= ((floatval($item["precio"]))-((floatval($item["precio"]))*floatval($item["descuento"])/100));
                        // multiply "PecioDesc" with number of "Asientos"
                        $subtotal = ($precioDesc) * $item["asientos"];
                        $subtotal= intval($subtotal);
                        $asientosdisp= $item['asientos'] - (is_array($item["asientos"]) ? $item["asientos"][0] : $item["asientos"]);
                        $precio = is_array($item["precio"]) ? $item["precio"][0] : $precio;
                        $cantidad = is_array($item["asientos"]) ? $item["asientos"][0] : $item["asientos"]; 

                        ?>
                        <tr style="display: revert!important;">
                            <td><?php echo $item["nombrePelicula"] ?></td><!--nombre-->
                            <td><?php echo is_array($item["precio"]) ? $item["precio"][0] : $item["precio"] ?></td> <!--precio-->
                            <td><?php echo is_array($item["asientos"]) ? $item["asientos"][0] : $item["asientos"] ?></td> <!--asientos solicitados-->
                            <td><?php echo is_array($item['asientos']) ? $item['asientos'][0] : $item['asientos'] ?></td> <!--Asientos disponibles-->
                            <td> <div id="Subtotal_<?=$_id?>"></div>
                                <?php echo $subtotal ?></td> <!--subtotal-->    
                            <td>
                                <form action="" method="post">
                                    <input type="hidden" name="clave" value="<?php echo $item["idPelicula"] ?>">
                                    <button class="btn btn-danger" type="submit" name="accion" value="Eliminar">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        <?php
                    }
                } else {
                    ?>
                    <tr>
                        <td colspan="6">Lista Vacia</td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</main>

