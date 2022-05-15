<!DOCTYPE html>

<html dir="ltr" lang="en-US">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <meta name="author" content="SemiColonWeb" />
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
                    <a href="#">Product</a> |
                    <a href="#">View</a>
                </nav>


                <div class="row">

                    <div class="col-md-12 p-0">

                        <table class="table table-dark">


                            <div class="col-md-12 p-0">


                                <table class="table table-dark">


                                    <a href="add_product.php" type="button" data-toggle="modal" class="btn btn-success btn-sm">Add product</a>

                                    <thead>

                                        <tr>

                                            <th scope="col">S.No</th>

                                            <!-- <th scope="col">Product Code</th> -->

                                            <th scope="col">Product Brand</th>

                                            <th scope="col">Product Name - Unit</th>

                                            <th scope="col">Container Type</th>

                                            <!-- <th scope="col">Litre</th> -->

                                            <!-- <th scope="col">Is litter price</th> -->

                                            <!-- <th scope="col">GST rate</th> -->

                                            <!-- <th scope="col">Total GST amount</th> -->

                                            <!-- <th scope="col">Total stock</th> -->

                                            <!-- <th scope="col">Last updated date</th> -->

                                            <th scope="col">Added on</th>

                                            <!-- <th scope="col" colspan="3" style="text-align:center; border-left: 1px #454d55 solid;">Action</th> -->

                                        </tr>

                                    </thead>
                                    <script type="text/javascript">
                                        const $btnPrint = document.querySelector("#btnPrint");
                                        $btnPrint.addEventListener("click", () => {
                                            window.print();
                                        });
                                    </script>

                                    <tbody style="background-color: #f7f2f23b;">

                                        <?php

                                        include '../database.php';

                                        $b = new database();
                                        $start = 0;
                                        $offset = 4;
                                        $limit = "LIMIT".' '.$start.','.$offset;
                                        $b->select(
                                            // "products_detail", "*","",$limit);
                                            "products_detail", 

                                        "products_detail.id as pid,brand_name,product_name_baseunite,container_id,added_date_time",
                                        
                                        "products_detail.is_enabled=1",
                                                                                

                                       
                                        // "product_container as t2", 
null,
                                        // "products_detail.container_id =  t2.id", 

                                        "brand as t3",
                                        "t3.id = products_detail.brand_id",
                                        
                                       
                                        null,
                                        $limit);

                                        $result = $b->sql;
                                        ?>

                                        <?php $sno = 1;
                                        while ($row = mysqli_fetch_assoc($result)) { ?>

                                            <tr>
                                                <td><?php echo $sno; ?></td>

                                                <!-- <td><?php echo $row['pid']; ?></td> -->

                                                <td><?php echo $row['brand_name']; ?></td>

                                                <td><?php echo $row['product_name_baseunite']; ?></td>


                                                <td>
                                                    <?php 
                                                        $container_type_name = '';
                                                        
                                                        $containerId = $row['container_id']; 
                                                        
                                                        if($containerId==1){
                                                            echo $container_type_name ='Box';
                                                        }
                                                        else{
                                                            echo $container_type_name ='Tin';
                                                        } 
                                                    ?>
                                                </td>

                                                <!-- <td><?php echo $row['product_stock']; ?></td> -->

                                                <!-- <td><?php echo $row['litre']; ?></td> -->

                                                <!-- <td><?php $value = $row['product_price'];
                                                    echo sprintf("%.2f", $value); ?></td> -->

                                                <!-- <td><?php echo $row['GST_rate'] . '%'; ?></td>

                                        <td><?php $value = $row['product_total_GST_amount'];
                                            echo sprintf("%.2f", $value); ?></td>

                                        <td><?php echo $row['stock']; ?></td> -->

                                                <td><?php echo $row['added_date_time']; ?></td>

                                                <!-- <td>

                                                    <a href="view_details.php?id=<?php echo $row['pid']; ?>" type="button" class="btn btn-success btn-sm">View</a>

                                                </td>

                                                <td>

                                                    <a href="edit.php?id=<?php echo $row['pid']; ?>" type="button" class="btn btn-primary btn-sm">Edit</a>

                                                </td>

                                                <td>

                                                    <a href="delete_data.php?id=<?php echo $row['pid']; ?>" type="button" data-toggle="modal" data-id="" data-target="" id="del" class="btn btn-danger btn-sm">Delete</a>

                                                </td> -->

                                            </tr>

                                        <?php $sno++;
                                        } ?>

                                    </tbody>

                                </table>

                            </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

</body>

</html>