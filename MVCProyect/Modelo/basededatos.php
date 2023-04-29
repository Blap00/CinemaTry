<?php
    class BasedeDatos{
    const servidor="Localhost";//Servidor en el que se encuentra nuesta BBDD
    const usuarioBD="root";//Usuario, el default pertenece a Root
    const pass="";//Contraseña para acceder a esta BBDD
    const nombrebdd="cinemaproyect";//Nombre de nuestra BBDD
    public static function conectar(){
        try{
            $conexion = new PDO("mysql:host=".self::servidor./*Puede modificarse por $this->servidor, pero como utilizamos const no cuenta */"; dbname=".self::nombrebdd.";charset=utf8",self::usuarioBD, self::pass);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conexion;
        } 
        catch(PDOexception $e){
            return "fallo".$e->getMessage();
            exit;
        }
    }
}
?>