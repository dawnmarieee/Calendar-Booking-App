<?php 
$records = getBookingRecords2();
$utype = '';
$type = $_SESSION['calendar_fd_user']['type'];
if($type == 'admin') {
	$utype = 'on';
}
?>

<tr>
          
          <td><a href="<?php echo WEB_ROOT; ?>views/?v=TECH&ID=<?php echo $uid; ?>"><?php echo strtoupper($tech_name); ?></a></td>
          <td><?php echo $tech_phone; ?></td>

</tr>
