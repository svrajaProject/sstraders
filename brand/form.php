<?
require_once('../database.php');

$b = new database();

?>

<div class="col-md-6 col-sm-12 form-group">

    <label for="register-form-name">Brand Name:</label>

    <input type="text" required name="brandname" value="<?php if(isset($row)) { echo $row['brand_name']; } ?>"
        class="form-control" / required>

</div>
