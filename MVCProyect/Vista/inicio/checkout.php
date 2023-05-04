<?php
$producto= isset($_SESSION['carrito']['peliculas']) ? $_SESSION['carrito']['peliculas']: null;

if($producto!=null){
    $carrito = array(); // arreglo vacío
    foreach($producto as $clave => $cantidad){
        $resultadocheck = $this->modelo->resultadoCheckout($clave, $cantidad);

        // crear arreglo asociativo
        $item = array(
                "idPelicula" => isset($resultadocheck['idPelicula']) ? $resultadocheck['idPelicula'] : '',
                "nombrePelicula" => isset($resultadocheck['nombrePelicula']) ? $resultadocheck['nombrePelicula'] : '',
                "precio" => isset($resultadocheck['precio']) ? $resultadocheck['precio'] : '',
                "descuento" => isset($resultadocheck['descuento']) ? $resultadocheck['descuento'] : '',
                "asientos" => isset($resultadocheck['asientos']) ? $resultadocheck['asientos'] : '',
                "disponible" => isset($resultadocheck['disponible']) ? $resultadocheck['disponible'] : '',
                
                "cantidad" => $cantidad
        );

        array_push($carrito, $item); // agregar al arreglo $carrito
    }
}

?>

<!-- mostrar tabla con detalles del carrito -->
<main>
    <br><br><br>
    <table class="table">
        <thead>
            <tr>
                <th>Pelicula</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>SubTotal</th>
                <th>Disponiblea</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if(isset($carrito)){
                foreach($carrito as $item){
                    // convert "precio" to float before multiplying
                    $precio = intval($item["precio"]);
                    // calculate subtotal
                    $subtotal = $precio * $item["cantidad"];
                    ?>
                    <tr>
                        <td><?php echo $item["nombrePelicula"] ?></td>
                        <td><?php echo $precio["precio"] ?></td>
                        <td><?php echo $item["cantidad"] ?></td>
                        <td><?php echo $subtotal ?></td>
                        <td><?php echo $item["disponible"] ?></td>
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
</main>