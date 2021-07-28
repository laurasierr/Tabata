<?php
//Se obtiene la sesión existente
session_start();

//Si no existe la sesion con el nombre ID_USUARIO, se redirige
//a la vista login.php

if (!isset($_SESSION['ID_USUARIO'])) {
    header("Location: login.php");
}

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tabata</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/estiloasistencia.css">
	<link rel="stylesheet" href="css/style.css">	
</head>

<body>
	<header>
		<div class="toolbar">
			<a href="../controlador/accion/act_logout.php" id="cerrarsesion">Cerrar Sesión</a>
		</div>
	</header>
		
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Tabatas Guardadas</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Ejercicios</a>
				</li>
			</ul>
		</div>
	</nav>

	<span id="crear">Crear Tabata</span>
	
	<div class="main-container">
		<div class="range-container">
			<div class="row-container">
				<span class="text preparation">Preparación:</span>
				<input class="range preparation" type="range">
				<span class="value preparation"></span>
			</div>
			<div class="row-container">
				<span class="text activity">Actividad:</span>
				<input class="range activity" type="range">
				<span class="value activity"></span>
			</div>
			<div class="row-container">
				<span class="text rest">Descanso:</span>
				<input class="range rest" type="range">
				<span class="value rest"></span>
			</div>
			<div class="row-container">
				<span class="text rounds">Series:</span>
				<input class="range rounds" type="range">
				<span class="value rounds"></span>
			</div>
			<div class="row-container">
				<span class="text rounds">Rondas:</span>
				<input class="range rounds" type="range">
				<span class="value rounds"></span>
			</div>
			<div class="row-container">
				<button type="button" class="btn btn-outline-success">Iniciar</button>
				<button type="button" class="btn btn-outline-primary">Pausar</button>
				<button type="button" class="btn btn-outline-danger">Detener</button>
				<button type="button" class="btn btn-outline-info">Guardar Tabata</button>
			</div>
		</div>
		
		<div class="buttons-container">
			<div class="center-container">
					<div class="timer"></div>
					<div class="current"></div>
			</div>
		</div>		
	</div>

	

	<script src="js/librerias/jquery-3.3.1.min.js"></script>
	<script src="js/librerias/bootstrap.min.js" ></script>
	<script src="js/librerias/bootstrap.bundle.min.js"></script>
	<script src="js/librerias/sweetalert2.js"></script>
	<script src="js/logica/asistencia.js"></script>
	<script src="js/logica/tabata.js"></script>

</body>
</html>
