<link href="<?php echo WEB_ROOT; ?>library/spry/textfieldvalidation/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script src="<?php echo WEB_ROOT; ?>library/spry/textfieldvalidation/SpryValidationTextField.js" type="text/javascript"></script>

<link href="<?php echo WEB_ROOT; ?>library/spry/textareavalidation/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<script src="<?php echo WEB_ROOT; ?>library/spry/textareavalidation/SpryValidationTextarea.js" type="text/javascript"></script>

<link href="<?php echo WEB_ROOT; ?>library/spry/selectvalidation/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<script src="<?php echo WEB_ROOT; ?>library/spry/selectvalidation/SpryValidationSelect.js" type="text/javascript"></script>

<div class="box box-primary">
<div class="box-body">
  <div class="box-header with-border">
    <h3 class="box-title"><b>Book An Appointment</b></h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form role="form" action="<?php echo WEB_ROOT; ?>api/process.php?cmd=book" method="post">
    <!-- technician -->	 
	  <div class="form-group">
	  	<label for="exampleInputEmail1">Choose a Technician</label>
		<input type="hidden" name="techId" value=""  id="techId"/>
        <span id="sprytf_tech">
		<select name="tech" class="form-control input-sm">
			<option>-- Select Technician --</option>
			<?php
			$sql = "SELECT id, name, type FROM tbl_technicians";
			$result = dbQuery($sql);
			while($row = dbFetchAssoc($result)) {
				extract($row);
			?>
			<option value="<?php echo $id; ?>"><?php echo $name; ?>&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $type; ?></option>
			<?php 
			}
			?>
		</select>
		<span class="selectRequiredMsg">Technician is required.</span>
		<span class="selectValidState" id="type"><?php echo $type; ?></span>
		</span>
      </div>
 <!-- Appointment Date -->	 
	  <div class="form-group">
      <div class="row">
      	<div class="col-xs-6">
			<label>Appointment Date</label>
			<span id="sprytf_rdate">
        	<input type="text" name="rdate" class="form-control" placeholder="YYYY-mm-dd">
			<span class="textfieldRequiredMsg">Date is required.</span>
			<span class="textfieldInvalidFormatMsg">Invalid date Format.</span>
			</span>
        </div>
	<!-- Appointment Time -->	
        <div class="col-xs-6">
			<label>Appointment Time</label>
			<span id="sprytf_rtime">
            <input type="text" name="rtime" class="form-control" placeholder="HH:mm">
			<span class="textfieldRequiredMsg">Time is required.</span>
			<span class="textfieldInvalidFormatMsg">Invalid time Format.</span>
			</span>
       </div>
      </div>
	  </div>
	<!-- No of Units -->			  
	  <div class="form-group">
        <label for="exampleInputPassword1">No of Units</label>
		<span id="sprytf_ucount">
        <input type="text" name="ucount" class="form-control input-sm" placeholder="No. of units" >
		<span class="textfieldRequiredMsg">No of units</span>
		<span class="textfieldInvalidFormatMsg">Invalid Format.</span>
      </div>
			

 	 
      <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
		<input type="hidden" name="userId" value=""  id="userId"/>
        <span id="sprytf_name">
		<select size="1" name="name" class="form-control input-sm" id="option_limit">
			<option></option>
			<?php
			$sql = "SELECT id, name FROM tbl_users";
			$result = dbQuery($sql);
			while($row = dbFetchAssoc($result)) {
				extract($row);
			?>
			<option value="<?php echo ($_SESSION['calendar_fd_user']['id']); ?>"><?php echo ($_SESSION['calendar_fd_user']['name']); ?></option>
			<?php 
			}
			?>
		</select>
		<span class="selectRequiredMsg">Name is required.</span>
		</span>
      </div>
	  
	  <!--address-->
      <div class="form-group">
        <label for="exampleInputEmail1">Address</label>
        <span id="sprytf_address">
		      <input type="text" name="address" class="form-control input-sm" placeholder="Floor/Unit/Room#" id="address">
		      <span class="textfieldRequiredMsg">Address is required.</span>
		      </span>
      </div>
      <!--city-->
      <div class="form-group">
        <label for="exampleInputEmail1">City</label>
        <span id="sprytf_city">
		      <input type="text" name="city" class="form-control input-sm" placeholder="City" id="city">
		      <span class="textfieldRequiredMsg">City is required.</span>
		      </span>
      </div>
      <!--province-->
      <div class="form-group">
        <label for="exampleInputEmail1">Province</label>
        <span id="sprytf_province">
		      <input type="text" name="province" class="form-control input-sm" placeholder="Province" id="province">
		      <span class="textfieldRequiredMsg">Province is required.</span>
		      </span>
      </div>
      <!--zip-->
      <div class="form-group">
        <label for="exampleInputEmail1">Zip Code</label>
        <span id="sprytf_uzip">
		      <input type="text" name="zip" class="form-control input-sm" placeholder="Zip Code" id="zip">
		      <span class="textfieldRequiredMsg">Zip Code is required.</span>
          <span class="textfieldMinCharsMsg">Zip Code must specify at least 4 characters.</span>
		      </span>
      </div>
	  <div class="form-group">
        <label for="exampleInputEmail1">Appointment Notes</label>
		<span id="sprytf_notes">
        <textarea name="notes" class="form-control input-sm" placeholder="Type your notes here." id="notes"></textarea>
		<span class="textareaRequiredMsg">State the defects/problems of your unit.</span>
		<span class="textareaMinCharsMsg">Notes must specify at least 10 characters.</span>	
		</span>
      </div>
	  <div class="form-group">
        <label for="exampleInputEmail1">Phone</label>
		<span id="sprytf_phone">
        <input type="text" name="phone" class="form-control input-sm"  placeholder="Enter phone number" id="phone">
		<span class="textfieldRequiredMsg">Phone number is required.</span>
		</span>
      </div>
	  <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
		<span id="sprytf_email">
        <input type="text" name="email" class="form-control input-sm" placeholder="Enter email" id="email">
		<span class="textfieldRequiredMsg">Email ID is required.</span>
		<span class="textfieldInvalidFormatMsg">Please enter a valid email (user@domain.com).</span>
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

