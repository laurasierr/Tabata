
$(document).ready(function() { 
    //insertarEventoCerrarSesion()
})

function insertarEventoCerrarSesion(){
    $("#cerrarsesion").on("click",()=>{
        localStorage.removeItem("sesion")
        localStorage.removeItem("estudiantes")
		window.location.replace("index.html")
    })
}