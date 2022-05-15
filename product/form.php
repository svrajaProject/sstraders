<?
require_once('../database.php');

$b = new database();

?>
<div class="col-md-6 col-sm-12 form-group">

    <label for="register-form-name">Product Brand:</label>

    <select name='brandid' class="form-control">

    
<option  value="">--- Select Customer ---</option>

<?php

    $b->select("brand","*");

    $result = $b->sql;

    while ($row = mysqli_fetch_assoc($result)){

        echo "<option  value='".$row['id']."'>".$row['brand_name']."</option>";

    }

?>

</select>   

</select>   
    <!-- <input type="text" required name="productbrand" value="<?php if(isset($row)) { echo $row['product_brand']; } ?>"
        class="form-control" / required> -->

    <!-- <textarea class="form-control" name="message" placeholder="Message..."><?php if(isset($row)) { echo $row['product_GST']; } ?></textarea> -->

</div>

<div class="col-md-6 col-sm-12 form-group">

    <label for="register-form-name">Product Name - Unite (ml):</label>

    <input type="text" required name="productname" value="<?php if(isset($row)) { echo $row['product_name_baseunite']; } ?>"
        class="form-control" / required>

</div>

<!-- <div class="col-md-6 col-sm-12 form-group">

    <label for="register-form-name">Litre:</label>

    <input type="text" required name="litre" value="<?php if(isset($row)) { echo $row['litre']; } ?>" class="form-control" / required>

</div> -->

<div class="col-md-6 col-sm-12 form-group">

    <label for="register-form-name">Container Type :</label>
    <input type="radio" name="container" id="box" onclick="javascript:containerchoose();">
    <label for="box">Box</label>

    <input type="radio" name="container" id="tin" onclick="javascript:containerchoose();">
    <label for="tin">Tine</label>
    <input type="text"  name="boxprice" id="boxprice" placeholder="one liter price" style="visibility:hidden;"
        value="<?php if(isset($row)) { echo $row['priceperliter']; } ?>" class="form-control" />
    <!-- <input type="text" required name="boxcount" id="boxcount" placeholder="box count" style="visibility:hidden;margin-top: 5px;"
        value="<?php if(isset($row)) { echo $row['product_container']; } ?>" class="form-control" /> -->
    <input type="text"  name="tinprice" id="tinprice" placeholder="one tin price"
        style="visibility:hidden;margin-top: -38px;" value="<?php if(isset($row)) { echo $row['priceperliter']; } ?>"
        class="form-control" />
    <!-- <input type="text" required name="tincount" id="tincount" placeholder="tin count" style="visibility:hidden;margin-top: 5px;"
        value="<?php if(isset($row)) { echo $row['product_container']; } ?>" class="form-control" /> -->

</div>


<div class="col-md-6 col-sm-12 form-group">

    <!-- <label for="register-form-name">Price:</label>

    <input type="text" required name="price" value="<?php if(isset($row)) { echo $row['product_price']; } ?>" class="form-control" / required> -->
</div>

<!-- <div class="col-md-6 col-sm-12 form-group">

    <label for="register-form-name">GST rate:</label>

    <input type="text" required name="gstrate" value="<?php if(isset($row)) { echo $row['GST_rate']; } ?>" class="form-control" / required>

    <textarea class="form-control" name="message" placeholder="Message..."><?php if(isset($row)) { echo $row['product_GST']; } ?></textarea>

</div> -->
<script>
function containerchoose() {
    if (document.getElementById('box').checked) {
        // document.getElementById('boxcount').style.visibility = 'visible';
        document.getElementById('boxprice').style.visibility = 'visible';

        // document.getElementById('tincount').style.visibility = 'hidden';
        document.getElementById('tinprice').style.visibility = 'hidden';
    } else if (document.getElementById('tin').checked) {

        // document.getElementById('tincount').style.visibility = 'visible';
        document.getElementById('tinprice').style.visibility = 'visible';

        // document.getElementById('boxcount').style.visibility = 'hidden';
        document.getElementById('boxprice').style.visibility = 'hidden';

    }
}
</script>