var sprytf_name 	= new Spry.Widget.ValidationSelect("sprytf_name");
var sprytf_address 	= new Spry.Widget.ValidationTextField("sprytf_address", 'none', {validateOn:["blur", "change"]});
var sprytf_city 	= new Spry.Widget.ValidationTextField("sprytf_city", 'none', {validateOn:["blur", "change"]});
var sprytf_province = new Spry.Widget.ValidationTextField("sprytf_province", 'none', {validateOn:["blur", "change"]});
var sprytf_uzip 	= new Spry.Widget.ValidationTextField("sprytf_uzip", "integer", {minChars:4, isRequired:true, validateOn:["blur", "change"]});
var sprytf_notes 	= new Spry.Widget.ValidationTextarea("sprytf_notes", {minChars:6, isRequired:true, validateOn:["blur", "change"]});
var sprytf_phone 	= new Spry.Widget.ValidationTextField("sprytf_phone", 'none', {validateOn:["blur", "change"]});
var sprytf_mail 	= new Spry.Widget.ValidationTextField("sprytf_email", 'email', {validateOn:["blur", "change"]});
var sprytf_rdate 	= new Spry.Widget.ValidationTextField("sprytf_rdate", "date", {format:"yyyy-mm-dd", useCharacterMasking: true, validateOn:["blur", "change"]});
var sprytf_rtime 	= new Spry.Widget.ValidationTextField("sprytf_rtime", "time", {hint:"i.e 20:10", useCharacterMasking: true, validateOn:["blur", "change"]});
var sprytf_ucount 	= new Spry.Widget.ValidationTextField("sprytf_ucount", "integer", {validateOn:["blur", "change"]});
var sprytf_tech 	= new Spry.Widget.ValidationSelect("sprytf_tech");
//-->
</script>
<script type="text/javascript">
$('select').on('change', function() {
	//alert( this.value );
	var id = this.value;
	$.get('<?php echo WEB_ROOT. 'api/process.php?cmd=tech&techId=' ?>'+id, function(data, status){
		var obj = $.parseJSON(data);
		$('#techId').val(obj.tech_id);
		$('#type').val(obj.type);
	});
	
})
</script>

<script type="text/javascript">
$('select').on('change', function() {
	//alert( this.value );
	var id = this.value;
	$.get('<?php echo WEB_ROOT. 'api/process.php?cmd=user&userId=' ?>'+id, function(data, status){
		var obj = $.parseJSON(data);
		$('#userId').val(obj.user_id);
		$('#email').val(obj.email);
		$('#address').val(obj.address);
		$('#city').val(obj.city);
		$('#province').val(obj.province);
		$('#zip').val(obj.zip);
		$('#notes').val(obj.notes);
		$('#phone').val(obj.phone_no);
	});
	
})
</script>

<script type="text/javascript">

$(document).ready(function() {
$("#option_limit").children('option:gt(1)').hide();
$("#layout_select").children('option').hide();
})
</script> 