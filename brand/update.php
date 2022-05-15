<?php 

require_once('../database.php');
 

    if (isset($_POST['submit'])) {

        $id = $_POST['id'];
        $brandid = $_POST['brandid'];
        $productnamebaseunite = $_POST['product_name_baseunite'];
         
        // $quantity = $_POST['quantity'];

        // $litre = $_POST['litre'];

        // $price = $_POST['price'];

        // $gstrate = $_POST['gstrate'];

        // $GSTamount = ($price * $gstrate)/100;

        // $totalGSTamount = $GSTamount + $price;


        $date = date("Y-m-d h:i:s A");

        $editproductobject = new database();

        $editproductobject->update('products_detail',['brand_id'=>$brandid,'product_name_baseunite'=>$productnamebaseunite,
        // 'product_quantity'=>$quantity,
        // 'litre'=>$litre,
        // 'product_price'=>$price,
        // 'GST_rate'=>$gstrate,'product_total_GST_amount'=>$totalGSTamount,
        'updated_date_time'=>$date],"product_id='$id'");

        if ($editproductobject == true) {

            header('location:view.php');

        }

    }

?>