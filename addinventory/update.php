<?php 

    include '../database.php';


    if (isset($_POST['submit'])) {

        $id = $_POST['id'];
        
        $productname = $_POST['productname'];
         
        $quantity = $_POST['quantity'];

        $litre = $_POST['litre'];

        $price = $_POST['price'];

        $gst = $_POST['gst'];


        $date = date("Y-m-d h:i:s A");

        $a = new database();

        $a->update('products_detail',['product_name'=>$productname,'product_quantity'=>$quantity,'litre'=>$litre,'product_price'=>$price,'product_GST'=>$gst,'updated_date_time'=>$date],"product_id='$id'");

        if ($a == true) {

            header('location:view.php');

        }

    }

?>