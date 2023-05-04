<?php
    $table='productos';
    class Imagen{
        //Create private data(of)
        private $pdo;
        private $id_movie;
        private $name_movie;
        private $synopsis_movie;
        private $price_movie;
        private $id_category;
        private $disp_movie;
        public $listaCarrito = array();
        public function __CONSTRUCT(){
            $this->pdo=BasedeDatos::Conectar();
        }
        //Category 1
        public function resultado1(){
            try {
                $consulta = $this->pdo->prepare("SELECT * FROM `productos` WHERE disponible=1 and idCategoria=1;");
                $consulta->execute();               
                return $consulta->fetchAll(PDO::FETCH_ASSOC); //LO TENIA EN (PDO::FETCH_OBJ) :D
            } catch (PDOException $e) {
                echo "Error de conexión: " . $e->getMessage();
                return null;
            }
        }
        //Category 2
        public function resultado2(){
            try {
                $consulta = $this->pdo->prepare("SELECT * FROM `productos` WHERE disponible=1 and idCategoria=2;");
                $consulta->execute();               
                return $consulta->fetchAll(PDO::FETCH_ASSOC); //LO TENIA EN (PDO::FETCH_OBJ) :D
            } catch (PDOException $e) {
                echo "Error de conexión: " . $e->getMessage();
                return null;
            }
        }
        //Category 3
        public function resultado3(){
            try {
                $consulta = $this->pdo->prepare("SELECT * FROM `productos` WHERE disponible=1 and idCategoria=3;");
                $consulta->execute();               
                return $consulta->fetchAll(PDO::FETCH_ASSOC); //LO TENIA EN (PDO::FETCH_OBJ) :D
            } catch (PDOException $e) {
                echo "Error de conexión: " . $e->getMessage();
                return null;
            }
        }
        //Filtrado count;
        public function filtrado(int $id){
            try {
                $consulta = $this->pdo->prepare("SELECT * FROM `productos` WHERE idPelicula='$id' and disponible>=1");
                $consulta->execute();               
                return $consulta->fetch(PDO::FETCH_ASSOC); //LO TENIA EN (PDO::FETCH_OBJ) :D
            } catch (PDOException $e) {
                echo "Error de conexión: " . $e->getMessage();
                return null;
            }
        }
        //Checkout;
        // public function resultadoCheckout(int $clave, int $cantidad){
        //     try {
        //         $consulta = $this->pdo->prepare("SELECT *, $cantidad FROM `productos` WHERE disponible>=1");
        //         $consulta->execute($clave);
        //         $listaCarrito[]=$consulta->fetchAll(PDO::FETCH_ASSOC); 
        //         return $listaCarrito;              

        //     } catch (PDOException $e) {
        //         echo "Error de conexión: " . $e->getMessage();
        //         return null;
        //     }
        // }
        public function resultadoCheckout(){
            try {
                $consulta = $this->pdo->prepare("SELECT * FROM `productos` WHERE disponible=1");
                $consulta->execute();
                $listaCarrito[] = $consulta->fetchAll(PDO::FETCH_ASSOC); 
                return $listaCarrito;              
            } catch (PDOException $e) {
                echo "Error de conexión: " . $e->getMessage();
                return null;
            }
        }
        
        
    }
?>