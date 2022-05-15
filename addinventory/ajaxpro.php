<?php

include '../database.php';

$db = new database();

$id = $_GET['id'];

$sql = $db->select("products_detail","*","id='$id'");

//    "SELECT * FROM products_detail
//          WHERE product_id LIKE '%""%'"; 


   $result = $mysqli->query($sql);
?>
<option value="">Select SubCategory</option>
<?php
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row["product_name_baseunite"];?>"></option>
<?php
}
?>
?>