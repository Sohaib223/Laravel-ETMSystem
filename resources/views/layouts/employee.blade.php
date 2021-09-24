<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> Employee & Task Management System </title>

		<!-- Favicon Icon -->
		<link rel="icon" type="image/png" href="{{asset('assets/images/favicon.png')}}">

		<link rel="stylesheet" type="text/css" href="{{asset('assets/lib/bootstrap/dist/css/bootstrap.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('assets/lib/toastr/toastr.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('assets/lib/sweet-modal/dist/min/jquery.sweet-modal.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('assets/lib/components-font-awesome/css/font-awesome.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('assets/lib/animate/animate.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('assets/lib/scrollbar/jquery.mCustomScrollbar.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/prism/themes/prism-okaidia.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('assets/lib/dropzone/dist/min/dropzone.min.css')}}">
		<!-- Page Loader -->
		<link rel="stylesheet" type="text/css" href="{{asset('assets/lib/pace/themes/black/pace-theme-loading-bar.css')}}">

		<!-- ICheckBox -->
		<link rel="stylesheet" type="text/css" href="{{asset('assets/lib/iCheck/skins/all.css')}}">

		<!-- Jasny -->
		<link rel="stylesheet" type="text/css" href="{{asset('assets/lib/jasny-bootstrap/dist/css/jasny-bootstrap.min.css')}}">

		<!-- Select2 -->
		<link rel="stylesheet" type="text/css" href="{{asset('assets/lib/select2/dist/css/select2.min.css')}}">

		<!-- Seletize -->
		<link rel="stylesheet" type="text/css" href="{{asset('assets/lib/selectize/dist/css/selectize.css')}}">

		<!-- Date & Time Picker -->
		<link rel="stylesheet" type="text/css" href="{{asset('assets/lib/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('assets/lib/bootstrap-daterangepicker/daterangepicker.css')}}">

		<!-- Color Picker -->
		<link rel="stylesheet" type="text/css" href="{{asset('assets/lib/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}">

		<!-- Cropper -->
		<link rel="stylesheet" type="text/css" href="{{asset('assets/lib/cropper/dist/cropper.min.css')}}">
 
		<!-- Clock Picker -->
		<link rel="stylesheet" type="text/css" href="lib/clockpicker/dist/bootstrap-clockpicker.min.css')}}">
		<link rel="styleshseet" type="text/css" href="lib/clockpicker/dist/jquery-clockpicker.min.css')}}">

		<!-- Custom Icheck theme checkbox -->
		<link rel="stylesheet" href="{{asset('assets/vendor/icheck/icheck-theme.css')}}">

		<!-- Bootstrap-switch -->
		<link rel="stylesheet" href="{{asset('assets/lib/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('assets/lib/bootstrap-fileinput/css/fileinput.min.css')}}">
		
		<link href="{{asset('assets/datatable/jquery.dataTables.min.css')}}" rel="stylesheet">
		
		<!-- Custom css -->
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="{{asset('assets/dist/css/app.min.css')}}">
		<script type="text/javascript" src="{{asset('assets/lib/jquery/dist/jquery.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/lib/bootstrap/dist/js/bootstrap.min.js')}}"></script>
		
		<!-- DataTables CSS -->
		<link href="css/addons/datatables.min.css" rel="stylesheet">

		<!-- DataTables JS -->
		<script href="js/addons/datatables.min.js" rel="stylesheet"></script>

		<!-- DataTables Select CSS -->
		<link href="css/addons/datatables-select.min.css" rel="stylesheet">
		
		<!-- DataTables Select JS -->
		<script href="js/addons/datatables-select.min.js" rel="stylesheet"></script>
	
	</head>
	<body class="strawberry-theme">

    <div class="wrapper">
            @include('includes.employeeheader')

			<!-- Footer -->
			<div class="row no-margin">
							<div class="col-md-12">
								<div class="footer">
									<div class="pull-left padding-sm margin-t-xs">
										&copy; Copyright 2019 Sohaib Siddiqui
									</div>
									<div class="pull-right padding-sm"><img src="" alt=""></div>
								</div>
			</div>

