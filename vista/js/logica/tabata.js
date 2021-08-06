let array = Array.from({length: 20}, (v, k) => (k+1)*2);
let pos = 0;

let tiempoTotalIntervalo, tiempoTotal;

let arrPeriods = [], arrPeriodsAux = [], index = 0, i=0;


let preparationInput = document.querySelector('input.range.preparation'),
    activityInput    = document.querySelector('input.range.activity'),
    restInput        = document.querySelector('input.range.rest'),
    roundsInput      = document.querySelector('input.range.rounds'),
    seriesInput      = document.querySelector('input.range.series')
;

let preparationSpan = document.querySelector('span.value.preparation'),
    activitySpan    = document.querySelector('span.value.activity'),
    restSpan        = document.querySelector('span.value.rest'),
    roundsSpan      = document.querySelector('span.value.rounds'),
    seriesSpan      = document.querySelector('span.value.series')
;

let timerArea     = document.querySelector('.timer'),
    currentArea   = document.querySelector('.current'),
    serieActual   = document.querySelector('.serie'),
    botonIniciar  = document.querySelector('.iniciar'),
    botonPausar   = document.querySelector('.pausar'),
    botonDetener  = document.querySelector('.detener'),
    botonGuardar  = document.querySelector('.guardar');

let isRunning;
let interval;

initValues();
initEvents();

function initValues() {
  isRunning = false;
  
  preparationInput.min = 1;
  activityInput.min = 1;
  restInput.min = 1;
  roundsInput.min = 1;
  seriesInput.min = 1;
  
  preparationInput.max = 10;
  activityInput.max = 60;
  restInput.max = 60;
  roundsInput.max = 20;
  seriesInput.max = 20;

  
  let url_string = window.location.href; 
  let url = new URL(url_string);
  let preparacion = url.searchParams.get("preparacion");
  let actividad = url.searchParams.get("actividad");
  let descanso = url.searchParams.get("descanso");
  let series = url.searchParams.get("series");
  let rondas = url.searchParams.get("rondas");
  let nombre = url.searchParams.get("nombre");
  
  if(preparacion != null){
    document.querySelector('#crear').innerHTML = nombre;
    preparationInput.value = preparacion;
    activityInput.value = actividad;
    restInput.value = descanso;
    roundsInput.value = rondas;
    seriesInput.value = series;
  }else{
    preparationInput.value = 5;
    activityInput.value = 20;
    restInput.value = 10;
    roundsInput.value = 8;
    seriesInput.value = 9;
  }
  
  preparationSpan.innerHTML = preparationInput.value;
  activitySpan.innerHTML = activityInput.value;
  restSpan.innerHTML = restInput.value;
  roundsSpan.innerHTML = roundsInput.value;
  seriesSpan.innerHTML = seriesInput.value;
  
  timerArea.innerHTML = "0";
  currentArea.innerHTML = '0 / 0';
}


function initEvents() {
  
  preparationInput.oninput = function() {
    preparationSpan.innerHTML = preparationInput.value;
  };
  
  activityInput.oninput = function() {
    activitySpan.innerHTML = activityInput.value;
  };
  
  restInput.oninput = function() {
    restSpan.innerHTML = restInput.value;
  };
  
  roundsInput.oninput = function() {
    roundsSpan.innerHTML = roundsInput.value;
  };

  seriesInput.oninput = function() {
    seriesSpan.innerHTML = seriesInput.value;
  };


  botonIniciar.onclick = function() {

    deshabilitarBarras(true);
    
    if(!isRunning) {
      isRunning = true;
      
      runTabata(preparationInput.value, activityInput.value, restInput.value, roundsInput.value);
      
      tiempoTotal = (parseInt(preparationInput.value, 10) + parseInt(activityInput.value, 10)  * parseInt(seriesInput.value, 10) + parseInt(restInput.value, 10) * (parseInt(seriesInput.value, 10)  - 1) )  * parseInt(roundsInput.value, 10);
     
      tiempoTotalIntervalo = setInterval(function(){ 
      
      document.querySelector('#tiempoTotal').innerHTML = `Tiempo total: ${tiempoTotal} seg`;
      
      //Habilitar botones Pausar y Detener
      botonPausar.disabled = false;
      botonDetener.disabled = false;
      botonIniciar.disabled = true;


      if(tiempoTotal === 0){
        clearInterval(tiempoTotalIntervalo);
      }

      }, 1000);
      
    }
  };
  
  botonDetener.onclick = function() {
      isRunning = false;
      clearInterval(interval);
      timerArea.innerHTML = '0';
      currentArea.innerHTML =  "0 / 0";

      deshabilitarBarras(false);
      
      botonPausar.disabled = true;
      botonDetener.disabled = true;
      botonIniciar.disabled = false;
      
      document.querySelector('.serie').innerHTML= "";
      document.querySelector('#tiempoTotal').innerHTML = "";
      index = 0;
      i = 0;
      pos = 0;

      clearInterval(tiempoTotalIntervalo);
  };
  
  botonPausar.onclick = function(e) {
    e.preventDefault();

    if(!isRunning) {
      botonPausar.innerHTML = "Pausar";
      isRunning = true;
    
    } else {
      isRunning = false;
      botonPausar.innerHTML = "Reanudar";
      
    }
  };
}


