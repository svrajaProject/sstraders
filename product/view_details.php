                            <!DOCTYPE html>

<html dir="ltr" lang="en-US">

<head>

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>


    <link rel="stylesheet" type="text/css" href="../assets/style.css">

    <title>Show</title>

</head>

<body class="stretched">

    <div class="col-md-12 hed">

        <center>

        <h2>View Data</h2>

        </center>

    </div>

    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">
                <nav>
                    <a href="../index.php">Home</a> |
                    <a href="#">Product</a> |
                    <a href="view.php">View</a> | 
                    <a disabeld href="#">View details</a> 
                </nav>

                <div class="row">

                    <div class="col-md-12 p-0">

                        <table class="table table-dark">


                        <div class="col-md-12 p-0">

                        <table class="table table-dark">

                            <thead>

                            </thead>

                            <tbody>
                            <?php 

                                include '../database.php';


                                echo $id = $_GET['id'];

                                $b = new database();

                                $b->select("products_detail","*","id='$id'");

                                $result = $b->sql;


                                $row = mysqli_fetch_assoc($result);

                             ?>


                             <!--    <tr>

                                    <th>Id</th>

                                    <td><?php echo $row['id']; ?></td>

                                </tr>  --> 

                                <!-- <tr>

                                    <th>Product Code</th>

                                    <td><?php echo $row['product_code']; ?></td>

                                </tr> -->
                                <tr>

                                    <th>Product Brand</th>  

                                    <td><?php echo $row['brand_id']; ?></td>

                                    </tr>
                                <tr>

                                    <th>Product Name</th>  

                                    <td><?php echo $row['product_name_baseunite']; ?></td>

                                </tr>

                                <tr>

                                    <th>Container Type</th>  

                                    <td><?php echo $row['container_id']; ?></td>

                                </tr> 
<!-- 
                                <tr>

                                    <th>Litre</th>

                                    <td><?php echo $row['litre']; ?></td>

                                </tr>  -->

                                <!-- <tr> 

                                    <th>Price</th>

                                    <td><?php echo $row['product_price']; ?></td>

                                </tr> -->
                                <!-- <tr> 

                                    <th>Total GST amount</th>

                                    <td><?php echo $row['product_total_GST_amount']; ?></td>

                                </tr> -->

                                <tr>

                                    <th>Added Time & Date</th>  

                                    <td><?php echo $row['added_date_time']; ?></td>

                                </tr>

                                <!-- <tr>  

                                    <th>Last Updated Date & Time</th>

                                    <td><?php echo $row['updated_date_time']; ?></td>

                                </tr> -->

                                <tr>  

                                    <th>Back To Home</th>

                                    <td><a href="view.php" type="button" class="btn btn-primary">Back</a></td>

                                </tr>

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