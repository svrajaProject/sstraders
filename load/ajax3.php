<?
include '../database.php';

$b = new database();

if($_GET['product_name_baseunite']){

   $product_name_baseunite = $_GET['product_name_baseunite'];

   $b->select("products_detail","*",
   "product_name_baseunite ='$product_name_baseunite'");
   
   $result = $b->sql;
   $options = "<option value=''>--- Select oil - ml ---</option>";
   while($row = mysqli_fetch_assoc($result)){

      // echo '<br>'.$row['product_id'];
      
    if($row['container_id']==1){
      $box="Box";
      $options .= "<option id='containertype' value='".$row['container_id']."'>".$box."</option>";
      // echo '<br>'.$row['product_id'];
    }
    else{
      $tin = "Tin";
      $options .= "<option id='containertype' value='".$row['container_id']."'>".$tin."</option>";
      // echo '<br>'.$row['product_id'];
    }
    

}
echo $options;

// echo $row['product_id'];
}
?>