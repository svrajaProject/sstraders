<!DOCTYPE html>

<html dir="ltr" lang="en-US">

<head>

    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    
    <meta content="utf-8" http-equiv="encoding">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

 
    <link rel="stylesheet" type="text/css" href="../assets/style.css">
    <title>Edit</title>


</head>

<body class="stretched">

        <div class="col-md-12 hed">

            <center>

            <h2>Edit Data</h2>

            </center>

        </div>

        <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">
                    <nav>
                    <a href="../index.php">Home</a> |
                    <a href="#">Import</a> |
                    <a href="view.php">View</a> |
                    <a href="#">Edit</a> 
                </nav>

                    <div class="row">

                        <?php 

                            require_once '../database.php';

                            $id = $_GET['id'];


                            $m = new database();

                            $m->select("bills_detail","*","bill_id='$id'");

                            $result = $m->sql;


                            $row = mysqli_fetch_assoc($result);

                        ?>

                        <div class="col-md-12" id="hide">

                            <form  class="row form" action="update.php" method="post">

                                <input type="hidden" name="id" value="<?php echo $id; ?>">

                                <?php include 'form.php'; ?>

                                <div class="col-12 form-group">

                                    <input type="submit" class="btn btn-dark" name="submit" value="Update">

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </section>

    </body>

</html>