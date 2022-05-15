
<?
include '../database.php';

$b = new database();

?>

<div class="col-md-6 col-sm-12 form-group">

    <label for="register-form-name">Select Brand Name:</label>

   <select name='brandid' onchange="showBranddetails(this.value)" class="form-control">

   
        <option value="" >--- Select Brand ---</option>

        <?php

            $b->select("brand","*");

            $result = $b->sql;

            while ($row = mysqli_fetch_assoc($result)){

                echo "<option  value='".$row['id']."'>".$row['brand_name']."</option>";

            }

        ?>

    </select>   
</div>


<div class="col-md-6 col-sm-12 form-group">

    <label for="register-form-name">Select Oil Name:</label>

   <select name ='productnamebaseunite' id="productnamebaseunite" onchange="showContainerTypeName(this.value)" class="form-control">

        <option value="">--- Select Oil - ml ---</option>

    </select>   
</div>

<div class="col-md-6 col-sm-12 form-group">

    <label for="register-form-name">Select Container Type:</label>

   <select name="container_id" id="containertype"  class="form-control">

        <option value="">--- Select Container Type ---</option>

    </select>   
</div>

<!-- <div class="col-md-6 col-sm-12 form-group">

    <label for="register-form-name">Litre:</label>

    <input type="text" name="litre" value="<?php if(isset($row)) { echo $row['litre']; } ?>" class="form-control" / required>

</div> -->

<div class="col-md-6 col-sm-12 form-group">

    <label for="register-form-name">How many containers?:</label>

    <input type="text" name="quantity" value="<?php if(isset($row)) { echo $row['product_quantity']; } ?>" class="form-control" / required>

</div>


<!-- <div class="col-md-6 col-sm-12 form-group">

    <label for="register-form-name">Import date:</label>

    <input type="date" name="litre" value="<?php if(isset($row)) { echo $row['litre']; } ?>" class="form-control" / required>

</div> -->

<!-- <div class="col-md-6 col-sm-12 form-group">

    <label for="register-form-name">Load Type:</label>

    <input type="time" name="litre" value="<?php if(isset($row)) { echo $row['litre']; } ?>" class="form-control" / required>
    <select onchange="showProductdetails(this.value)" class="form-control">
        <option value="">--- Select Load ---</option>
        <option value="">Load - 1</option>
        <option value="">Load - 2</option>
        <option value="">Load - 3</option>
        <option value="">Counter sale</option>
    </select>
    
</div> -->

<div id="test"></div>


<script>
// function showProductdetails(str) {
//   if (str == "") {
//     document.getElementById("productdetails").innerHTML = "";
//     return;
//   } else {
//     var xmlhttp = new XMLHttpRequest();
//     xmlhttp.onreadystatechange = function() {
//       if (this.readyState == 4 && this.status == 200) {
//         document.getElementById("productdetails").innerHTML = this.responseText;
//       }
//     };
//     xmlhttp.open("GET","ajax.php?productid="+str,true);
//     xmlhttp.send();
//   }
// }
</script>
<script type="text/javascript">
function showBranddetails(str) {
  if (str == "") {
    document.getElementById("productnamebaseunite").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("productnamebaseunite").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","ajax4.php?id="+str,true);
    xmlhttp.send();
  }
}
</script>



<script type="text/javascript">
function showContainerTypeName(str) {
  if (str == "") {
    document.getElementById("containertype").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("containertype").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","ajax3.php?product_name_baseunite="+str,true);
    xmlhttp.send();
  }
}
</script>