<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Tabata</title>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-grid.min.css">
		<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
		<link rel="stylesheet" href="css/style-login.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="icon" href="img/icono.png">
	</head>

	<body class="text-center">
	<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <a class="navbar-brand" style="color: white;"> <img class="imagen1" src="img/icono.png"> Entrenamiento Tabata</a>
            <div class="collapse navbar-collapse justify-content-sm-end" id="collapsibleNavId">
                <ul class="navbar-nav mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="https://github.com/laurasierr/Tabata"><i class="fa fa-github" aria-hidden="true"></i>  Proyecto en GitHub<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
  	<!-- Este es el formulario que enviará el correo y password a
 	la accion act_login.php del controlador cuando se oprima el boton Iniciar Sesión -->
	<form class="form-signin" method="post" action="../controlador/accion/act_login.php">
	<h1 class="h3 mb-3 font-weight-normal" style="color:white;">Iniciar Sesión</h1>
	<label for="user" class="sr-only">Usuario</label>
	<!-- El atributo name es muy importante debido a que en la accion del
	  controlador que lo recibe va a tener el mismo nombre para poder identificarlo
	Por ejemplo este input tiene el name='correo' y en el controlador se va a 
	obtener este valor así $correo = $_POST['correo'], en el caso que se este 
	enviando el formulario por el metodo POST, si fuera por el metodo GET, 
	sería así $correo = $_GET['correo']-->
	<input name="correo" type="text" id="user" class="form-control" placeholder="Correo" autofocus><br>
	<label for="password" class="sr-only">Contraseña</label>
	<input name="password" type="password" id="password" class="form-control" placeholder="Contraseña" >
	<div class="checkbox mb-3">
	</div>
	<button class="btn btn-lg btn-primary btn-block" type="submit">
		<a><h8>Iniciar Sesión</h8></a>
	</button><br>
	<input type="button" class="btn btn-lg btn-primary btn-block" onclick="location.href = 'registrar.php'" value="Registrar">	
	</form>
	<footer id="footer" class="page-footer font-small">
        <div class="footer-copyright text-center py-3">Realizado por: Laura Sierra García - Jose Martinez - Gerardo Mendoza | Programación web 2021-1</div>
    </footer>
	<script src="js/librerias/jquery-3.3.1.min.js"></script>
	<script src="js/librerias/bootstrap.min.js" ></script>
	<script src="js/librerias/bootstrap.bundle.min.js"></script>
	<script src="js/librerias/sweetalert.min.js"></script>
</body>
</html>
