<?php 

    include '../database.php';


    if (isset($_POST['submit'])) {

        $id = $_POST['id'];
        
        $customerfirstname = $_POST['customerfirstname'];

        $customerlastname = $_POST['customerlastname'];

        $customermobile1 = $_POST['customermobile1'];

        $customermobile2 = $_POST['customermobile2'];

        $customerstoreaddress = $_POST['customerstoreaddress'];

        $customergstnumber = $_POST['customergstnumber'];

        $customercode = $_POST['customercode'];

        $date = date("Y-m-d h:i:s A");

        $a = new database();

        $a->update('customers_detail',['customer_code'=>$customercode,'customer_fname'=>$customerfirstname,'customer_lname'=>$customerlastname,
        'customer_mobile1'=>$customermobile1,
        'customer_mobile2'=>$customermobile2,
        'customer_store_address'=>$customerstoreaddress,
        'GST_number'=>$customergstnumber
    
    
    ],"id='$id'");

        if ($a == true) {

            header('location:view.php');

        }

    }

?>