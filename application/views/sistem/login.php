<!DOCTYPE html>


<html lang="en">

<head>
<meta charset="utf-8"/>
<title>Hotel System</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>

<link href="<?php echo base_url();?>asset/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>asset/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>asset/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>asset/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>asset/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>

<link href="<?php echo base_url();?>asset/global/plugins/select2/select2.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>asset/admin/pages/css/login-soft.css" rel="stylesheet" type="text/css"/>

<link href="<?php echo base_url();?>asset/global/css/components.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>asset/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>asset/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="<?php echo base_url();?>asset/admin/layout/css/themes/default.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>asset/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>


</head>

<body class="login">


<div class="logo">
	<a href="<?php echo base_url();?>sistem">
		<?php 
		foreach ($tentang_kami->result_array() as $value) {
			$logo = $value['logo'];
	}
		?>
	<img src="<?php echo base_url();?>images/tentang_kami/<?php echo $logo;?>" alt=""/>
	</a>
</div> 

<div class="menu-toggler sidebar-toggler">
</div>

<div class="content">

	<?php if(validation_errors()) { ?>
                <div class="alert alert-danger">
                   <span>Username atau Password Kosong.</span>  
                </div>
                <?php } ?>
	

	<?php echo form_open('sistem/login','class="login-form"'); ?>
		
		
		<?php 
									
													if ($this->session->flashdata('error')){
									echo "<div class='alert alert-danger'>
											<button class='close' data-close='alert'></button>
											<span>
											Username atau password Salah!. </span>
										</div>";

									}
													
												
							?>
		<div class="form-group">
			
			<label class="control-label visible-ie8 visible-ie9">Username</label>
			<div class="input-icon">
				<i class="fa fa-user"></i>
				<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username_user"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Password</label>
			<div class="input-icon">
				<i class="fa fa-lock"></i>
				<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password_user"/>
			</div>
		</div>
		<div class="form-actions">
			
			<button type="submit" class="btn blue pull-right">
			Login <i class="m-icon-swapright m-icon-white"></i>
			</button>
		</div>
		
		
	<?php echo form_close();?>
	
</div>

<div class="copyright">
	  &copy; Hotel System.
</div>

<script src="<?php echo base_url();?>asset/global/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>asset/global/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>

<script src="<?php echo base_url();?>asset/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>asset/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>asset/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>asset/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>asset/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>asset/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>asset/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>asset/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>

<script src="<?php echo base_url();?>asset/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>asset/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url();?>asset/global/plugins/select2/select2.min.js"></script>

<script src="<?php echo base_url();?>asset/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>asset/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>asset/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>asset/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>asset/admin/pages/scripts/login-soft.js" type="text/javascript"></script>

<script>
jQuery(document).ready(function() {     
  Metronic.init(); 
Layout.init(); 
QuickSidebar.init(); 
Demo.init(); 
  Login.init();
     
      
});
</script>


</body>


</html>