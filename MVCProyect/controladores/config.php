<?php
//FECHAS
date_default_timezone_set('America/Mexico_City');   
$fecha_actual = date("d-m-y");
//TOKEN
define("KEY_TOKEN", "BLAP-WAS15HERE-".$fecha_actual."-time");
//MONEDAS
define("MONEDACLP", "$");
define("MONEDAEUR", "EUR$");
//CARRITO
session_start();
$num_cart=0;
if(isset($_SESSION['carrito']['peliculas'])){
    $num_cart= count($_SESSION['carrito']['peliculas']);
}

?>