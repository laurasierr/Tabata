
$(document).ready(function() { 
	//validarLogin()
})

function validarLogin(){

	$("#iniciarsesion").on("click",() => {
		let user 	 = $("#user").val()  
		let password = $("#password").val()

		if(user === credenciales.admin.nombre 
			&& password === credenciales.admin.clave){
				window.location.replace("asistencia.html")
				localStorage.setItem("sesion", user)

		}else{
			mostrarAlertaErrorCredenciales()
		}
	})
}

function mostrarAlertaErrorCredenciales(){
	swal({
		title: "Usuario o contraseña incorrecta",
		text: "Verifique los datos ingresados",
		icon: "error",button: "Aceptar!",
	})
}

