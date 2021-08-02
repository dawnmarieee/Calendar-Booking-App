<?php 

require_once '../library/config.php';
require_once '../library/functions.php';
require_once '../library/mail.php';

$cmd = isset($_GET['cmd']) ? $_GET['cmd'] : '';

switch($cmd) {
	
	case 'create':
		createTech();
	break;
	
	case 'change':
		changeStatus();
	break;
	
	default :
	break;
}

function createTech() {
	$name 		= $_POST['name'];
	$email 		= $_POST['email'];
	$phone 		= $_POST['phone'];
	$type		= $_POST['type'];
	
	//TODO first check if that date has a holiday
	$hsql	= "SELECT * FROM tbl_technicians WHERE name = '$name'";
	$hresult = dbQuery($hsql);
	if (dbNumRows($hresult) > 0) {
		$errorMessage = 'Technician with same name already exist. Please try another day.';
		header('Location: ../views/?v=CREATED&err=' . urlencode($errorMessage));
		exit();
	}
	$pwd = random_string();
	$sql = "INSERT INTO tbl_technicians (name, phone, email, type, status)
			VALUES ('$name', '$phone', '$email', '$type', 'active')";	
	dbQuery($sql);
	
	//send email on registration confirmation
	$bodymsg = "$type Technician $name booked the date slot on $bkdate. Requesting you to please take further action on user booking.<br/>Mbr/>";
	$data = array('to' => '$email', 'sub' => 'Booking on $rdate.', 'msg' => $bodymsg);
	//send_email($data);
	header('Location: ../views/?v=TECHNICIAN&msg=' . urlencode('Successfully registered technician.'));
	exit();
}

//http://localhost/houda/views/process.php?cmd=change&action=inactive&userId=1
function changeStatus() {
	$action 	= $_GET['action'];
	$userId 	= (int)$_GET['userId'];
	
	
	$sql = "UPDATE tbl_technicians SET status = '$action' WHERE id = $userId";	
	dbQuery($sql);
	
	//send email on registration confirmation
	$bodymsg = "$type Technician $name booked the date slot on $bkdate. Requesting you to please take further action on technician booking.<br/>Mbr/>";
	$data = array('to' => '$email', 'sub' => 'Booking on $rdate.', 'msg' => $bodymsg);
	//send_email($data);
	header('Location: ../views/?v=TECHNICIAN&msg=' . urlencode('Technician status successfully updated.'));
	exit();
}
?>
