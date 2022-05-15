<?php 

    include '../database.php';


    $id = $_GET['id'];


    $a = new database();

    // $a->delete('customers_detail',"id='$id'");

    $a->update('customers_detail',['is_removed'=>1 ],"id='$id'");

    if($a){
        header('location: view.php');
    }

?>