function runTabata(preparation, activity, rest, rounds) {
  
  arrPeriods = [parseInt(preparation, 10)];
  
  for(let i = 0; i < parseInt(rounds, 10); i++) {

    arrPeriods.push(parseInt(activity, 10)+1);
    arrPeriods.push(parseInt(rest, 10)+1);
  }
  runTimer();
}

function runTimer() {

  if(isRunning){
  serieActual.innerHTML = 'Serie '+ (i+1);
  arrPeriodsAux = arrPeriods.slice();
  }

  interval = window.setInterval(function() {
    
    timerArea.innerHTML = arrPeriodsAux[index];
      
    if(isRunning){

    tiempoTotal--;

    currentArea.innerHTML = Math.floor(((index + 1) / 2)) + " / " + (arrPeriods.length - 1) / 2;
    serieActual.innerHTML = 'Serie '+(i+1);
    
    if(isNaN(timerArea.innerHTML)){
      i = 0;
      index = 0;
      pos = 0;
      timerArea.innerHTML = "0";
      currentArea.innerHTML = "0 / 0";
      serieActual.innerHTML = "";

      isRunning = false;

      deshabilitarBarras(false);

      botonPausar.disabled = true;
      botonDetener.disabled = true;
      botonIniciar.disabled = false;
      clearInterval(interval);
      
    }
  
    if(arrPeriodsAux[index] == 1) {
    arrPeriodsAux = arrPeriods.slice();
    
    if(index < arrPeriods.length) {
      
        if(index > 0){
            if(index === array[pos] && i < parseInt(seriesInput.value, 10)){
             
              i++;
              index = array[pos] - 1;
              
              if(i === parseInt(seriesInput.value, 10)) {

                index = array[pos] + 1;
                pos++;
                i = 0;
              }
            }else{
              index++;
            }
            
        }else{
          index++;
        }
      }
    }
    arrPeriodsAux[index] = arrPeriodsAux[index]-1;
    }

  }, 1000);

}

function abrirSweetAlert(){
  Swal.fire({
    title: 'Nombre de la Tabata',
    input: 'text',
    inputAttributes: {
      autocapitalize: 'off'
    },
    showCancelButton: true,
    confirmButtonText: 'Guardar',
    cancelButtonText: 'Cancelar',
    showLoaderOnConfirm: true,
    preConfirm: (nombreTabata) => {
      guardarTabata(nombreTabata);
      return true;
    },
    allowOutsideClick: () => !Swal.isLoading()
  }).then((result) => {
    if (result.value) {
      Swal.fire({
        title: `Guardado exitosamente`
      })
    }
  })
}


function guardarTabata(nombreTabata){

  let preparacion = document.querySelector('span.value.preparation').innerHTML;
  let actividad = document.querySelector('span.value.activity').innerHTML;
  let descanso = document.querySelector('span.value.rest').innerHTML;
  let series = document.querySelector('span.value.series').innerHTML;
  let rondas = document.querySelector('span.value.rounds').innerHTML;


  let http = new XMLHttpRequest();
  let url = '../controlador/accion/act_guardarTabata.php';
  let params = 'nombre='+nombreTabata+'&tPreparacion='+preparacion+'&tActividad='+actividad+'&tDescanso='+descanso+'&numSeries='+series+'&numRondas='+rondas+'';
  
  http.open('POST', url, true);

  //Send the proper header information along with the request
  http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

  http.onreadystatechange = function() {//Call a function when the state changes.
      if(http.readyState == 4 && http.status == 200) {
      }
  }
  http.send(params);

}


function deshabilitarBarras(variable){
  preparationInput.disabled = variable; 
  activityInput.disabled = variable;
  restInput.disabled = variable;
  roundsInput.disabled = variable;
  seriesInput.disabled = variable; 
}