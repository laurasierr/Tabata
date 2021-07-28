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
	<link rel="stylesheet" href="css/estilotabata.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" href="img/icono.png">
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="color:black">
		<div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="tabata.php">Crear Tabata <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="tabatasGuardadas.php">Lista De Tabata</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Ejercicios</a>
				</li>
			</ul>
		</div>
		
		<div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
		
		<ul class="navbar-nav ml-auto">
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<?php  echo $_SESSION['NOMBRE_USUARIO'] ?>
			</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="../controlador/accion/act_logout.php">Cerrar sesion</a>
			</div>
		</li>
        </ul>
    </div>

	</nav>

	<div id="crear"> CONFIGURACION DE TABATA </div>
	<div></div>
	
	<div class="main-container">
		<div class="range-container">
			<div class="row-container">
				<span class="text preparation">Preparación:</span>
				<input id="preparation" class="range preparation" type="range">
				<span class="value preparation"></span>
			</div>
			<div class="row-container">
				<span class="text activity">Actividad:</span>
				<input id="activity" class="range activity" type="range">
				<span class="value activity"></span>
			</div>
			<div class="row-container">
				<span class="text rest">Descanso:</span>
				<input id="rest" class="range rest" type="range">
				<span class="value rest"></span>
			</div>
			<div class="row-container">
				<span class="text series">Series:</span>
				<input id="series" class="range series" type="range">
				<span class="value series"></span>
			</div>
			<div class="row-container">
				<span class="text rounds">Rondas:</span>
				<input id="rounds" class="range rounds" type="range">
				<span class="value rounds"></span>
			</div>	
			<div class="row-container">
				<p id="tiempoTotal"></p>
			</div>
			<div class="row-container">
				<button type="button" class="btn-lg iniciar btn btn-outline-success">Iniciar</button>
				<button type="button" class="ml-3 btn-lg pausar btn btn-outline-primary" disabled>Pausar</button>
				<button type="button" class="ml-3 btn-lg detener btn btn-outline-danger" disabled>Detener</button>
				<button onclick="abrirSweetAlert()" type="button" class="ml-3 btn-lg guardar btn btn-outline-info">Guardar Tabata</button>
			</div>
		</div>
		
		<div class="buttons-container">
		
			<div class="center-container">
					<div class="serie" style="font-size:30px; color:white;"></div>
					<div class="timer"></div>
					<div class="current"></div>
			</div>
		</div>		
	</div>

	
    <script src="js/librerias/popper.min.js"></script>
	<script src="js/librerias/jquery-3.3.1.min.js"></script>
	<script src="js/librerias/bootstrap.bundle.min.js"></script>
	<script src="js/librerias/sweetalert2.js"></script>
	<script src="js/logica/tabata.js"></script>

</body>
</html>
