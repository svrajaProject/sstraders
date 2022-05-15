<?php 

    include '../database.php';


    $id = $_GET['id'];


    $a = new database();

    // $a->delete('products_detail',"product_id='$id'");
    $disable = 0;
    $a->update('products_detail',['is_enabled'=>$disable],"id='$id'");

    if($a){
        header('location: view.php');
    }

?>