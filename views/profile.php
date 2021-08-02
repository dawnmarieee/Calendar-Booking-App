
<div class="col-md-9">
  <div class="box box-solid">
    <div class="box-header with-border"> <i class="fa fa-text-width"></i>
    <h3 class="box-title"><span style="color: rgb(83,0,165);!important">Personal Information</span></h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <dl class="dl-horizontal">
        <dt>Username</dt>
        <dd><?php echo strtoupper($_SESSION['calendar_fd_user']['name']); ?></dd>
        
		<dt>Address</dt>
        <dd><?php echo strtoupper($_SESSION['calendar_fd_user']['address']); ?></dd>
        <dd><?php echo strtoupper($_SESSION['calendar_fd_user']['city']); ?></dd>
        <dd><?php echo strtoupper($_SESSION['calendar_fd_user']['province']); ?></dd>
        <dd><?php echo strtoupper($_SESSION['calendar_fd_user']['zip']); ?></dd>
		<dt>Email</dt>
        <dd><?php echo($_SESSION['calendar_fd_user']['email']); ?></dd>
		
		<dt>Phone</dt>
        <dd><?php echo strtoupper($_SESSION['calendar_fd_user']['phone']); ?></dd>
		
		<dt>Booking Status</dt>
        <dd><?php echo strtoupper($_SESSION['calendar_fd_user']['status']); ?></dd>
		
      </dl>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</div>