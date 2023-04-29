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
        public function __CONSTRUCT(){
            $this->pdo=BasedeDatos::Conectar();
        }
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

    }
?>
        <!-- // Create public function to get and set data



        /*
        
        public function getURL(){
            return $this->file_url;
        }
        public function getID(){
            return $this->numb_id;
        }
        public function setNumbId(string $numb){
            $this->numb_id=$numb;
        }
        public function setURL(string $url){
            $this->file_url=$url;
        }
        public function getCantAC(){
            try{
                $consulta=$this->pdo->prepare("SELECT count(`numb_id`) FROM $this->$table where Categoria='Accion' ;");
                $consulta->execute();
                return $consulta->fetch(PDO::FETCH_OBJ);
            } catch(Exception $e){
                die($e->getMessage());

            }
        }
        public function getUrlEspecificAC(int $i){
            try{
                $consulta=$this->pdo->prepare("SELECT file_url from $this->$table where numb_id=$i and Categoria='Accion';");
                $consulta->execute();
                return $consulta->fetch(PDO::FETCH_OBJ);
            } catch(Exception $e){
                die($e->getMessage());
            }
        }
        public function getNamesAC(int $i){
            try{
                $consulta=$this->pdo->prepare("SELECT Nombre from $this->$table where numb_id=$i and Categoria='Accion' ;");
                $consulta->execute();
                return $consulta->fetch(PDO::FETCH_OBJ);
            } catch(Exception $e){
                die($e->getMessage());
            }
        }
        public function getCantSu(){
            try{
                $consulta=$this->pdo->prepare("SELECT count(`numb_id`) FROM $this->$table where Categoria='Suspenso' ;");
                $consulta->execute();
                return $consulta->fetch(PDO::FETCH_OBJ);
            } catch(Exception $e){
                die($e->getMessage());

            }
        }
            public function getUrlEspecificaSu(int $f, int $cac){
                try{
                    $i=$f+$cac;
                    $consulta=$this->pdo->prepare("SELECT file_url from $this->$table where numb_id=$i and Categoria='Suspenso';");
                    $consulta->execute();
                    return $consulta->fetch(PDO::FETCH_OBJ);
                } catch(Exception $e){
                    die($e->getMessage());
                }
            }
        public function getNameSu(int $f, int $cac){
            try{
                $i=$f+$cac;    
                $consulta=$this->pdo->prepare("SELECT Nombre from $this->$table where numb_id=$i and Categoria='Suspenso' ;");
                $consulta->execute();
                $resultado = $consulta->fetch(PDO::FETCH_OBJ);
                return $resultado;
            } catch(Exception $e){
                die($e->getMessage());
            }
        }
        public function getCantAV(){
            try{
                $consulta=$this->pdo->prepare("SELECT count(`numb_id`) FROM $this->$table where Categoria='Aventura' ;");
                $consulta->execute();
                return $consulta->fetch(PDO::FETCH_OBJ);
            } catch(Exception $e){
                die($e->getMessage());

            }
        }
            public function getUrlEspecificaAV(int $f, int $cacsu){
                try{
                    $i=$f+$cacsu;
                    $consulta=$this->pdo->prepare("SELECT file_url from $this->$table where numb_id=$i and Categoria='Aventura';");
                    $consulta->execute();
                    return $consulta->fetch(PDO::FETCH_OBJ);
                } catch(Exception $e){
                    die($e->getMessage());
                }
            }
        public function getNameAV(int $f, int $cacsu){
            try{
                $i=$f+$cacsu;    
                $consulta=$this->pdo->prepare("SELECT Nombre from $this->$table where numb_id=$i and Categoria='Aventura' ;");
                $consulta->execute();
                $resultado = $consulta->fetch(PDO::FETCH_OBJ);
                return $resultado;
            } catch(Exception $e){
                die($e->getMessage());
            }
        }
        public function getCantDisp(int $i){
            try{    
                $consulta=$this->pdo->prepare("SELECT 
                                                CASE 
                                                    WHEN Cantidad_disp <= 1 THEN 'NO DISPONIBLE'
                                                    ELSE Cantidad_disp
                                                END as Cantidad_disp
                                                FROM $this->$table
                                                WHERE numb_id = $i ;");
                $consulta->execute();
                $resultado = $consulta->fetch(PDO::FETCH_OBJ);
                return $resultado;
            } catch(Exception $e){
                die($e->getMessage());
            }
        }
        public function getprice(int $i){
            try{    
                $consulta=$this->pdo->prepare("SELECT Precio
                                                FROM $this->$table
                                                WHERE numb_id = $i ;");
                $consulta->execute();
                $resultado = $consulta->fetch(PDO::FETCH_OBJ);
                return $resultado;
            } catch(Exception $e){
                die($e->getMessage());
            }
        }
        
    }
?>
*/ -->