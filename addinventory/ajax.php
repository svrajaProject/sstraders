<?

include '../database.php';

$b = new database();

if($_GET['product_id']){

   $id = intval($_GET['product_id']);

   $b = new database();

   $b->select("products_detail","*","product_id='$id'");
   
   $result = $b->sql;
   
   while($row = mysqli_fetch_assoc($result)){

      echo $row['product_brand'];
      
      // echo "ID :".$row['product_id']."<br>";
      // echo "Price :".$row['product_price']."<br>";
      // echo "GST :".$row['product_total_GST_amount']."<br>";
   }
}

?>