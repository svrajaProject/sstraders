<div class="col-md-6 col-sm-12 form-group">

    <label for="register-form-name">Customer first name: *</label>

    <input type="text" name="customerfirstname" value="<?php if(isset($row)) { echo $row['customer_fname']; } ?>" class="form-control" / required>

</div>

<div class="col-md-6 col-sm-12 form-group">

    <label for="register-form-name">Customer last name:</label>

    <input type="text" name="customerlastname" value="<?php if(isset($row)) { echo $row['customer_lname']; } ?>" class="form-control">

</div>

<div class="col-md-6 col-sm-12 form-group">

    <label for="register-form-name">Customer store name: *</label>

    <input type="text" name="customerstorename" value="<?php if(isset($row)) { echo $row['customer_store_name']; } ?>" class="form-control" / required>

</div>


<div class="col-md-6 col-sm-12 form-group">

    <label for="register-form-name">Customer store address: *</label>

    <input type="text" name="customerstoreaddress" value="<?php if(isset($row)) { echo $row['customer_store_address']; } ?>" class="form-control" / required>

</div>


<div class="col-md-6 col-sm-12 form-group">

    <label for="register-form-name">Customer GST Number:</label>

    <input type="text" name="customergstnumber" value="<?php if(isset($row)) { echo $row['GST_number']; } ?>" class="form-control">

</div>


<div class="col-md-6 col-sm-12 form-group">

    <label for="register-form-name">Customer mobile 1: *</label>

    <input type="text" name="customermobile1" value="<?php if(isset($row)) { echo $row['customer_mobile1']; } ?>" class="form-control" / required>

</div>

<div class="col-md-6 col-sm-12 form-group">

    <label for="register-form-name">Customer mobile 2:</label>

    <input type="text" name="customermobile2" value="<?php if(isset($row)) { echo $row['customer_mobile2']; } ?>" class="form-control">

</div>

<div class="col-md-6 col-sm-12 form-group">

    <label for="register-form-name">Customer email:</label>

    <input type="text" name="customeremail" value="<?php if(isset($row)) { echo $row['customer_email']; } ?>" class="form-control">

</div>

<div class="col-md-6 col-sm-12 form-group">

    <label for="register-form-name">Customer code: *</label>

    <input type="text" name="customercode" value="<?php if(isset($row)) { echo $row['customer_code']; } ?>" class="form-control" / required>

</div>


<!-- <div class="col-md-6 col-sm-12 form-group">

    <label for="register-form-name">Customer store street name:</label>

    <input type="text" name="customerstorestreet" value="<?php if(isset($row)) { echo $row['customer_store_street']; } ?>" class="form-control" / required>

</div> -->
<!-- 
<div class="col-md-6 col-sm-12 form-group">

    <label for="register-form-name">Customer store district:</label>

    <input type="text" name="customerstoredistrict" value="<?php if(isset($row)) { echo $row['customer_store_district']; } ?>" class="form-control" / required>

</div> -->
<!-- 
<div class="col-md-6 col-sm-12 form-group">

    <label for="register-form-name">Customer store Location:</label>

    <input type="text" name="customerstorecity" value="<?php if(isset($row)) { echo $row['customer_store_city']; } ?>" class="form-control" / required>

</div> -->

<!-- <div class="col-md-6 col-sm-12 form-group">

    <label for="register-form-name">Customer store state:</label>

    <input type="text" name="customerstorestate" value="<?php if(isset($row)) { echo $row['customer_store_state']; } ?>" class="form-control" / required>

</div> -->

<!-- <div class="col-md-6 col-sm-12 form-group">

    <label for="register-form-name">Customer store pincode:</label>

    <input type="text" name="customerstorepincode" value="<?php if(isset($row)) { echo $row['customer_store_pincode']; } ?>" class="form-control" / required>

</div> -->

<!-- <div class="col-md-12 col-sm-12 form-group">

    <label for="register-form-name">GST:</label>

    <input type="text" name="gst" value="<?php if(isset($row)) { echo $row['product_GST']; } ?>" class="form-control" / required>

    <textarea class="form-control" name="message" placeholder="Message..."><?php if(isset($row)) { echo $row['product_GST']; } ?></textarea>

</div> -->