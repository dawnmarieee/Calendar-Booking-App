<?php 
$records = getTechRecords();
$utype = '';
$type = $_SESSION['calendar_fd_user']['type'];
if($type == 'admin' || $type == 'employee') {
	$utype = 'on';
}
?>

<div class="col-md-12">
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Technician details</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table class="table table-bordered">
        <tr>
          <th style="width: 10px">#</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>User Role</th> <!-- aircon / tv / ref -->
          <th style="width: 100px">Status</th>
          <?php if($utype == 'on') { ?>
		  <th>Action</th>
		  <?php } ?>
        </tr>
        <?php
	  $idx = 1;
	  foreach($records as $rec) {
	  	extract($rec);
		$stat = '';
		if($status == "active") {$stat = 'success';}
		else if($status == "lock") {$stat = 'warning';}
		else if($status == "inactive") {$stat = 'warning';}
		else if($status == "delete") {$stat = 'danger';}
		?>
        <tr>
          <td><?php echo $idx++; ?></td>
          <td><a href="<?php echo WEB_ROOT; ?>views/?v=TECH&ID=<?php echo $tech_id; ?>"><?php echo strtoupper($tech_name); ?></a></td>
          <td><?php echo $tech_email; ?></td>
          <td><?php echo $tech_phone; ?></td>
         
          <td>
		  <i class="fa <?php echo $type == 'aircon' ? 'fa-user' : 'fa-users' ; ?>" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo strtoupper($type); ?></i></td>
          <td><span class="label label-<?php echo $stat; ?>"><?php echo strtoupper($status); ?></span></td>
          <?php if($utype == 'on') { ?>
		  <td><?php if($status == "active") {?>
            <a href="javascript:status('<?php echo $tech_id ?>', 'inactive');">Inactive</a>&nbsp;/
			&nbsp;<a href="javascript:status('<?php echo $tech_id ?>', 'lock');">Account Lock</a>&nbsp;/
			&nbsp;<a href="javascript:status('<?php echo $tech_id ?>', 'delete');">Delete</a>
            <?php } else { ?>
			<a href="javascript:status('<?php echo $tech_id ?>', 'active');">Active</a>
			<?php }//else ?>
          </td>
		  <?php }?>
        </tr>
        <?php } ?>
      </table>
    </div>
    <!-- /.box-body -->
    <div class="box-footer clearfix">
	
	<?php 
	$type = $_SESSION['calendar_fd_user']['type'];
	if($type == 'admin') {
	?>
	<button type="button" class="btn btn-info" onclick="javascript:createTechForm();"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;Add a New Technician</button>
	<?php 
	}
	?>
      <!--
	<ul class="pagination pagination-sm no-margin pull-right">
      <li><a href="#">&laquo;</a></li>
      <li><a href="#">1</a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">&raquo;</a></li>
    </ul>
	-->
      <?php echo generatePagination(); ?> </div>
  </div>
  <!-- /.box -->
</div>

<script language="javascript">
function createTechForm() {
	window.location.href = '<?php echo WEB_ROOT; ?>views/?v=CREATED';
}
function status(userId, status) {
	if(confirm('Are you sure you wants to ' + status+ ' it ?')) {
		window.location.href = '<?php echo WEB_ROOT; ?>views/process2.php?cmd=change&action='+ status +'&userId='+userId;
	}
}


</script>
