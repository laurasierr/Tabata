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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style-login.css">	
	<link href="css/gijgo.css" rel="stylesheet" type="text/css" />
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
<form class="form-signin" method="post" action="../controlador/accion/act_registrarUsuario.php">
	<h1 class="h3 mb-3 font-weight-normal" style="color:white;">Registrar Usuario</h1>
	<div style="text-align:left"><span id="registro" style="color:red;">*Este campo es obligatorio</span></div>
	<div class="form-group">
		<label for="nombre" class="sr-only">Nombre Completo</label>
		<input name="nombre" type="text" id="nombre" class="form-control" placeholder="Nombre Completo" autofocus>
	</div>
	<div style="text-align:left"><span id="registro" style="color:red;">*Este campo es obligatorio</span></div>
	<div class="form-group">
		<label for="correo" class="sr-only">Correo</label>
		<input name="correo" type="email" id="correo" class="form-control" placeholder="Correo (alguien@dominio.com)" autofocus> 
	</div>
	<div style="text-align:left"><span id="registro" style="color:red;">*Este campo es obligatorio</span></div>
	<div class="form-group">
		<label for="password" class="sr-only">Contrase??a</label>
		<input name="password" type="password" id="password" class="form-control" placeholder="Contrase??a" >
	</div>
	<div style="text-align:left"><span id="registro" style="color:red;">*Este campo es obligatorio</span></div>
	<div class="form-group">
		<label for="telefono" class="sr-only">Telefono</label>
		<input name="telefono" type="number" id="telefono" class="form-control" placeholder="Telefono" >
	</div>
	<div style="text-align:left"><span id="registro" style="color:red;">*Este campo es obligatorio</span></div>
	<div class="form-group">
		<label for="fechanac" class="sr-only">Fecha de Nacimiento</label>
		<input name="fechanac" id="fechanac" class="form-control" placeholder="Fecha de Nacimiento (AAAA-MM-DD)" >
	</div>
	<div style="text-align:left"><span id="registro" style="color:red;">*Este campo es obligatorio</span></div>
	<div class="form-group">
		<label for="sexo" class="sr-only">Sexo</label>
		<input name="sexo" type="text" id="sexo" class="form-control" placeholder="Femenino (F), Masculino (M)" >
	</div>
	<div style="text-align:left"><span id="registro" style="color:red;">*Este campo es obligatorio</span></div>
	<div class="form-group">
		<label for="peso" class="sr-only">Peso</label>
		<input name="peso" type="text" id="peso" class="form-control" placeholder="Peso en KG" >
	</div>
	<div class="checkbox mb-3">
	</div>
	<button class="btn btn-lg btn-primary btn-block" type="submit">
		<h8>Registrar</h8>
	</button><br>
<input type="button" class="btn btn-lg btn-primary btn-block" onclick="location.href = 'login.php'" value="Iniciar Sesi??n">	
</form>

	<footer id="footer" class="page-footer font-small">
        <div class="footer-copyright text-center py-3">Realizado por: Laura Sierra Garc??a - Jose Martinez - Gerardo Mendoza | Programaci??n web 2021-1</div>
    </footer>

	<script src="js/librerias/jquery-3.3.1.min.js"></script>
	<script src="js/librerias/bootstrap.min.js" ></script>
	<script src="js/librerias/bootstrap.bundle.min.js"></script>
	<script src="js/librerias/sweetalert.min.js"></script>
	<script src="js/librerias/gijgo.min.js" ></script>
	<script src="js/logica/registrar.js"></script>	
</body>
</html>