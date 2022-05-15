<?
include '../database.php';

$b = new database();

if($_GET['customerid']){

   $id = intval($_GET['customerid']);

   $b->select("customers_detail","*","id='$id'");
   
   $result = $b->sql;
   
   while($row = mysqli_fetch_assoc($result)){

      // echo $row['product_name'];
      
      echo $row['id'];
}
}
?>