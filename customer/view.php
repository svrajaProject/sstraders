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
<style type="text/css">
    table {
    /*table-layout: fixed;*/
    /*width: 100%;  */
    margin-left: -10px; 
}
th,td {
    border-style: solid;
    border-width: 3px;
    border-color: #BCBCBC;
    word-wrap: break-word;
}

</style>

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
                    <a href="#">View</a> 
                </nav>


                <div class="row">

                    <div class="col-md-12 p-0">

                        <table class="table table-dark">


                        <div class="col-md-12 p-0">


                        <table class="table table-dark">
                            

                             <a href="add_customer.php" type="button"  data-toggle="modal"  class="btn btn-success btn-sm">Add customer</a>
                           
                            <thead>
                                <tr style="background-color: dimgray;">
                                    <th colspan="5" style="text-align: center;">Customer Details</th>
                                    <th colspan="9" style="text-align: center;">Store Details</th>
                                    <!-- <th rowspan="1" style="text-align: center;" colspan="4">More</th> -->
                                </tr>

                                <tr>
                                    
                               
                                    <th scope="col">S.No</th>

                                    <th scope="col">Customer Code</th>
                               
                                    <th scope="col">First name</th>

                                    <th scope="col">Last name</th>

                                    <th scope="col">Email</th>

                                    <th scope="col">Mobile 1</th>

                                    <th scope="col">Mobile 2</th>
                               
                             
                                    <th scope="col">Name</th>

                                    <th scope="col">GST Number</th>

                                    <!-- <th scope="col">Contact</th> -->

                                    <th scope="col">Address</th>

                                    <!-- <th scope="col">Street</th>
                                    
                                    <th scope="col"> District</th>

                                    <th scope="col"> City</th>
                                    
                                    <!-- <th scope="col"> State</th> -->
                                    
                                    <!-- <th scope="col"> Pincode</th> -->

                                    <th scope="col">Status</th>
                                    
                                    <th scope="col" colspan="3" style="text-align: center;">Action</th>


                                    </tr>

                            </thead>

                            <tbody style="background-color: gray;">

                                <?php 

                                    include '../database.php';

                                    $b = new database();

                                    $b->select("customers_detail","*",'is_removed=0');

                                    $result = $b->sql;
                                    

                                ?>
                                
                                <?php $sno = 1; while ($row = mysqli_fetch_assoc($result)) { ?>

                                    <tr>

                                        <td><?php echo $sno;?></td>

                                        <td><?php echo $row['customer_code']; ?></td>
                                        
                                        <td><?php echo ucfirst($row['customer_fname']); ?></td>

                                        <td><?php echo $row['customer_lname']; ?></td>

                                        <td><?php echo $row['customer_email']; ?></td>

                                        <td><?php echo $row['customer_mobile1']; ?></td>
                                        
                                        <td><?php echo $row['customer_mobile2']; ?></td>

                                        <td><?php echo ucfirst($row['customer_store_name']); ?></td>

                                        <td><?php echo $row['GST_number']; ?></td>

                                        <!-- <td><?php echo $row['customer_store_contactnumber']; ?></td> -->

                                        <td><?php echo $row['customer_store_address']
                                        // .','
                                        
                                        // .$row['customer_store_street'].','
                                        // .'<br>'.$row['customer_store_district'].','
                                        // .$row['customer_store_city'].','
                                        // .'<br>'.$row['customer_store_state'].','
                                        // .'<br>'.$row['customer_store_pincode'].','
                                        ; ?></td>

                                        <td><?php if($row['is_active'] == 1){echo 'In contact';}else{echo 'Not in contact';}?></td>

                                        <td>

                                            <a href="view_details.php?id=<?php echo $row['id']; ?>" type="button" class="btn btn-success btn-sm">View</a>

                                        </td>

                                        <td>

                                            <a href="edit.php?id=<?php echo $row['id']; ?>" type="button" class="btn btn-primary btn-sm">Edit</a>

                                        </td>

                                        <td>

                                            <a href="delete_data.php?id=<?php echo $row['id']; ?>" type="button"  data-toggle="modal" data-id="" data-target="" id="del" class="btn btn-danger btn-sm">Delete</a>

                                        </td>

                                    </tr>

                                    

                                <?php $sno++; } ?>

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