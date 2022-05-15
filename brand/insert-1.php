<?php

include '../database.php';

if (isset($_POST['submit'])) {

    $productcontainertype = '';

    echo '<br>' .       $productbrand = $_POST['productbrand'];

    echo '<br>' .   $productname = $_POST['productname'];


    $boxcount = $_POST['boxcount'];

    $boxprice = $_POST['boxprice'];



    if ($boxcount != '' and $boxprice != '') {

        echo '.<br>' . 'productcontainertype:' . $productcontainertype = 'Box';

        echo '.<br>' . 'Total quantity(Liter):' . $pertinquantity = '10L';

        echo '<br>' . 'Total' . $productcontainertype . 'count: ' . $boxcount = $_POST['boxcount'];

        echo '<br>' . '1 liter price:' . $boxprice = $_POST['boxprice'];

        echo '<br>' . '1 Box price: ' . $perbox = $boxprice * 10;

        echo '<br>' . 'Total Box price: ' . $totalboxprice = $perbox * $boxcount;
    } else {
        echo '.<br>' . 'productcontainertype:' . $productcontainertype = 'Tin';
        echo '.<br>' . 'Total quantity(Tin): ' . $pertinquantity = '10L';
        echo '<br>' . 'Total' . $productcontainertype . 'count: ' . $tincount = $_POST['tincount'];
        echo '<br>' . '1 Tin price' . $tinprice = $_POST['tinprice'];
        echo '<br>' . 'Total Tin price: ' . $totalboxprice = $tinprice * $tincount;
    }
    // $litre = $_POST['litre'];

    //    echo '<br>'. $price = $_POST['price'];

    // $gstrate = $_POST['gstrate'];

    // $GSTamount = ($price * $gstrate)/100;

    //  $totalGSTamount = $GSTamount + $price;

    echo '<br>' . $date = date("Y-m-d h:i:s A");


    $a = new database();

    $a->insert('products_detail',['product_brand'=>$productbrand,'product_name_baseunite'=>$productname,
    'product_container_type'=>$productcontainertype,
    // 'litre'=>$litre,
    'product_price'=>$price,
    // 'GST_rate'=>$gstrate,'product_total_GST_amount'=>$totalGSTamount,
    'added_date_time'=>$date]);
 
    if ($a == true) {



        header('location:view.php');
    }

}
