
<?
require_once('../database.php');

$b = new database();

?>

<div class="col-md-6 col-sm-12 form-group">

    <label for="register-form-name">Collected Amount:</label>

    <input type="text" name="collectingamount" value="<?php if(isset($row)) { echo $row['collected_amount']; } ?>" class="form-control">
</div>
<div class="col-md-6 col-sm-12 form-group">

    <label for="register-form-name">Collected Date:</label>

    <input type="date" name="updatedated" value="" class="form-control">

</div>
<div class="col-md-6 col-sm-12 form-group">

    <label for="register-form-name">Delivery status:</label>

    <input type="text" name="deliverystatus" value="<?php if(isset($row)) { echo $row['delivery_status']; } ?>" class="form-control" required>

</div>
<div class="col-md-6 col-sm-12 form-group">

    <label for="register-form-name">Delivery date:</label>

    <input type="date" name="deliverydate" value="<?php if(isset($row)) { echo $row['delivery_date']; } ?>" class="form-control" required>

</div>