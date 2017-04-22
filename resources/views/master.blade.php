<!DOCTYPE html>
<html lang=en>
<head>
	<meta charset=utf-8 />
	<title>shop</title>
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
			<div class="col-md-3">
				<div class="collapse navbar-collapse sidebar-menu" id="bs-example-navbar-collapse-2">
					<ul class="nav nav-pills nav-stacked">
						<li><p class="title-menu">ALL DEPARTMENT</p></li>
						<li class="bg-menu"><a href="#">Menu 1</a></li>
						<li class="bg-menu"><a href="#">Menu 2</a>
							<ul class="nav nav-pills nav-stacked sub-menu col-md-12">
								<li class="bg-menu"><a href="#">Menu 2a</a></li>
								<li class="bg-menu"><a href="#">Menu 2b</a></li>
								<li class="bg-menu"><a href="#">Menu 2c</a></li>
							</ul>
						</li>
						<li class="bg-menu"><a href="#">Menu 3</a></li>
						<li class="bg-menu"><a href="#">Menu 3</a></li>
						<li class="bg-menu"><a href="#">Menu 3</a></li>
						<li class="bg-menu"><a href="#">Menu 3</a></li>
						<li class="bg-menu"><a href="#">Menu 3</a></li>
					</ul>
				</div>
			</div>
			@yield('content')
		</div><!--end content-->
	</div>
</div>
</div>
@include('user.footer')
</body>
<html>