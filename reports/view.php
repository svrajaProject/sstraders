<?
include '../database.php';

$b = new database();

$date = date_default_timezone_set('Asia/Kolkata');



?>
<!DOCTYPE html>

<html dir="ltr" lang="en-US">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <!-- <meta name="author" content="SemiColonWeb" /> -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>


    <link rel="stylesheet" type="text/css" href="../assets/style.css">

    <title>Show</title>

</head>

<body class="stretched">

    <div class="col-md-12 hed">


    <center>

        <h2>Welcome to <b>SSTRADERS</b></h2>

    </center>


    </div>

    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">
                <nav>
                    <a href="../index.php">Home</a> |
                    <a href="#">Customers Bills</a> |
                    <a href="#">View</a>
                </nav>


                <div class="row">

                    <div class="col-md-12 p-0">



                        <table class="table table-dark">


                            <div class="col-md-12 p-0">


                                <table class="table table-dark">


                                    <!-- <a href="load_product.php" type="button" data-toggle="modal" class="btn btn-success btn-sm">Load product</a><br><br> -->

                                    <!-- <form accept="view.php" method="post" >
                            From: <input type="date" name="from" id="from" required>

                            To: <input type="date" name="to" id="to" required>

                            <input style="margin-left: 2px;margin-bottom: 1px;" name = 'searchdetails' href="view.php" type="submit" value = "Search" class="btn btn-primary btn-sm">
                           
                        </form> -->

                                    <?
                                    // if(isset($_POST['searchdetails'])){
                                    ?>

                                    <thead>

                                        <th scope="col">S.No</th>


                                        <!-- <th scope="col">Load</th> -->

                                        <th scope="col">Customer name</th>

                                        <th scope="col">Oil - unite</th>
                                        
                                        <th scope="col">Store Address</th>

                                        

                                        <!-- <th scope="col">Total Liters</th> -->

                                        <th scope="col">Payment pending</th>
                                            <!-- Total Container Price</th> -->

                                        <!-- <th scope="col">Total Containers</th> -->

                                        <th scope="col">Action</th>



                                    </thead>

                                    <tbody style="background-color: #f7f2f23b;">

                                        <?php

                                        // $fromdate = $_POST['from'];

                                        // $b->select("load_detail","*");
                                        $start = 0;
                                        $offset = 4;
                                        $limit = "LIMIT".' '.$start.','.$offset;
                                        $b->select(
                                            "load_detail",
                                            // "load_detail.id,load_detail.Is_enabeld,t2.id,t2.load_name",
                                           "*",
                                            "load_detail.Is_enabeld =1",
                                            null,
                                            'load_type as t2',
                                            't2.id = load_detail.load_id',
                                            'customers_detail as t3',
                                            't3.id = load_detail.customer_id',
                                            null,
                                            null,
                                            null,
                                            null,
                                            'customer_fname',
                                            'customer_id'

                                        );

                                        // "bills_detail","*","uploaded_date='$fromdate'");

                                        $result = $b->sql;

                                        ?>

                                        <?php $sno = 1;
                                        while ($row = mysqli_fetch_assoc($result)) { ?>

                                            <tr>

                                                <td><?php echo $sno; ?></td>

                                                
                                                
                                                
                                                <!-- <td><?php echo  $row['load_name'];?></td> -->
                                                
    
                                                
                                                <td><?php echo ucfirst($row['customer_fname']); ?></td>

                                                <!-- <td><?php $value = $row['product_total_GST_amount'];
                                                            echo sprintf("%.2f", $value); ?></td> -->

                                                <!-- <td><?php echo $row['brand_id']; ?></td> -->

                                                <td><?php echo $row['product_name_baseunite']; ?></td>

                                                <td><?php echo ucfirst($row['customer_store_address']); ?></td>

                                                <td><?php echo 'Rs.'.$row['balance_amount'].'/-'; ?></td>
                                                <!-- <td><?php echo $row['total_containers']; ?></td> -->
                                                <!-- <td><?php echo $row['loading_date']; ?></td> -->

                                                <td>
                                                    <?
                                                    // echo $row['customer_id'];
?>
                                            <a href="view_details.php?ID=<?php echo $row['customer_id']; ?>" type="button" class="btn btn-success btn-sm">View</a>

                                        </td>

                                        

                                        <!--<td>
                                            <input type="button" class="btn btn-primary btn-sm" onclick="printDiv('printableArea')" value="Print bill" />
                                        </td>
                                        <td>

                                            <a href="delete_data.php?id=<?php echo $row['product_id']; ?>" type="button"  data-toggle="modal" data-id="" data-target="" id="del" class="btn btn-danger btn-sm">Delete</a>

                                        </td> -->

                                            </tr>

                                        <?php $sno++;
                                        } ?>

                                    </tbody>
                                    <?
                                    // }
                                    ?>

                                </table>

                            </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <script type="text/javascript">
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>
    <div id="printableArea" style="display: none;">

        <?
        $b->select("bills_detail", "*", null, null, "products_detail", "products_detail.product_id,products_detail.product_name,products_detail.product_quantity,products_detail.product_price,products_detail.GST_rate,products_detail.product_total_GST_amount,bills_detail.product_id", "products_detail.product_id =  bills_detail.product_id");



        // SELECT products_detail.product_id,products_detail.product_name,products_detail.product_quantity,products_detail.product_price,products_detail.GST_rate,products_detail.product_total_GST_amount,bills_detail.product_id 

        // FROM `bills_detail` as bills_detail 

        // inner join `products_detail` as products_detail 

        // ON products_detail.product_id =  bills_detail.product_id




        $result = $b->sql;

        $sno = 1;

        while ($row = mysqli_fetch_assoc($result)) {
        ?>

            <div class="invoice-box">
                <table cellpadding="0" cellspacing="0">
                    <tr class="top_rw">
                        <td colspan="2">
                            <h2 style="margin-bottom: 0px;"> SSTRADERS </h2>
                            <span>
                                <!-- Number: 27B00032991LQ354  -->
                                Date: <? echo $today = date('M,d,Y,h:i:s'); ?>
                            </span>
                        </td>
                        <td style="width:30%; margin-right: 10px;">
                            <!-- PaytmMall Order Id: 6580083283 -->
                        </td>
                    </tr>
                    <tr class="top">
                        <td colspan="3">
                            <table>
                                <tr>
                                    <td>
                                        <b> Sold By: SS Traders </b> <br>

                                        Annur, Coimbatore - 641653 <br>
                                        GSTIN: 27AALFN0535C1ZK <br>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <!-- <tr class="information">
                  <td colspan="3">
                    <table>
                        <tr>
                            <td colspan="2">
                            <b> Shipping Address: w3learnpoint </b> <br>
                                Kokar, Ranchi <br>
                                +0651-908-090-009<br>
                                info@w3learnpoint.com<br>
                                www.w3learnpoint.com
                            </td>
                            <td> <b> Billing Address: w3learnpoint </b><br>
                                Acme Corp.<br>
                                John Doe<br>
                                john@example.com
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
 -->
                    <td colspan="3">
                        <table cellspacing="0px" cellpadding="2px">

                            <tr class="heading">
                                <td style="width:25%;">
                                    S.No
                                </td>
                                <td style="width:25%;">
                                    ITEM
                                </td>
                                <td style="width:10%; text-align:center;">
                                    QTY.
                                </td>
                                <td style="width:10%; text-align:right;">
                                    PRICE (INR)
                                </td>
                                <td style="width:15%; text-align:right;">
                                    TAX RATE & TYPE
                                </td>
                                <td style="width:15%; text-align:right;">
                                    TAX AMOUNT (INR)
                                </td>
                                <td style="width:15%; text-align:right;">
                                    TOTAL AMOUNT (INR)
                                </td>
                            </tr>
                            <tr class="item">
                                <td style="width:25%">
                                    <? echo $sno; ?>
                                </td>

                                <td style="width:25%;">
                                    <? echo $row['product_name'] ?>
                                </td>
                                <td style="width:10%; text-align:center;">
                                    <? echo $row['product_quantity'] ?>
                                </td>
                                <td style="width:10%; text-align:right;">
                                    <?php $value = $row['product_price'];
                                    echo sprintf("%.2f", $value); ?>
                                </td>
                                <td style="width:15%; text-align:right;">
                                    <?php $value = $row['GST_rate'];
                                    echo sprintf("%.2f", $value . '%'); ?>
                                </td>
                                <td style="width:15%; text-align:right;">
                                    57.97
                                </td>
                                <td style="width:15%; text-align:right;">
                                    <?php $value = $row['product_total_GST_amount'];
                                    echo sprintf("%.2f", $value . '%'); ?>
                                </td>
                            </tr>
                            <hr>
                            <tr class="item">
                                <td style="width:25%;"> <b> Grand Total </b> </td>
                                <td style="width:10%; text-align:center;">
                                    2
                                </td>
                                <td style="width:10%; text-align:right;">
                                    322.03
                                </td>
                                <td style="width:15%; text-align:right;">
                                </td>
                                <td style="width:15%; text-align:right;">
                                    57.97
                                </td>
                                <td style="width:15%; text-align:right;">
                                    380
                                </td>
                            </tr>
                    </td>
                <? $sno++;
            }
                ?>

                </table>
                <tr class="total">
                    <!-- <td colspan="3" align="right">  Total Amount in Words :  <b> Three Hundred Eighty Rupees Only </b> </td> -->
                </tr>

                </table>
                </td>
                </tr>
                </table>
            </div>



    </div>
</body>

</html>