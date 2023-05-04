<?php
require './config.php';
if(isset($_POST['id'])){
    $id=$_POST['id'];
    $token=$_POST['token'];
    $token_temp= hash_hmac('sha256', $id, KEY_TOKEN);
    if($token_temp==$token){
        if(isset($_SESSION['carrito']['peliculas'][$id])){
            $_SESSION['carrito']['peliculas'][$id]+=1;
        }else{
            $_SESSION['carrito']['peliculas'][$id]=1;
        }
        $datos['numero']=count($_SESSION['carrito']['peliculas']);
        $datos['ok']=true;
    }else{
        $datos['ok']=false;
    }

}else{
    $datos['ok']=false;
}

echo json_encode($datos);


?>