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
    <!-- <div class="table-responsive" style="background-color: #fff;">
        <table class="table"> -->
    <div class="table-responsive table-container-flex" >
        <table class="table">
            <thead>
                <tr>
                    <th>Pelicula</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>SubTotal</th>
                    <th>Disponible</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if(isset($carrito)){
                    foreach($carrito as $item){
                        // convert "precio" to float before multiplying
                        $precio = floatval($item["precio"]);
                        // calculate subtotal
                        $subtotal = $precio * $item["asientos"];
                        $precio = is_array($item["precio"]) ? $item["precio"][0] : $precio;
                        $cantidad = is_array($item["asientos"]) ? $item["asientos"][0] : $item["asientos"]; 

                        ?>
                        <tr>
                            <td><?php echo $item["nombrePelicula"] ?></td><!--nombre-->
                            <td><?php echo is_array($item["precio"]) ? $item["precio"][0] : $item["precio"] ?></td> <!--precio-->
                            <td><?php echo is_array($item["asientos"]) ? $item["asientos"][0] : $item["asientos"] ?></td> <!--asientos-->
                            <td><?php echo $subtotal ?></td> <!--subtotal-->
                            <td><?php echo $item["disponible"] ?></td> <!--disponible-->
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
