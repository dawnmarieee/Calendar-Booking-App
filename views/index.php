<?php
require_once '../library/config.php';
require_once '../library/functions.php';

checkFDUser();

$view = (isset($_GET['v']) && $_GET['v'] != '') ? $_GET['v'] : '';

switch ($view) {
	case 'LIST' :
		$content 	= 'eventlist.php';		
		$pageTitle 	= 'View Event Details';
		break;

	case 'USERS' :
		$content 	= 'userlist.php';		
		$pageTitle 	= 'View User Details';
		break;
		
	case 'CREATE' :
		$content 	= 'userform.php';		
		$pageTitle 	= 'Create New User';
		break;
		
	case 'USER' :
		$content 	= 'user.php';		
		$pageTitle 	= 'View User Details';
		break;
	
	case 'HOLY' :
		$content 	= 'holidays.php';		
		$pageTitle 	= 'Holidays';
		break;	

	case 'PROFILE' :
		$content 	= 'profile.php';		
		$pageTitle 	= 'View Profile';
		break;
	
	case 'TECH' :
		$content 	= 'technician.php';		
		$pageTitle 	= 'View Technician';
		break;

	case 'TECHNICIAN' :
		$content 	= 'technicianlist.php';		
		$pageTitle 	= 'View Technician Details';
		break;

	case 'TECHINFO' :
		$content 	= 'technlink.php';		
		$pageTitle 	= 'View Technician';
		break;

	case 'CREATED' :
		$content 	= 'technicianform.php';		
		$pageTitle 	= 'Add New Technician';
		break;
	
	default :
		$content 	= 'dashboard.php';		
		$pageTitle 	= 'Calendar Dashboard';
}

require_once '../include/template.php';
?>
