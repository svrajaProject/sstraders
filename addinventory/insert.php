<?php 

    include '../database.php';

    if (isset($_POST['submit'])) {

        $brandid= $_POST['brandid'];
        $productnamebaseunite = $_POST['productnamebaseunite'];
        $containerid = $_POST['container_id'];
        $quantity = $_POST['quantity'];
        
        // echo  $totalliters = $_POST[''];
        // echo  $percontainer_price = $_POST[''];
        // echo  $totalprice = $_POST[''];
        // echo  $count = $_POST[''];
        // echo  $productid = $_POST[''];
        // echo  $importeddatetime = date("Y-m-d h:i:s A");


        $productPrice = new database();

        $productPrice->select("product_price","*","product_name_baseunite='$productnamebaseunite'");

        $result = $productPrice->sql;

        $row = mysqli_fetch_assoc($result);

    //     // echo 'ID:'.$row['id'];
    //     echo $productid = $row['id'];
        $date = date("Y-m-d h:i:s A");
    //     $b->select(
    //         // "products_detail", "*","",$limit);
    //         "product_price", 

    //     "*",
        
    //     // "products_detail.is_enabled=1",
                                                
    //     // null,
       
    //     // "product_price as t2", 

    //     "product_id = $productid"
    // );
    //     $productPriceDetails =  $b->sql;
    //     $row = mysqli_fetch_assoc($productPriceDetails);
    //     echo '<br>ProductID: '.$row['liter_price'];

        // echo '<br>'.$row['container_id'];    
        
        if($containerid == 1){
            $product_id = $row['product_id'];
            // echo '<br>ProductID: '.$product_id;
            // echo '<br>'.$productnamebaseunite;
            // echo '<br> Box Count: '.$quantity;
            $perliterPrice = $row['liter_price'];$TotalLiters = $quantity * 10;
            $PercontainerPrice = $row['per_container_price'];
            $TotalContainerPrice = $TotalLiters * $perliterPrice;
            $date;
            
            $productPrice->insert('product_import',[
                'brand_id'=>$brandid,
                'product_name_baseunite'=>$productnamebaseunite,
                'container_id'=>$containerid,
                'liter_price'=>$perliterPrice,
                'total_liters'=>$TotalLiters,
                'per_container_price'=>$PercontainerPrice,
                'total_container_price'=>$TotalContainerPrice,
                'total_containers'=>$quantity,
                'product_id'=>$product_id,
                'imported_date_time'=>$date,

            ]);

            if ($productPrice == true) {
    
                header('location:view.php');
    
            }
        }
        else{
            $product_id = $row['product_id'];
            // echo '<br>'.$productnamebaseunite;
            // echo '<br> Tin Count: '.$quantity;
            // echo $perliterPrice = $row['liter_price'];
            $perliterPrice = "No price for per liter";
            $TotalLiters = $quantity * 10;
            // echo '<br> Total tin Price: '.$TotalContainerPrice = $TotalLiters;
            $PercontainerPrice = $row['per_container_price'];
            $TotalTineValue = $PercontainerPrice * $TotalLiters;
            $date;
            $productPrice->insert('product_import',[
            'brand_id'=>$brandid,
            'product_name_baseunite'=>$productnamebaseunite,
            'container_id'=>$containerid,
            'liter_price'=>$perliterPrice,
            'total_liters'=>$TotalLiters,
            'per_container_price'=>$PercontainerPrice,
            'total_container_price'=>$TotalTineValue,
            'total_containers'=>$quantity,
            'product_id'=>$product_id,
            'imported_date_time'=>$date,
        ]);
            if ($productPrice == true) {
    
                header('location:view.php');
    
            }

        }
        // echo '<br>'.$row['total_liters'];
        // echo '<br>'.$row['container_liter'];
        // echo '<br>'.$row['per_container_price'];
        // echo '<br>'.$row['total_price'];
        // echo '<br>'.$row['container_count'];
        // echo '<br>'.$date;

        // $productPrice->insert('product_import',
        // ['brand_id'=>$brandid,
        // 'product_name_baseunite'=>$productnamebaseunite,
        // 'container_id'=>$containerid,
        // 'liter_price'=>$literprice,
        // 'total_liters'=>$totalliters,
        // 'per_container_price'=>$percontainer_price,
        // 'total_price'=>$totalprice,
        // 'count'=>$count,
        // 'product_id'=>$productid,
        // 'imported_date_time'=>$importeddatetime ]);

        // if ($productPrice == true) {

        //     header('location:view.php');

        // }

    }

?>