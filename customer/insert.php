<?php 

    include '../database.php';

    if (isset($_POST['submit'])) {

         $customercode = $_POST['customercode'];

         $customerfirstname = $_POST['customerfirstname'];

         $customerlastname = $_POST['customerlastname'];

         $customerstorename = $_POST['customerstorename'];

         $customerstoreaddress = $_POST['customerstoreaddress'];

         $customermobile1 = $_POST['customermobile1'];

         $customermobile2 = $_POST['customermobile2'];

         $customeremail = $_POST['customeremail'];

         $customergstnumber = $_POST['customergstnumber'];

         $date = date("Y-m-d h:i:s A");

        $a = new database();

        $a->insert('customers_detail',
            [
                'customer_code'=>$customercode, 
                'customer_fname'=>$customerfirstname,
                'customer_lname'=>$customerlastname,
                'customer_store_name'=>$customerstorename,
                'customer_store_address'=>$customerstoreaddress,
                'customer_mobile1'=>$customermobile1,
                'customer_mobile2'=>$customermobile2,
                'customer_email'=>$customeremail,               
                'GST_number'=>$customergstnumber,             
                'added_date_time'=>$date]);

        if ($a == true) {

            header('location:view.php');

        }

    }

?>