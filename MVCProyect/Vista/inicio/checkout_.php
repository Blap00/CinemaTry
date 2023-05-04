<?php
$producto= isset($_SESSION['carrito']['peliculas']) ? $_SESSION['carrito']['peliculas']: null;

if($producto!=null){
    $carrito = array(); // arreglo vacío
    foreach($producto as $clave => $cantidad){
        $resultadocheck = $this->modelo->resultadoCheckout($clave, $cantidad);

        // crear arreglo asociativo
        $item = array(
            "idPelicula" => $resultadocheck[0]['idPelicula'],
            "nombrePelicula" => $resultadocheck[0]['nombrePelicula'],
            "precio" => $resultadocheck[0]['precio'],
            "descuento" => $resultadocheck[0]['descuento'],
            "asientos" => $resultadocheck[0]['asientos'],
            "cantidad" => $cantidad
        );

        array_push($carrito, $item); // agregar al arreglo $carrito
    }
}

?>

<!-- mostrar tabla con detalles del carrito -->
<main>
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
                // calcular subtotal
                $subtotal = $item["precio"] * $item["cantidad"];
                ?>
                <tr>
                    <td><?php echo $item["nombrePelicula"] ?></td>
                    <td><?php echo $item["precio"] ?></td>
                    <td><?php echo $item["cantidad"] ?></td>
                    <td><?php echo $subtotal ?></td>
                    <td><?php echo $item["disponiblea"] ?></td>
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




<?php 
/*$producto= isset($_SESSION['carrito']['peliculas']) ? $_SESSION['carrito']['peliculas']: null;
var_dump($producto);
echo '<br>';
var_dump($producto!=null);
echo '<br>';
echo"Dentro de Foreach: '<br>' ";
if($producto!=null){
    foreach($producto as $clave => $cantidad){
        var_dump($producto);
        echo '<br>';
        var_dump($clave);
        echo'<br>';
        var_dump($cantidad);
        echo '<br>';
        $resultadocheck = $this->modelo->resultadoCheckout($);
        var_dump($resultadocheck);
        echo'<br>';
    }
}   
/*
$listaResultados = array();
$producto = isset($_SESSION['carrito']['peliculas']) ? $_SESSION['carrito']['peliculas'] : null;

if($producto != null){
    foreach($producto as $clave => $cantidad){
        $resultadocheck = $this->modelo->resultadoCheckout($clave, $cantidad);
        $listaResultados = array_merge($listaResultados, $resultadocheck);
    }
}

return $listaResultados; */
?>
<main>
    <!-- <br><br><br>
    <div class="test"> -->
        <?php
    //    var_dump($resultadocheck);
  //      echo'<br>';
//        var_dump($producto);    
        ?>
    <!-- </div>
    <div class="main">
        <div class="table-responsive"> -->



            <!-- <table class="table">
                <thead>
                    <tr>
                        Pelicula
                    </tr>
                    <tr>
                        Precio
                    </tr>
                    <tr>
                        Cantidad
                    </tr>
                    <tr>
                        SubTotal
                    </tr>
                    <tr>
                        Disponiblea
                    </tr>
                    <tr>
                        Opciones
                    </tr>
                </thead>
                <tbody>
                    <?php /*if($resultadocheck==null){ echo '<tr><td colspan="5" class="text-center"><b> Lista Vacia </td></tr>';} else{
                        $total=0;
                        foreach($resultadocheck as $peliculas){
                            $idPeli= $resultadocheck['idPelicula'];
                            $nombre= $resultadocheck['nombrePelicula'];
                            $precio= $resultadocheck['precio'];
                            $descuento= $resultadocheck['descuento'];
                            $asientos= $resultadocheck['asientos'];
                            $precio_desc= $precio-($precio*($descuento/100));
                            $subtotal= $cantidad*$precio_desc;
                            $total+=$subtotal;*/
                            ?>
                    <tr>
                        <td>
                            <?php// echo $nombre; ?>
                        </td>
                        <td>
                            <?php //echo MONEDACLP . number_format($precio_desc,1,'.',','); ?>
                        </td>
                        <td>
                            <?php// echo "¿Cantidad de asientos solicitados?'<br>'"?>
                            <input type="number" min="0" max="10" step="1" value="<?php// echo $cantidad ?>" size="5" id="Cantidad_<?php// echo $id?>" onchange="">
                        </td>
                        <td>
                            <div class="subtotal_<?php echo $id?>" name="subtotal[]">
                                <?php// echo MONEDACLP . number_format($subtotal,1,'.',','); ?>
                            </div>
                        </td>
                        <td>
                            <?php //echo "Cantidad disponible: " . $asientos; ?>
                        </td>
                    </tr>
                    <?php
                      //  }
                    //}?>
                </tbody>

            </table> -->
        </div>
    </div>
</main>
