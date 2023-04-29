<?php
    require_once "Modelo/basededatos.php"; //Coneccion directa a nuesta BBDD desde index.php(pagina principal)
    require_once "controladores/inicio.controlador.php"; //Coneccion a nuestro controlador, donde nos redirije las conecciones necesarias
    $controlador= new InicioControlador(); //Crea funcion de controlador, donde se instancian en inicio.controlador
    call_user_func(array($controlador,"Inicio"));//Inicia todo
?>


    <!-- // <div>
    // // if(!isset($_GET['admin'])){
    //     // echo("Inicio use controlador inicio");  
    // // if(isset($_GET['Disponible'])){
    // //     echo"Disponible";
    // // }  elseif(isset($_GET['NoDisponible'])){
    // //     echo"No disponible";            
    // // }
    // // }
    // // elseif(isset($_GET['admin'])){
    // //     $controlador=$_GET['admin'];
    // //     require_once "controladores/$controlador.controlador.php";
    // //     $controlador = ucwords($controlador)."Controlador";
    // //     $controlador= new $controlador;
    // //     $accion = isset($_GET['a']) ? $_GET['a'] : "Inicio";
    // //     call_user_func(array($controlador,  $accion));
    // // }
    // </div> -->