<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{asset('Frontend/css/style.css')}}">
	<!-- <link rel="stylesheet" href="{{asset('Frontend/css/bootstrap.min.css')}}"> -->
	<link rel="stylesheet" href="{{asset('Frontend/css/swiper-bundle.min.css')}}">
	<link href='https://unpkg.com/boxicons@2.1.0/css/boxicons.min.css' rel='stylesheet'>
	<script src="{{asset('Frontend/js/bootstrap.min.js')}}"></script>
	<title>Document</title>
	
	
	<!-- <link rel="stylesheet" href="/font-icon/themify-icons-font (1)/themify-icons/themify-icons.css"> -->
</head>

<body>
	<!--header-->
	<header>
		@include('frontend.layouts.header')
	</header>
	

	<div id="main">
		@yield('content')
	</div>

	@include('frontend.layouts.footer')
</body>
<!--link-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="{{ asset('frontend/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('frontend/js/main.js') }}"></script>
</html>