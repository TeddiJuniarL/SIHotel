<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title>Sistem Hotel</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<link href="<?php echo base_url();?>asset/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>asset/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>asset/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/global/plugins/select2/select2.css"/>

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/global/plugins/clockface/css/clockface.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/global/plugins/bootstrap-datepicker/css/datepicker3.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/global/plugins/bootstrap-colorpicker/css/colorpicker.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/global/plugins/bootstrap-datetimepicker/css/datetimepicker.css"/>


<link href="<?php echo base_url();?>asset/global/css/components.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>asset/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>asset/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="<?php echo base_url();?>asset/admin/layout/css/themes/default.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>asset/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>

<script src="<?php echo base_url();?>asset/jquery-1.8.3.js"></script>
</head>
<body class="page-header-fixed page-quick-sidebar-over-content page-full-width">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<div class="hor-menu hidden-sm hidden-xs">
			<ul class="nav navbar-nav">
				
				<li class="classic-menu-dropdown active">
					<a href="<?php echo base_url();?>sistem/home">
					SISTEM HOTEL <span class="selected">
					</span>
					</a>
				</li>

				<?php

				if($this->session->userdata("user_group_id")==2) { ?>

				<li class="classic-menu-dropdown">
					<a data-toggle="dropdown" href="javascript:;">
					PEMESANAN <i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu pull-left">
						<li>
							<a href="<?php echo base_url();?>sistem/new_reservasi">
							<i class="fa fa-table"></i> PEMESANAN BARU</a>
						</li>
						<li>
							<a href="<?php echo base_url();?>sistem/reservasi">
							<i class="fa fa-table"></i> SEMUA PEMESANAN </a>
						</li>
						

						
					</ul>
				</li>

				<?php
				}
				else { ?>

				<li class="classic-menu-dropdown">
					<a data-toggle="dropdown" href="javascript:;">
					GALERI <i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu pull-left">
						<li>
							<a href="<?php echo base_url();?>sistem/kategori_galeri">
							<i class="fa fa-table"></i> KATEGORI </a>
						</li>
						<li>
							<a href="<?php echo base_url();?>sistem/galeri">
							<i class="fa fa-table"></i> UPLOAD </a>
						</li>
						

						
					</ul>
				</li>
				<li class="classic-menu-dropdown">
					<a data-toggle="dropdown" href="javascript:;">
					KAMAR <i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu pull-left">
						<li>
							<a href="<?php echo base_url();?>sistem/kelas_kamar">
							<i class="fa fa-table"></i> KELAS KAMAR </a>
						</li>
						<li>
							<a href="<?php echo base_url();?>sistem/kamar">
							<i class="fa fa-table"></i> KAMAR </a>
						</li>
						
						

						
					</ul>
				</li>
				
				<li class="classic-menu-dropdown">
					<a data-toggle="dropdown" href="javascript:;">
					PEMESANAN <i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu pull-left">
						<li>
							<a href="<?php echo base_url();?>sistem/new_reservasi">
							<i class="fa fa-table"></i> PEMESANAN BARU</a>
						</li>
						<li>
							<a href="<?php echo base_url();?>sistem/reservasi">
							<i class="fa fa-table"></i> SEMUA PEMESANAN </a>
						</li>
						

						
					</ul>
				</li>
				<li>
					<a href="<?php echo base_url();?>sistem/saran">
					KRITIK/SARAN </a>
				</li>
				<li class="classic-menu-dropdown">
					<a data-toggle="dropdown" href="javascript:;">
					SETTING <i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu pull-left">
						<li>
							<a href="<?php echo base_url();?>sistem/user_group">
							<i class="fa fa-table"></i> USER GROUP </a>
						</li>
						<li>
							<a href="<?php echo base_url();?>sistem/user">
							<i class="fa fa-table"></i> USER </a>
						</li>
						<li>
							<a href="<?php echo base_url();?>sistem/tentang_kami">
							<i class="fa fa-table"></i> TENTANG KAMI </a>
						</li>
						

						
					</ul>
				</li>

				<?php
				}
				?>
				
				

				
				
				
				

				

				


				
				
				
			</ul>
		</div>
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		
		<div class="top-menu">
			<ul class="nav navbar-nav pull-right">
				

				<?php
           
            $query = $this->db->query("select count(id_reservasi) as jml from tbl_reservasi where status_reservasi='0' ");
            
            foreach ($query->result_array() as $tampil) {
              $jumlah = $tampil['jml'];
            }
            ?>

            <?php
            if ($jumlah!="0") { ?>
				<li class="dropdown dropdown-extended dropdown-tasks" id="header_task_bar">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<i class="fa fa-globe"></i>
					<span class="badge badge-default">
					<?php echo $jumlah;?> </span>
					</a>
					<ul class="dropdown-menu extended tasks">
						
						
						<li class="external">
							<a href="<?php echo base_url();?>sistem/new_reservasi">
							Pemesanan Baru <i class="m-icon-swapright"></i>
							</a>
						</li>
					</ul>
				</li>
				 <?php
            }
            else { ?>

             <?php
            }
            ?>
				
				<li class="dropdown dropdown-user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					
					<span class="username username-hide-on-mobile">
					SISTEM </span>
					<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="<?php echo base_url();?>sistem/ganti_password">
							GANTI PASSWORD </a>
						</li>
						<li>
							<a href="<?php echo base_url();?>sistem/logout">
							LOGOUT </a>
						</li>
					</ul>
				</li>
				
			</ul>
		</div>
		
	</div>
	
</div>

