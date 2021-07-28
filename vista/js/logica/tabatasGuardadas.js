
$(document).ready(function() { 
	mostrarTabatasGuardadas()
})


function mostrarTabatasGuardadas(){
    
    var http = new XMLHttpRequest();
    var url = '../controlador/accion/act_verTabatasGuardadas.php';
    
    http.open('POST', url, true);
   
    //Send the proper header information along with the request
    http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
   
    http.onreadystatechange = function() {//Call a function when the state changes.
        if(http.readyState == 4 && http.status == 200) {
            var tabatas = JSON.parse(this.responseText);
            
            for(let i=0;i<tabatas.length;i++){
                $( ".list-group" ).append("<a href='tabata.php?preparacion="+tabatas[i].tPreparacion+"&actividad="+tabatas[i].tActividad+"&descanso="+tabatas[i].tDescanso+"&series="+tabatas[i].numSeries+"&rondas="+tabatas[i].numRondas+"&nombre="+tabatas[i].nombre+"'"
                + "class='mt-1 list-group-item list-group-item-action flex-column align-items-start'>"
                +"<div class='d-flex w-100 justify-content-between'>"
                +"<h5 class='mb-1'> Nombre tabata: "+tabatas[i].nombre+"</small></div>"
                +"<p class='mb-1'>Preparación: "+tabatas[i].tPreparacion+"</p>"
                +"<p class='mb-1'>Actividad "+tabatas[i].tActividad+"</p>"
                +"<p class='mb-1'>Descanso: "+tabatas[i].tDescanso+"</p>"
                +"<p class='mb-1'>Series: "+tabatas[i].numSeries+"</p>"
                +"<p class='mb-1'>Rondas: "+tabatas[i].numRondas+"</p>"
                +"</a>");
            }

        }
    }
    http.send();

}

