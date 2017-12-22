<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title>Polígono cursos</title>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
			  crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav" aria-expanded="">
				<span class="sr-only">Toggle navigation</span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
      		</button>
			<a class="navbar-brand" href="#">Polígono Curso</a>
		</div>
		<div class="collapse navbar-collapse" id="nav">

		</div>
	</div>
</nav>
<div class="container">
	<div class="col-md-3">
		@include('includes.sidebar')
	</div>
	<div class="col-md-9">
		@yield('content')
	</div>
</div>
</body>
</html>