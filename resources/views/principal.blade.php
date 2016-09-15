<!DOCTYPE html>
<html>
<head>
	<title>Ingenieria web</title>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}">
</head>
<body>
	<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{{url('/inicio')}}">GP</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar">
			<ul class="nav navbar-nav">
				<li>
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
						Menu
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="">Opcion 1</a>
						</li>
						<li>
							<a href="">Opcion 2</a>
						</li>
						<li>
							<a href="">Opcion 3</a>
						</li>
						<li role="separator" class="divider"></li>
						<li>
							<a href="">Opcion 4</a>
						</li>
					</ul>	
				</li>
			</ul>
		</div>
	</div>
</nav>
	<div class="container">
		<div class="row">
			<hr>
			@yield('encabezado')
			<hr>
			@yield('contenido')
		</div>
	</div>
	<footer>
		<hr>
		<div class="text-center">Ingenieria web &copy; 2016</div>
	</footer>
	<script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
</body>
</html>