<?php

include '../database.php';

if (isset($_POST['submit'])) {

    $containertype = '';
    $brand_id = $_POST['brandid'];
    $product_name_baseunite = $_POST['productname'];
    $boxcount = 1;
    $tincount = 1;
    $boxprice = $_POST['boxprice'];
    $tinprice = $_POST['tinprice'];

    if ($boxprice != '') {

        $containertype = 1;
        $containerliter = "10L";
        $boxcount = 1;
        $literprice = $_POST['boxprice'];
        $perboxprice = $literprice * 10;
        $totalliters = $boxcount * 10;
        $totalcontainerprice = $perboxprice * $boxcount;
    } else {

        $containertype = 2;
        $containerliter = "10L";
        $tincount = 1;
        $tinprice = $_POST['tinprice'];
        $pertinprice = $tinprice;
        $totalliters = $tincount * 10;
        $totalcontainerprice = $tinprice * $tincount;
    }
    // echo '<br>'. $gstrate = $_POST['gstrate'];
    // echo '<br>'. $GSTamount = ($price * $gstrate)/100;
    // echo '<br>'. $totalGSTamount = $GSTamount + $price;
    $date = date("Y-m-d h:i:s A");
    $productdetails = new database();

    // ?Adding product_details table initially
    $productdetails->insert(
        'products_detail',
        [
            'brand_id' => $brand_id,
            'product_name_baseunite' => $product_name_baseunite,
            'container_id' => $containertype,
            'per_container_price' => $totalcontainerprice,
            // 'litre'=>$litre,
            // 'GST_rate'=>$gstrate,'product_total_GST_amount'=>$totalGSTamount,
            'added_date_time' => $date
        ]
    );

    // ?If product_details table effected then fetch last product Id
    if ($productdetails == true) {

        $productdetails->select("products_detail", "id","","ORDER BY id DESC LIMIT 1");
        $result = $productdetails->sql;
        $product_last_id = '';

        // echo $product_last_id;
    // }
        while ($row = mysqli_fetch_assoc($result)) {
            $product_last_id = $row['id'];
        }

        // ?Adding record on product price table with product last id  
        if ($containertype == "1") {

            $productdetails->insert(
                'product_price',
                [
                    'product_id' => $product_last_id,
                    'container_id' => $containertype,
                    'product_name_baseunite'=>$product_name_baseunite,
                    'liter_price' => $literprice,
                    'container_liter' => $containerliter,
                    'container_count' => $boxcount,
                    'per_container_price' => $perboxprice,
                    'total_liters' => $totalliters,
                    'total_price' => $totalcontainerprice,
                ]
            );
            // // // echo $containertype;
            // echo $product_last_id;
            // echo $literprice;
            // echo $containerliter;
            // echo $boxcount;
            // echo $perboxprice;
            // echo $totalliters;
            // echo $totalcontainerprice;
        } 
        else {
            $productdetails->insert(
                'product_price',
                [
                    'product_id' => $product_last_id,
                    'container_id' => $containertype,
                    'product_name_baseunite'=>$product_name_baseunite,
                    'liter_price' => 'No price for per liter',
                    'container_liter' => $containerliter,
                    'container_count' => $tincount,
                    'per_container_price' => $pertinprice,
                    'total_liters' => $totalliters,
                    'total_price' => $totalcontainerprice,
                ]
            );
            // echo 'TIN';
            // echo $product_last_id;
            // echo $containerliter;
            // echo $tincount;
            // echo $pertinprice;
            // echo $totalliters;
            // echo $totalcontainerprice;
            
        }
        header('location:view.php');
    }
}