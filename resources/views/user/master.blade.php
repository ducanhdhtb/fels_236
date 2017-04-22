<!DOCTYPE html>
<html lang=en>
<head>
	<meta charset=utf-8 />
	<title>shop -ghostnight</title>
	<base href="{{ asset('') }} ">
	<link rel="stylesheet" href="user_asset/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="user_asset/css/normalize.css"/>
	<script src="user_asset/js/jquery-2.2.2.js"></script>
	<script src="user_asset/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="user_asset/css/style.css" />
</head>
<body>
	@include('user.header')
	<div class="container">
		<div class="row">
		@include('user.menu')
			@yield('content')
		</div><!--end content-->
	</div>
</div>
</div>
@include('user.footer')
</body>
<html>