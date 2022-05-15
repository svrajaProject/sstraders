<?php 

    include '../database.php';


    $id = $_GET['id'];


    $a = new database();

    $a->delete('bills_detail',"product_id='$id'");

    if($a){
        header('location: view.php');
    }

?>