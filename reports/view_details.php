<!DOCTYPE html>

<html dir="ltr" lang="en-US">

<head>

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" />

   <!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
 -->

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
                    <a href="#">Customer bills</a> |
                    <a href="view.php">View</a> |
                    <a href="#">View bill detail</a>

                </nav>


                <div class="row">

                    <div class="col-md-12 p-0">

                        <table class="table table-dark">


                            <div class="col-md-12 p-0">


                                <table class="table table-dark">


                                    <!-- <a href="view.php" type="button" data-toggle="modal" class="btn btn-success btn-sm">View bill</a> -->

                                    <thead>

                                        <tr>

                                            <th scope="col">S.No</th>
                                            
                                            <th scope="col">Load</th>

                                            <!-- <th scope="col">Product Name</th> -->

                                            <th scope="col">Oil - Unit</th>

                                            <th scope="col">Collected Amount</th>

                                            <th scope="col">Collected Date</th>

                                        </tr>

                                    </thead>

                            <tbody>
                            <?php 

                                include '../database.php';

                                $customername = '';

                                $id = $_GET['ID'];

                                $b = new database();

                                $b->select("balance_details","*","customer_id='$id'",
                                null,
                                "customers_detail as t2",
                                "t2.id=balance_details.customer_id"                                
                                );

                                $result = $b->sql;
                                

                             ?>
                        <?php $sno = 1;
                      
                        
                            while ($row = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <?$customername =  ucfirst($row['customer_fname']);?>
                                <td><?php echo $sno; ?></td>
                                <td><?php echo 'Load - '.$row['load_id']; ?></td>
                                <!-- <td><?php echo $row['product_id']; ?></td> -->
                                <td><?php echo $row['product_name_baseunite']; ?></td>
                                <td><?php echo $row['collecting_amount']; ?></td>
                                <td><?php echo $row['collected_date']; ?></td>
                            </tr>
                            <?  $sno++; }?>
                          </tbody>
                          <span style="float:right;">Customer Name: <?echo ucfirst($customername);?></span>
                        </table>
                         </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

</body>

</html>