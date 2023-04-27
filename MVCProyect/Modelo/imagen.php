<?php

    class Imagen{
        //Create private data(of)
        private $pdo;
        private $numb_id;
        private $file_url;
        // Create public function to get and set data
        public function __CONSTRUCT(){
            $this->pdo=BasedeDatos::Conectar();
        }
        // public function getURL(){
        //     return $this->file_url;
        // }
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
                $consulta=$this->pdo->prepare("SELECT count(`numb_id`) FROM `imagecinema` where Categoria='Accion' ;");
                $consulta->execute();
                return $consulta->fetch(PDO::FETCH_OBJ);
            } catch(Exception $e){
                die($e->getMessage());

            }
        }
        public function getUrlEspecificAC(int $i){
            try{
                $consulta=$this->pdo->prepare("SELECT file_url from `imagecinema` where numb_id=$i and Categoria='Accion';");
                $consulta->execute();
                return $consulta->fetch(PDO::FETCH_OBJ);
            } catch(Exception $e){
                die($e->getMessage());
            }
        }
        public function getNamesAC(int $i){
            try{
                $consulta=$this->pdo->prepare("SELECT Nombre from `imagecinema` where numb_id=$i and Categoria='Accion' ;");
                $consulta->execute();
                return $consulta->fetch(PDO::FETCH_OBJ);
            } catch(Exception $e){
                die($e->getMessage());
            }
        }
        public function getCantSu(){
            try{
                $consulta=$this->pdo->prepare("SELECT count(`numb_id`) FROM `imagecinema` where Categoria='Suspenso' ;");
                $consulta->execute();
                return $consulta->fetch(PDO::FETCH_OBJ);
            } catch(Exception $e){
                die($e->getMessage());

            }
        }
        public function getUrlEspecificaSu(int $f){
            try{
                $i=$f+4;
                $consulta=$this->pdo->prepare("SELECT file_url from `imagecinema` where numb_id=$i and Categoria='Suspenso';");
                $consulta->execute();
                return $consulta->fetch(PDO::FETCH_OBJ);
            } catch(Exception $e){
                die($e->getMessage());
            }
        }
        public function getNameSu(int $f){
            try{
                $i=$f+4;    
                $consulta=$this->pdo->prepare("SELECT Nombre from `imagecinema` where numb_id=$i and Categoria='Suspenso' ;");
                $consulta->execute();
                $resultado = $consulta->fetch(PDO::FETCH_OBJ);
                return $resultado;
            } catch(Exception $e){
                die($e->getMessage());
            }
        }
    }
?>