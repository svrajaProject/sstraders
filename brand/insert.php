<?php

include '../database.php';

if (isset($_POST['submit'])) {

    $brandname = $_POST['brandname'];
    $date = date("Y-m-d h:i:s A");
    $branddetails = new database();
    // ?Adding product_details table initially
    $branddetails->insert(
        'brand',
        [
            'brand_name' => $brandname,
            'added_date' => $date
        ]
    );
    if ($branddetails) {

            header('location:view.php');
    }
}