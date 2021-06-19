<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="./font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="./bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="./styles.css">
</head>
<body>

@include('partial.menu');

<div class="main" id="main" >
	</nav>
	@yield('content')
</div>

<!-- Footer -->
<footer class="bg-dark navbar fixed-bottom footer" style="background-color:blue">
		<span class="col-lg-12 col-md-12 col-sm-12">{{ config('app.name') }} - 2021 Version 1.0.0</span>
</footer>
<!-- Footer -->
</body>
</html>
