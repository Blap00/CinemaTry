<?php
    require_once "Modelo/basededatos.php"; //Coneccion directa a nuesta BBDD desde index.php(pagina principal)
    require_once "controladores/detalles.controlador.php"; //Coneccion a nuestro controlador, donde nos redirije las conecciones necesarias
    $controlador= new InicioControlador(); //Crea funcion de controlador, donde se instancian en inicio.controlador
    call_user_func(array($controlador,"Inicio"));//Inicia todo
?>