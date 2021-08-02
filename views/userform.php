<div class="col-md-8">
  
<link href="<?php echo WEB_ROOT; ?>library/spry/textfieldvalidation/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script src="<?php echo WEB_ROOT; ?>library/spry/textfieldvalidation/SpryValidationTextField.js" type="text/javascript"></script>

<link href="<?php echo WEB_ROOT; ?>library/spry/textareavalidation/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<script src="<?php echo WEB_ROOT; ?>library/spry/textareavalidation/SpryValidationTextarea.js" type="text/javascript"></script>

<link href="<?php echo WEB_ROOT; ?>library/spry/selectvalidation/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<script src="<?php echo WEB_ROOT; ?>library/spry/selectvalidation/SpryValidationSelect.js" type="text/javascript"></script>

<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title"><b>User Registration</b></h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form role="form" action="<?php echo WEB_ROOT; ?>views/process.php?cmd=create" method="post">
    <div class="box-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <span id="sprytf_name">
		      <input type="text" name="name" class="form-control input-sm" placeholder="Username">
		      <span class="textfieldRequiredMsg">Name is required.</span>
		      <span class="textfieldMinCharsMsg">Name must specify at least 6 characters.</span>
		      </span>
      </div>
      <!--address-->
      <div class="form-group">
        <label for="exampleInputEmail1">Address</label>
        <span id="sprytf_address">
		      <input type="text" name="address" class="form-control input-sm" placeholder="Floor/Unit/Room#">
		      <span class="textfieldRequiredMsg">Address is required.</span>
		      </span>
      </div>
      <!--city-->
      <div class="form-group">
        <label for="exampleInputEmail1">City</label>
        <span id="sprytf_city">
		      <input type="text" name="city" class="form-control input-sm" placeholder="City">
		      <span class="textfieldRequiredMsg">City is required.</span>
		      </span>
      </div>
      <!--province-->
      <div class="form-group">
        <label for="exampleInputEmail1">Province</label>
        <span id="sprytf_province">
		      <input type="text" name="province" class="form-control input-sm" placeholder="Province">
		      <span class="textfieldRequiredMsg">Province is required.</span>
		      </span>
      </div>
      <!--zip-->
      <div class="form-group">
        <label for="exampleInputEmail1">Zip Code</label>
        <span id="sprytf_uzip">
		      <input type="text" name="zip" class="form-control input-sm" placeholder="Zip Code">
		      <span class="textfieldRequiredMsg">Zip Code is required.</span>
          <span class="textfieldMinCharsMsg">Zip Code must specify at least 4 characters.</span>
		      </span>
      </div>
      <!--notes-->
	  <div class="form-group">
        <label for="exampleInputEmail1">Notes</label>
		<span id="sprytf_notes">
        <textarea name="notes" class="form-control input-sm" placeholder="Type your notes here."></textarea>
		<span class="textareaRequiredMsg">Type your notes here.</span>
		<span class="textareaMinCharsMsg">Notes must specify at least 10 characters.</span>	
		</span>
      </div>
      <!--phone-->
	  <div class="form-group">
        <label for="exampleInputEmail1">Phone</label>
		<span id="sprytf_phone">
        <input type="text" name="phone" class="form-control input-sm"  placeholder="Phone number">
		<span class="textfieldRequiredMsg">Phone number is required.</span>
		</span>
      </div>
      <!--email-->
	  <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
		<span id="sprytf_email">
        <input type="text" name="email" class="form-control input-sm" placeholder="Enter email">
		<span class="textfieldRequiredMsg">Email ID is required.</span>
		<span class="textfieldInvalidFormatMsg">Please enter a valid email (user@domain.com).</span>
		</span>
      </div>
	  

	<div class="form-group">
        <label for="exampleInputEmail1">User Type</label>
		<span id="sprytf_type">
        <select name="type"  class="form-contro input-sm">
			<option value="">-- select user type --</option>
			<option value="user">User</option>
			<option value="employee">Employee</option>
		</select>
		<span class="selectRequiredMsg">Please select User Type.</span>
		</span>
		
      </div>
	  		  
	  
    <!-- /.box-body -->
    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
<!-- /.box -->
<script type="text/javascript">
<!--
var sprytf_name 	= new Spry.Widget.ValidationTextField("sprytf_name", 'none', {minChars:6, validateOn:["blur", "change"]});
var sprytf_address 	= new Spry.Widget.ValidationTextField("sprytf_address", 'none', {validateOn:["blur", "change"]});
var sprytf_city 	= new Spry.Widget.ValidationTextField("sprytf_city", 'none', {validateOn:["blur", "change"]});
var sprytf_province 	= new Spry.Widget.ValidationTextField("sprytf_province", 'none', {validateOn:["blur", "change"]});
var sprytf_uzip 	= new Spry.Widget.ValidationTextField("sprytf_uzip", "integer", {minChars:4, isRequired:true, validateOn:["blur", "change"]});
var sprytf_notes 	= new Spry.Widget.ValidationTextarea("sprytf_notes", 'none', {minChars:10, isRequired:true, validateOn:["blur", "change"]});
var sprytf_phone 	= new Spry.Widget.ValidationTextField("sprytf_phone", 'none', {validateOn:["blur", "change"]});
var sprytf_mail 	= new Spry.Widget.ValidationTextField("sprytf_email", 'email', {validateOn:["blur", "change"]});
//var sprytf_rdate 	= new Spry.Widget.ValidationTextField("sprytf_rdate", "date", {format:"yyyy-mm-dd", useCharacterMasking: true, validateOn:["blur", "change"]});
//var sprytf_rtime 	= new Spry.Widget.ValidationTextField("sprytf_rtime", "time", {hint:"i.e 20:10", useCharacterMasking: true, validateOn:["blur", "change"]});
//var sprytf_ucount 	= new Spry.Widget.ValidationTextField("sprytf_ucount", "integer", {validateOn:["blur", "change"]});
var sprytf_type 	= new Spry.Widget.ValidationSelect("sprytf_type");
//-->
</script>
</div>