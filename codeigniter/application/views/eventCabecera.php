<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
	<script
	src="https://code.jquery.com/jquery-3.3.1.js"
	integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
	crossorigin="anonymous"></script>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	<link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.1/flatly/bootstrap.min.css" rel="stylesheet" integrity="sha384-WuViQmTamrPyvMFZjf8te7HpKtdxuzV/HX1yG26a0d8yieIBr+beDf1ME99iX1cM" crossorigin="anonymous">
	<script
	src="https://code.jquery.com/jquery-3.3.1.js"
	integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
	crossorigin="anonymous"></script>
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/master.css"> 
	<script type = 'text/javascript' src = "<?php echo base_url(); ?>js/main.js"></script> 
</head>

<body>
<div class="container text-center">
	<h1>EVENTULEX</h1>      
    <h3>Tus entradas sin esperas</h3>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="/eventulex/">Eventulex</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="/eventulexv2/codeigniter">Eventos <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/eventulexv2/codeigniter/index.php/eventulex/quienes_somos">Quienes somos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/eventulexv2/codeigniter/como_funcionamos">¿Cómo funcionamos?</a>
				</li>

				<!--Cambios en los enlaces-->
				<li class="nav-item">
					<a class="nav-link login" href="/eventulexv2/codeigniter/login">Login</a>
				</li>
			</ul>
		</div>
	</nav>