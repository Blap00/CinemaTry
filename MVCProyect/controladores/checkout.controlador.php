<?php

require_once "./Modelo/imagen.php"; //Llama a modelo, donde tenemos las funciones y conexion de nuestra BBDD
class InicioControlador{
    private $modelo;
    public function __CONSTRUCT(){
        $this->modelo=new Imagen();
    }
    public function Inicio(){
        require_once "./controladores/config.php";
        require_once "./Modelo/imagen.php";
        require_once "./Vista/templates/header.php";
        require_once "./Vista/inicio/checkout.php";
        require_once "./Vista/templates/footer.php";
    }
}
?>