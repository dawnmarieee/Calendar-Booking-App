<!-- calendar-->
<meta http-equiv="cache-control" content="no-cache">
<div class="col-md-8">
  <?php include('calendar.php'); ?>
</div>

<!-- book an appointment-->
<!-- /.col -->

<div class="col-md-4">
<?php 
$type = $_SESSION['calendar_fd_user']['type'];
if($type == 'admin') {
	include('eventform.php');
}
else if($type == 'user') {
	include('eventform2.php');
}
else {
	echo "&nbsp;";
}
?>	
</div>
<!-- /.col -->
