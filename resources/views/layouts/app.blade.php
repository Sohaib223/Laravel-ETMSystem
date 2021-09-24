<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

		<!-- Favicon Icon -->
		<link rel="icon" type="image/png" href="images/favicon.png">

		<!-- Bootstrap & jQuery -->
		<link rel="stylesheet" type="text/css" href="{{asset('assets/lib/bootstrap/dist/css/bootstrap.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('assets/lib/components-font-awesome/css/font-awesome.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('assets/lib/animate/animate.min.css')}}">

		<!-- Page Loader -->
		<link rel="stylesheet" type="text/css" href="{{asset('assets/lib/pace/themes/black/pace-theme-loading-bar.css')}}">

		<!-- ICheckBox -->
		<link rel="stylesheet" type="text/css" href="{{asset('assets/lib/iCheck/skins/all.css')}}">

		<!-- Custom Icheck theme checkbox -->
		<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/icheck/icheck-theme.css')}}">

		<!-- Custom css -->
		<link rel="stylesheet" type="text/css" href="{{asset('assets/dist/css/app.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('assets/dist/css/authenticate.min.css')}}">

		<!-- Fonts -->
		<link rel="stylesheet" type="text/css" href="{{asset('assets/https://fonts.googleapis.com/css?family=Raleway')}}" />
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet"></head>
<body class="strawberry-theme">
    <div id="app">
    <div class="auth-page">    
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    </div><!-- Plugin javascript -->
		<script type="text/javascript" src="{{asset('assets/lib/jquery/dist/jquery.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/lib/toastr/toastr.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/lib/bootstrap/dist/js/bootstrap.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/lib/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/vendor/animate.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/vendor/prism/prism.js')}}"></script>

		<!-- Page Loader -->
		<script type="text/javascript" src="{{asset('assets/lib/pace/pace.min.js')}}"></script>

		<!-- IcheckBox -->
		<script type="text/javascript" src="{{asset('assets/lib/iCheck/icheck.min.js')}}"></script>

		<!-- Peity Charts -->
		<script type="text/javascript" src="{{asset('assets/lib/peity/jquery.peity.min.js')}}"></script>

		<!-- Custom javascript -->
		<script type="text/javascript" src="{{asset('assets/dist/js/toastr.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/dist/js/sidebar.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/dist/js/sidebar-component-config.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/dist/js/navbar.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/dist/js/components.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/dist/js/scroll-top.min.js')}}"></script>

</body>
</html>
