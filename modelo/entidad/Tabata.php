<?php

class Tabata
{
    public $idTabata;
    public $nombre;
    public $tPreparacion;
    public $tActividad;
    public $tDescanso;
    public $numSeries;
    public $numRondas;
    public $idUsuario;
    
    public function __construct($idTabata, $nombre, $tPreparacion, $tActividad,$tDescanso, $numSeries, $numRondas, $idUsuario){

        $this->idTabata = $idTabata;
        $this->nombre = $nombre;
		$this->tPreparacion = $tPreparacion;
		$this->tActividad = $tActividad;
        $this->tDescanso = $tDescanso;
        $this->numSeries = $numSeries;
		$this->numRondas = $numRondas;
        $this->idUsuario = $idUsuario;
    }
    
    public function getIdTabata(){
        return $this->idTabata;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getPreparacion()
    {
        return $this->tPreparacion;
    }
    
     public function getActividad()
    {
        return $this->tActividad;
    }

	 public function getDescanso()
    {
        return $this->tDescanso;
    }

    public function getNumSeries()
    {
        return $this->numSeries;
    }

    public function getNumRondas()
    {
        return $this->numRondas;
    }

    public function getIdUsuario(){
        return $this->idUsuario;
    }

}