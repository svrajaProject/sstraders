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

        <h2>Welcome to <b>SSTRADERS</b></h2>

    </center>


    </div>

    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">
                <nav>
                    <a href="../index.php">Home</a> |
                    <a href="#">Customer</a> | 
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


                                $id = $_GET['id'];

                                $b = new database();

                                $b->select("customers_detail","*","id='$id'");

                                $result = $b->sql;


                                $row = mysqli_fetch_assoc($result);

                             ?>


                             <!--    <tr>

                                    <th>Id</th>

                                    <td><?php echo $row['product_id']; ?></td>

                                </tr>  --> 

                                <tr>

                                    <th>Customer first name</th>

                                    <td><?php echo $row['customer_fname']; ?></td>

                                </tr>

                                <tr>

                                    <th>Customer last name</th>  

                                    <td><?php echo $row['customer_lname']; ?></td>

                                </tr>

                                <tr>

                                    <th>Customer email</th>  

                                    <td><?php echo $row['customer_email']; ?></td>

                                </tr> 

                                <tr>

                                    <th>Customer mobile 1</th>

                                    <td><?php echo $row['customer_mobile1']; ?></td>

                                </tr> 

                                <tr> 

                                    <th>Customer mobile 2</th>

                                    <td><?php echo $row['customer_mobile2']; ?></td>

                                </tr>
                                <tr> 

                                    <th>Customer store name</th>

                                    <td><?php echo $row['customer_store_name']; ?></td>

                                </tr>

                                <!-- <tr>

                                    <th>Customer store contact</th>  

                                    <td><?php echo $row['customer_store_contactnumber']; ?></td>

                                </tr> -->

                                <tr>  

                                    <th>Customer store address</th>

                                    <td><?php echo $row['customer_store_address']; ?></td>

                                </tr>

                                <tr>  

                                    <th>Customer GST Number</th>

                                    <td><?php echo $row['GST_number']; ?></td>

                                </tr>

                                 <!-- <tr>  

                                    <th>Customer store street name</th>

                                    <td><?php echo $row['customer_store_street']; ?></td>

                                </tr>

                                <tr>  
                                     <tr>  

                                    <th>Customer store district</th>

                                    <td><?php echo $row['customer_store_district']; ?></td>

                                </tr>

                                <tr>  
                                     <tr>  

                                    <th>Customer store city</th>

                                    <td><?php echo $row['customer_store_city']; ?></td>

                                </tr>

                                <tr>  
                                     <tr>  

                                    <th>Customer store state</th>

                                    <td><?php echo $row['customer_store_state']; ?></td>

                                </tr>

                                <tr>  
                                     <tr>  

                                    <th>Customer store pincode</th>

                                    <td><?php echo $row['customer_store_pincode']; ?></td>

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