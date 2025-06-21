<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<div class="cursor"></div>

    <title>@yield('title','Tech Hive Web')</title>
		<!-- Tell the browser to be responsive to screen width -->
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<meta name="description" content="">
		 <!-- Place favicon.ico in the root directory -->
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('template/assets/img/logo/favicons.png')}}">

		<!-- CSS here -->
		<link rel="stylesheet" href="{{asset('template/assets/css/bootstrap.css')}}">
		<link rel="stylesheet" href="{{asset('template/assets/css/animate.css')}}">
		<link rel="stylesheet" href="{{asset('template/assets/css/swiper-bundle.css')}}">
		<link rel="stylesheet" href="{{asset('template/assets/css/slick.css')}}">
		<link rel="stylesheet" href="{{asset('template/assets/css/magnific-popup.css')}}">
		<link rel="stylesheet" href="{{asset('template/assets/css/font-awesome-pro.css')}}">
		<link rel="stylesheet" href="{{asset('template/assets/css/flaticon_tecza.css')}}">
		<link rel="stylesheet" href="{{asset('template/assets/css/spacing.css')}}">
		<link rel="stylesheet" href="{{asset('template/assets/css/main.css')}}">
		@stack('after-css')
	</head>
	
	<body>
		@include('layout.header')
		@yield('content')
		@include('layout.footer')
		
	<!-- JS here -->
    <script src="{{asset('template/assets/js/vendor/jquery.js')}}"></script>
    <script src="{{asset('template/assets/js/vendor/waypoints.js')}}"></script>
    <script src="{{asset('template/assets/js/bootstrap-bundle.js')}}"></script>
    <script src="{{asset('template/assets/js/swiper-bundle.js')}}"></script>
    <script src="{{asset('template/assets/js/slick.js')}}"></script>
    <script src="{{asset('template/assets/js/range-slider.js')}}"></script>
    <script src="{{asset('template/assets/js/magnific-popup.js')}}"></script>
    <script src="{{asset('template/assets/js/nice-select.js')}}"></script>
    <script src="{{asset('template/assets/js/purecounter.js')}}"></script>
    <script src="{{asset('template/assets/js/wow.js')}}"></script>
    <script src="{{asset('template/assets/js/isotope-pkgd.js')}}"></script>
    <script src="{{asset('template/assets/js/imagesloaded-pkgd.js')}}"></script>
    <script src="{{asset('template/assets/js/ajax-form.js')}}"></script>
    <script src="{{asset('template/assets/js/slider-active.js')}}"></script>
    <script src="{{asset('template/assets/js/main.js')}}"></script>
		<script>
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
	</script>
		@stack('after-js')
	</body>
</html>
