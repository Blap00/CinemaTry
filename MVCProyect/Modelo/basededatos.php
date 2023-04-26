<?php
    class BasedeDatos{
    const servidor="Localhost";
    const usuarioBD="root";
    const pass="";
    const nombrebdd="cvmproyect";
    public static function conectar(){
        try{
            $conexion = new PDO("mysql:host=".self::servidor."; dbname=".self::nombrebdd.";charset=utf8",self::usuarioBD, self::pass);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conexion;
        } 
        catch(PDOexception $e){
            return "fallo".$e->getMessage();

        }
    }
}
?>