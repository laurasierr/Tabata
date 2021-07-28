<?php

//Esta clase POJO sirve para guardar los datos de un Usuario
//Por ejemplo, un objeto creado a partir de esta clase
//tendrá guardado los datos de un usuario de la tabla Usuarios de la
//base de datos

class Usuario
{
    public $idUsuario;
    public $nombre;
    public $correo;
    public $password;
    public $telefono;
    public $fechaNacimiento;
    public $sexo;
    public $peso;
    
    public function __construct($idUsuario, $nombre, $correo, $password,$telefono, $fechaNacimiento, $sexo, $peso){

        $this->idUsuario = $idUsuario;
        $this->nombre = $nombre;
		$this->correo = $correo;
		$this->password = $password;
        $this->telefono = $telefono;
        $this->fechaNacimiento = $fechaNacimiento;
		$this->sexo = $sexo;
        $this->peso = $peso;
    }
    
    public function getIdUsuario(){
        return $this->idUsuario;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getCorreo()
    {
        return $this->correo;
    }
    
     public function getPassword()
    {
        return $this->password;
    }

	 public function getTelefono()
    {
        return $this->telefono;
    }

    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function getPeso(){
        return $this->peso;
    }

}