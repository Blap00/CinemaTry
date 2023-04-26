<?php

require_once "./Modelo/imagen.php";
class InicioControlador{
    private $modelo;
    public function __CONSTRUCT(){
        $this->modelo=new Imagen();
    }
    public function Inicio(){
        // $bd= BaseDeDatos::Conectar();
        // echo"Hello world";
        require_once "./Vista/templates/header.php";
        require_once "./Vista/inicio/principal.php";
    }

}

?>
