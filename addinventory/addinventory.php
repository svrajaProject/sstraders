<!DOCTYPE html>

<html dir="ltr" lang="en-US">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <meta name="author" content="SemiColonWeb" />

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" />
    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" type="text/css" href="../assets/style.css">

<title>Login</title>

</head>

<body class="stretched">

<div id="wrapper" class="clearfix">

    <section id="page-title">

        <div class="container clearfix hed">

            <center>

            </center>

        </div>

    </section>

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
                    <a href="#">Add Stock</a> 
                </nav>

                <div class="row">

                    <div class="col-md-12" id="hide">

                        <form  class="row form" action="insert.php" method="post">

                            <?php include 'form.php'; ?>

                            <div class="col-12 form-group">

                                <input type="submit" class="btn btn-dark" name="submit" value="Submit">

                            </div>

                        </form>

                    </div>


                </div>

            </div>

        </div>

    </section>

</div>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

<script>

    $(document).ready(function(){

        $(document).on('click',"#del",function(e) {

            e.preventDefault();

            var del = $(this).data('product_id');


            swal({

                title: "Are you sure?",

                text: "Once deleted, you will not be able to recover this imaginary file!",

                icon: "warning",

                buttons: true,

                dangerMode: true,

            })

            .then((willDelete) => {

                if (willDelete) {

                    $.ajax({

                        url : "delete_data.php",

                        type : "POST",

                        data : {id:del},

                        success : function() {

                            swal({

                                title: "Sweet!",

                                text: "Delete data",

                                imageUrl: 'thumbs-up.jpg'

                            }); 

                        }

                    });

                    swal("Poof! Your imaginary file has been deleted!", {

                        icon: "success",

                    });

                } else {

                    swal("Your imaginary file is safe!");

                }

            });

        });

    });

</script> -->

</body>

</html>

