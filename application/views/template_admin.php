<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title><?=$title?></title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="JSOFT Admin - Responsive HTML5 Template">
		<meta name="author" content="JSOFT.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<!-- <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css"> -->

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/font-awesome/css/font-awesome.css" />
		 <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/magnific-popup/magnific-popup.css" /> 
		<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Specific Page Vendor CSS -->
		 <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/jquery-ui/css/ui-lightness/ jquery-ui-1.10.4.custom.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
		 <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/morris/morris.css" /> 

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/web.css"/>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/stylesheets/theme-custom.css">
		<!-- Head Libs -->
		 <script src="<?php echo base_url();?>assets/vendor/modernizr/modernizr.js"></script> 

	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<?php $this->load->view('include/admin/header');?>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<?php $this->load->view('include/admin/left-content');?>
				<!-- end: sidebar -->
				<section role="main" class="content-body">
					<?php $this->load->view('include/admin/header-top');?>
				<?php $this->load->view($template);?>
				</section>
				
			</div>
			<?php $this->load->view('include/admin/right-content');?>
			
		</section>

		<!-- Vendor -->
		<script src="<?php echo base_url();?>assets/vendor/jquery/jquery.js"></script>
		 <script src="<?php echo base_url();?>assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script> 
		<script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.js"></script>
		 <script src="<?php echo base_url();?>assets/vendor/nanoscroller/nanoscroller.js"></script> 
		<script src="<?php echo base_url();?>assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/bootstrap-datepicker/js/locales/bootstrap-datepicker.vi.js"></script>
		 <script src="<?php echo base_url();?>assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Specific Page Vendor -->
		<script src="<?php echo base_url();?>assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
		 <script src="<?php echo base_url();?>assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/jquery-appear/jquery.appear.js"></script>
		
		<script src="<?php echo base_url();?>assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/jquery-easypiechart/jquery.easypiechart.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/flot/jquery.flot.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/flot/jquery.flot.pie.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/flot/jquery.flot.categories.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/flot/jquery.flot.resize.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/jquery-sparkline/jquery.sparkline.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/raphael/raphael.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/morris/morris.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/gauge/gauge.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/snap-svg/snap.svg.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/liquid-meter/liquid.meter.js"></script> 
		<script src="<?php echo base_url();?>assets/vendor/jqvmap/jquery.vmap.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script> 
		<script src="<?php echo base_url();?>assets/javascripts/jquery.mask.min.js"></script>
		<script src="<?php echo base_url();?>assets/javascripts/web.js"></script>
		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo base_url();?>assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="<?php echo base_url();?>assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="<?php echo base_url();?>assets/javascripts/theme.init.js"></script>


		<!-- Examples -->
		<!-- <script src="<?php echo base_url();?>assets/javascripts/dashboard/examples.dashboard.js"></script> -->
	</body>
</html>