<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<div class="page-sidebar navbar-collapse collapse">
			<ul class="page-sidebar-menu" data-slide-speed="200" data-auto-scroll="true">
				
				<li class="active">
					<a href="<?php echo base_url();?>sistem/home">
					SISTEM HOTEL <span class="selected">
					</span>
					</a>
				</li>
				

				<?php

				if($this->session->userdata("user_group_id")==2) { ?>

				<li>
					<a>
					PEMESANAN <span class="arrow">
					</span>
					</a>
					<ul class="sub-menu">
						
						<li>
							<a href="<?php echo base_url();?>sistem/new_reservasi">
							<i class="fa fa-table"></i> PEMESANAN BARU </a>
						</li>
						<li>
							<a href="<?php echo base_url();?>sistem/reservasi">
							<i class="fa fa-table"></i> SEMUA PEMESANAN </a>
						</li>
						
					</ul>
				</li>

				<?php
				}
				else { ?>

				<li>
					<a>
					GALERI <span class="arrow">
					</span>
					</a>
					<ul class="sub-menu">
						
						<li>
							<a href="<?php echo base_url();?>sistem/kategori_galeri">
							<i class="fa fa-table"></i> KATEGORI </a>
						</li>
						<li>
							<a href="<?php echo base_url();?>sistem/galeri">
							<i class="fa fa-table"></i> UPLOAD </a>
						</li>
						
					</ul>
				</li>

				<li>
					<a>
					KAMAR <span class="arrow">
					</span>
					</a>
					<ul class="sub-menu">
						
						<li>
							<a href="<?php echo base_url();?>sistem/kelas_kamar">
							<i class="fa fa-table"></i> KELAS KAMAR </a>
						</li>
						<li>
							<a href="<?php echo base_url();?>sistem/kamar">
							<i class="fa fa-table"></i> KAMAR </a>
						</li>
						
					</ul>
				</li>

				<li>
					<a>
					PEMESANAN <span class="arrow">
					</span>
					</a>
					<ul class="sub-menu">
						
						<li>
							<a href="<?php echo base_url();?>sistem/new_reservasi">
							<i class="fa fa-table"></i> PEMESANAN BARU </a>
						</li>
						<li>
							<a href="<?php echo base_url();?>sistem/reservasi">
							<i class="fa fa-table"></i> SEMUA PEMESANAN </a>
						</li>
						
					</ul>
				</li>

				<li>
					<a href="<?php echo base_url();?>sistem/saran">
					KRITIK/SARAN </a>
				</li>

				<li>
					<a>
					SETTING <span class="arrow">
					</span>
					</a>
					<ul class="sub-menu">
						
						<li>
							<a href="<?php echo base_url();?>sistem/user_group">
							<i class="fa fa-table"></i> USER GROUP </a>
						</li>
						<li>
							<a href="<?php echo base_url();?>sistem/user">
							<i class="fa fa-table"></i> USER </a>
						</li>
						<li>
							<a href="<?php echo base_url();?>sistem/tentang_kami">
							<i class="fa fa-table"></i> TENTANG KAMI </a>
						</li>
						
					</ul>
				</li>


				<?php
				}
				?>
				
				
				

				
				
				
				
			</ul>
		</div>
		<!-- END HORIZONTAL RESPONSIVE MENU -->
	</div>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN STYLE CUSTOMIZER -->
			
			<!-- END STYLE CUSTOMIZER -->
			<!-- BEGIN PAGE HEADER-->
			
			
			<!-- END PAGE HEADER-->
			<!-- BEGIN DASHBOARD STATS -->
			
			<!-- END DASHBOARD STATS -->
			
			 <?php echo $contents; ?> 

			
		</div>
	</div>
	<!-- END CONTENT -->
	<!-- BEGIN QUICK SIDEBAR -->
	<a href="javascript:;" class="page-quick-sidebar-toggler"><i class="icon-close"></i></a>
	
	<!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="page-footer-inner">
		 2015 &copy; SISTEM HOTEL.
	</div>
	<div class="page-footer-tools">
		<span class="go-top">
		<i class="fa fa-angle-up"></i>
		</span>
	</div>
</div>
<script src="<?php echo base_url();?>asset/global/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>asset/global/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>asset/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>asset/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>asset/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>asset/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>asset/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>asset/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>asset/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>asset/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>asset/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>asset/global/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>asset/global/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>asset/global/plugins/jquery-easypiechart/jquery.easypiechart.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>asset/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>

<script type="text/javascript" src="<?php echo base_url();?>asset/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asset/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>asset/global/plugins/bootstrap-daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asset/global/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asset/global/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asset/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>asset/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asset/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>

<script src="<?php echo base_url();?>asset/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>asset/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>asset/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>asset/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>asset/admin/pages/scripts/index.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>asset/admin/pages/scripts/tasks.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>asset/admin/pages/scripts/components-pickers.js"></script>

<script src="<?php echo base_url();?>asset/admin/pages/scripts/form-validation.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>asset/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asset/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asset/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>



<script src="<?php echo base_url();?>asset/admin/pages/scripts/table-editable.js"></script>






<script>
jQuery(document).ready(function() {    
   Metronic.init(); // init metronic core components
   Layout.init(); // init current layout
QuickSidebar.init(); // init quick sidebar
Demo.init(); // init demo features // initlayout and core plugins
   Index.init();
   Index.initJQVMAP(); // init index page's custom scripts
   Index.initCalendar(); // init index page's custom scripts
   Index.initCharts(); // init index page's custom scripts
   Index.initChat();
   Index.initMiniCharts();
   Index.initDashboardDaterange();
   Tasks.initDashboardWidget();
   TableEditable.init();
   ComponentsPickers.init();
   FormValidation.init();
});
</script>
<!-- END JAVASCRIPTS -->

</body>

<!-- END BODY -->
</html>