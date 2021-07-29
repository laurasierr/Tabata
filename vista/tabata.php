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
		<link rel="stylesheet" href="css/style-tabata.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="css/estilo.css">
		<link rel="icon" href="img/icono.png">
	</head>

	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-dark">
			<div class="container-fluid">
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
					<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
						<ul class="navbar-nav me-auto mb-2 mb-lg-0">
							<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="tabata.php" style="color:white">Crear Tabata</a>
							</li>
							<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="tabatasGuardadas.php" style="color:white">Tabatas Guardadas</a>
							</li>
							<li class="nav-item">
							<a class="nav-link active" href="#" style="color:white">Ejercicios</a>
							</li>
							<li class="nav-item">
								<a class="nav-link active" href="../controlador/accion/act_logout.php" style="color:white">Cerrar sesion</a>
							</li>
						</ul>
					</div>
			</div>
		</nav>
			
		<div class="form-signin">
			<div id="crear"> <h4>CONFIGURA TU TABATA</h4> </div>
				<div class="main-container"> 
					<div class="row">
						<div id="container1" class="col-md-10">
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
							</div>	
						</div>
						<div id="container2" class="col-md-2">
							<div class="buttons-container">
								<div class="center-container">
									<div class="serie"></div>
									<div class="timer"></div>
									<div class="current"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="row" style="width:70%">
						<div class="col-md-3">
							<button type="button" class="btn-lg iniciar btn btn-outline-success">Iniciar</button>
						</div>
						<div class="col-md-3">
							<button type="button" class="btn-lg pausar btn btn-outline-primary" disabled>Pausar</button>
						</div>
						<div class="col-md-3">
							<button type="button" class="btn-lg detener btn btn-outline-danger" disabled>Detener</button>
						</div>
						<div class="col-md-3">
							<button onclick="abrirSweetAlert()" type="button" class="btn-lg guardar btn btn-outline-info">Guardar Tabata</button>
						</div>
					</div>	
				</div>
			</div>
		</div>
			
		<footer id="footer" class="page-footer font-small">
			<div class="footer-copyright text-center py-3">Realizado por: Laura Sierra García - Jose Martinez - Gerardo Mendoza | Programación web 2021-1</div>
		</footer>

		<script src="js/librerias/popper.min.js"></script>
		<script src="js/librerias/jquery-3.3.1.min.js"></script>
		<script src="js/librerias/bootstrap.bundle.min.js"></script>
		<script src="js/librerias/sweetalert2.js"></script>
		<script src="js/logica/tabata.js"></script>

	</body>
</html>
