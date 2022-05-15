<?
include '../database.php';

$b = new database();

if($_GET['id']){

   $id = intval($_GET['id']);

   $b->select("products_detail","*","brand_id='$id'");
   
   $result = $b->sql;
   $options = "<option value=''>--- Select oil - ml ---</option>";
   while($row = mysqli_fetch_assoc($result)){

      // echo '<br>'.$row['product_brand'];
      
     
      $options .= "<option  id='productnamebaseunite' value='".$row['product_name_baseunite']."'>".$row['product_name_baseunite']."</option>";
   }
echo $options;
}
?>