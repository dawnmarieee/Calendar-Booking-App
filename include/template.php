<?php
if (!defined('WEB_ROOT')) {
	exit;
}

$self = WEB_ROOT . 'admin/file.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="cache-control" content="no-cache">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<?php include('head.php'); ?>
<style>
  
  h3 {
    font-family: 'Poppins', arial, sans-serif;
    font-weight: 900; 
    font-style: italic; 
    color: rgba(6,16,88,0.6);
    text-align: left;
    text-shadow: 1px 1px 3px rgba(6, 5, 10, 0.3);
    
  }
  .main-header a {
    background: transparent;
    color: rgb(71,49,241);
    transition-duration: 0.6s;
    margin-left: 25px;
  }
  a.sidebar-toggle {
    color: white;
  }
  
  /** upper right nav **/
  .navbar-custom-menu a {    
	  color: white;
    text-shadow: 1px 1px 5px rgba(30,51,59, 0.6);
    background: transparent;
  }
  /** background**/
  .sidebar-mini {
    color: white;
    font-weight: bolder;
    transition-duration: 0.6s;
    
  }
  /** side bar **/
  .main-sidebar a {
    color: white;
    text-shadow: 1px 1px 25px rgba(30,51,59, 0.6),
                  1px 1px 3px rgba(30,51,59, 0.6);
    font-size: 16px;
    font-weight: bolder;
    transition-duration: 0.6s;
    background: transparent;
    
  }

  .main-sidebar a:hover {
    color: rgb(71,49,241);
    text-shadow: 1px 1px 2px rgba(11,20,23, 0.3);
    font-size: 15px;
    font-weight: bolder;
    background: transparent;
  }
  
  .alert {
    text-shadow: none;
  }
  .content-wrapper {
    padding: 20px;
    border-radius: 50px;
    color: #808080;
    box-shadow:  inset 6px 10px 10px rgba(255, 255, 255, 0.9),
                inset -6px -6px 10px rgba(6, 5, 10, 0.3);
    box-shadow: 6px 10px 8px rgba(255, 255, 255, 0.9),
               -10px -6px 10px rgba(255, 255, 255, 0.);
  }

  .content-header .breadcrumb li a {
    font-size: 14px;
    color: rgb(6,16,88);
    text-shadow: 1px 1px 3px rgba(30,51,59, 0.3);
    background: transparent;
  }

  .content-header .breadcrumb .active {
    font-size: 14px;
    color: rgb(119,202,234);
    text-shadow: 1px 1px 6px rgba(255, 255, 255, 0.9),
                 1px 1px 2px rgba(255, 255, 255, 0.9);
    background: transparent;
  }

  /**calendar */
  .content {
    font-size: 14px;
     
    color: rgb(169,169,169);
    text-shadow: 1px 1px 3px rgba(255, 255, 255, 0.9),
                 1px 1px 2px rgba(255, 255, 255, 0.9);
    background: transparent;
  }
  
  .table {
    font-size: 14px;
    font-weight: 600;
  }

  .label {
    color: white;
    text-shadow: none;
  }
  
  .fc-widget-content {
    text-shadow: none;
  }
  .box {
    border: 3px solid rgb(119,202,234);
    border-radius: 30px;
    
}
  .box-title {
    color: rgba(194, 42, 95,0.75);
    font-weight: 600;
    padding: 10px;
    text-shadow: 1px 1px 6px rgba(255, 255, 255, 0.9),
                 1px 1px 3px rgba(75,0,13, 0.3);
    background: transparent;
  }

  .box-footer {
    background: transparent;
  }
  .fc-center {
    color: rgba(194, 42, 95,0.75);
    text-shadow: 1px 1px 6px rgba(255, 255, 255, 0.9),
                 1px 1px 3px rgba(75,0,13, 0.3);
    background: transparent;
  }
  .row {
    background: transparent;
  }
  .main-footer {
    border: transparent;
    text-align: center;
    color: white;
    text-shadow: 1px 1px 7px rgba(30,51,59, 0.8);
    background: transparent;
    margin-top: 20px;
  }
  body {
    background: rgb(119,202,234);
  }
</style>
</head>
<body class="sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo WEB_ROOT; ?>" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-lg"><b></b></span> </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
      <?php include('nav.php'); ?>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
   <?php include('sidebar.php'); ?>
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3> AC-DC Service Center Online Booking System<br></h3>
      <ol class="breadcrumb">
        <li><a href="../../../acdc/booking/home.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Calendar</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      
	  <div class="row">
	  	<div class="col-md-12">
		<?php include('messages.php'); ?>
		</div>
	  </div>
	  
	  <div class="row">
	  	<?php
			require_once $content;	 
		  ?>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
		<?php include('footer.php'); ?>
	</footer>
</div>
<!-- ./wrapper -->
</body>
</html>
