<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registro</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/EstiloLogin.css">	
	<link href="css/gijgo.css" rel="stylesheet" type="text/css" />
	<link rel="icon" href="img/icono.png">

</head>

<body class="text-center">
 
<form class="form-signin" method="post" action="../controlador/accion/act_registrarUsuario.php">
	<h1 class="h3 mb-3 font-weight-normal" style="color:white;">Registro</h1>
	<label for="nombre" class="sr-only">Nombre Completo</label>
	<input name="nombre" type="text" id="nombre" class="form-control" placeholder="Nombre Completo" autofocus>
	<label for="correo" class="sr-only">Correo</label>
	<input name="correo" type="email" id="correo" class="form-control" placeholder="Correo" autofocus>
	<label for="password" class="sr-only">Contraseña</label>
	<input name="password" type="password" id="password" class="form-control" placeholder="Contraseña" >
	<label for="telefono" class="sr-only">Telefono</label>
	<input name="telefono" type="number" id="telefono" class="form-control" placeholder="Telefono" >
	<label for="fechanac" class="sr-only">Fecha de Nacimiento</label>
	<input name="fechanac" id="fechanac" class="form-control" placeholder="Fecha de Nacimiento (AAAA-MM-DD)" >
	<label for="sexo" class="sr-only">Sexo</label>
	<input name="sexo" type="text" id="sexo" class="form-control" placeholder="Femenino (F), Masculino (M)" >
	<label for="peso" class="sr-only">Peso</label>
	<input name="peso" type="text" id="peso" class="form-control" placeholder="Peso en KG" >
    
	<div class="checkbox mb-3">
	</div>
	<button class="btn btn-lg btn-primary btn-block" type="submit">
		<h8>Registrar</h8>
	</button>

		
	<input type="button" class="btn btn-lg btn-secondary btn-block" onclick="location.href = 'login.php'" value="Iniciar Sesión">	

	
</form>

	<script src="js/librerias/jquery-3.3.1.min.js"></script>
	<script src="js/librerias/bootstrap.min.js" ></script>
	<script src="js/librerias/bootstrap.bundle.min.js"></script>
	<script src="js/librerias/sweetalert.min.js"></script>
	<script src="js/librerias/gijgo.min.js" ></script>
	<script src="js/logica/registrar.js"></script>
	
</body>
</html>