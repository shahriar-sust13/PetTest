<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pet World</title>

	<link href="{{ asset('/css/layout.css') }}" rel="stylesheet">

	<link href='http://fonts.googleapis.com/css?family=Roboto:400,500, 300' rel='stylesheet' type='text/css'>

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<![endif]-->
</head>
<body>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/js/bootstrap-select.min.js"></script>

	<div class="main-wrapper">

		@include('header')

		<div class="body-wrapper">
			@yield('content')
		</div>

		<div class="foot-wrapper">
			@include('footer')
		</div>
		
	</div>

		<!-- Scripts -->

</body>
</html>