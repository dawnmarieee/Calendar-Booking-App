
<?php
require_once './library/config.php';
require_once './library/functions.php';

checkFDUser();

$content = 'views/dashboard.php';
$pageTitle = 'AC-DC Service Center';
$script = array();

require_once 'include/template.php';
?>
<meta http-equiv="cache-control" content="no-cache">