</div>

<!-- Scroll top -->
<div>
	<a href="javascript:void(0);" class="scrollToTop" title="Scroll to Top"><span></span></a>
</div>
<!-- Header -->
	
	</div>
		<!-- Plugin javascript -->
		<script type="text/javascript" src="{{asset('assets/lib/toastr/toastr.min.js')}}"></script>		
		<script type="text/javascript" src="{{asset('assets/lib/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/vendor/animate.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/vendor/complexify/jquery.complexify.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/vendor/prism/prism.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/lib/sweet-modal/dist/min/jquery.sweet-modal.min.js')}}"></script>
		<script src="{{asset('assets/datatable/jquery.dataTables.min.js')}}"></script>
		
		<!-- Page Loader -->
		<script type="text/javascript" src="{{asset('assets/lib/pace/pace.min.js')}}"></script>

		<!-- IcheckBox -->
		<script type="text/javascript" src="{{asset('assets/lib/iCheck/icheck.min.js')}}"></script>

		<!-- Jasny -->
		<script type="text/javascript" src="{{asset('assets/lib/jasny-bootstrap/dist/js/jasny-bootstrap.min.js')}}"></script>

		<!-- Select2 -->
		<script type="text/javascript" src="{{asset('assets/lib/select2/dist/js/select2.full.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/lib/select2/dist/js/select2.min.js')}}"></script>

		<!-- Movement -->
		<script type="text/javascript" src="{{asset('assets/lib/moment/min/moment.min.js')}}"></script>

		<!-- Date & Time Picker -->
		<script type="text/javascript" src="{{asset('assets/lib/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/lib/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

		<!-- Color Picker -->
		<script type="text/javascript" src="{{asset('assets/lib/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>

		<!-- Cropper -->
		<script type="text/javascript" src="{{asset('assets/lib/cropper/dist/cropper.js')}}"></script>

		<!-- Selectize -->
		<script type="text/javascript" src="{{asset('assets/lib/selectize/dist/js/standalone/selectize.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/lib/selectize/dist/js/selectize.min.js')}}"></script>

		<!-- Knob -->
		<script type="text/javascript" src="{{asset('assets/vendor/jquery.knob.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/lib/dropzone/dist/min/dropzone.min.js')}}"></script>

		<!-- Clock Picker -->
		<script type="text/javascript" src="{{asset('assets/lib/clockpicker/dist/bootstrap-clockpicker.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/lib/clockpicker/dist/jquery-clockpicker.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/lib/bootstrap-fileinput/js/plugins/canvas-to-blob.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/lib/bootstrap-fileinput/js/plugins/sortable.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/lib/bootstrap-fileinput/js/plugins/purify.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/lib/bootstrap-fileinput/js/fileinput.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/dist/js/file-uploader.min.js')}}"></script>
		
		<!-- Peity Charts -->
		<script type="text/javascript" src="{{asset('assets/lib/peity/jquery.peity.min.js')}}"></script>

		<!-- Bootstrap-switch -->
		<script type="text/javascript" src="{{asset('assets/lib/bootstrap-switch/dist/js/bootstrap-switch.min.js')}}"></script>

		<!-- Custom javascript -->
		<script type="text/javascript" src="{{asset('assets/lib/bootstrap/dist/js/bootstrap.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/dist/js/material-cards.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/dist/js/cropper.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/dist/js/form-advance-element.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/dist/js/bootstrap-switch-config.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/dist/js/sidebar.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/dist/js/sidebar-component-config.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/dist/js/navbar.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/dist/js/components.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/dist/js/scroll-top.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/dist/js/sweetmodal.min.js')}}"></script>
	</body>

</html>


