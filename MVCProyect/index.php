<?php
    require_once "Modelo/basededatos.php"   ;
    // echo("Hello world");
    // var_dump($_GET['controlador']);
    if(!isset($_GET['c'])){
        // echo("Inicio");    
        require_once "controladores/inicio.controlador.php";
        $controlador= new InicioControlador();
        call_user_func(array($controlador,"Inicio"));
    }
    elseif(isset($_GET['c'])){
        $controlador=$_GET['c'];
        require_once "controladores/$controlador.controlador.php";
        $controlador = ucwords($controlador)."Controlador";
        $controlador= new $controlador;
        $accion = isset($_GET['a']) ? $_GET['a'] : "Inicio";
        call_user_func(array($controlador,  $accion));
    }
?>