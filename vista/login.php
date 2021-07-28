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
	<link rel="stylesheet" href="css/EstiloLogin.css">	
	<link rel="icon" href="img/icono.png">
</head>

<body class="text-center">
  <!-- Este es el formulario que enviará el correo y password a
  la accion act_login.php del controlador cuando se oprima el boton Iniciar Sesión -->
	<form class="form-signin" method="post" action="../controlador/accion/act_login.php">
	<h1 class="h3 mb-3 font-weight-normal" style="color:white;">Login</h1>
	<label for="user" class="sr-only">Usuario</label>
	<!-- El atributo name es muy importante debido a que en la accion del
	  controlador que lo recibe va a tener el mismo nombre para poder identificarlo
	Por ejemplo este input tiene el name='correo' y en el controlador se va a 
	obtener este valor así $correo = $_POST['correo'], en el caso que se este 
	enviando el formulario por el metodo POST, si fuera por el metodo GET, 
	sería así $correo = $_GET['correo']-->
	<input name="correo" type="text" id="user" class="form-control" placeholder="Correo" autofocus>
	<label for="password" class="sr-only">Contraseña</label>
	<input name="password" type="password" id="password" class="form-control" placeholder="Contraseña" >
	<div class="checkbox mb-3">
	</div>
	<button class="btn btn-lg btn-info btn-block" type="submit">
		<a><h8>Iniciar Sesión</h8></a>
	</button>
	
	<input type="button" class="btn btn-lg btn-info btn-block" onclick="location.href = 'registrar.php'" value="Registrar">	

</form>

	<script src="js/librerias/jquery-3.3.1.min.js"></script>
	<script src="js/librerias/bootstrap.min.js" ></script>
	<script src="js/librerias/bootstrap.bundle.min.js"></script>
	<script src="js/librerias/sweetalert.min.js"></script>
</body>
</html>
