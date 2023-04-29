<?php

require_once "./Modelo/imagen.php"; //Llama a modelo, donde tenemos las funciones y conexion de nuestra BBDD
class InicioControlador{
    private $modelo;
    public function __CONSTRUCT(){
        $this->modelo=new Imagen();
    }
    public function Inicio(){
        require_once "./Vista/templates/header.php";
        require_once "./Vista/inicio/principal.php";
        require_once "./Vista/templates/footer.php";
    }

}

?>
