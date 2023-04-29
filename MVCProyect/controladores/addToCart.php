<?php
if(isset($_POST['addToCart'])){
    $id= $_POST['id'];
    var_dump($id);
    $file_url= $_POST['image'];
    var_dump($file_url);
    $name= $_POST['especificName'];
    var_dump($name);
    $disp=$_POST['disp'];
    var_dump($disp);
    $price= $_POST['price'];
    var_dump($price);

}

?>