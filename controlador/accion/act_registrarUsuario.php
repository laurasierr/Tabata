<?php
   
    session_start();
    
    require_once (__DIR__."/../mdb/mdbUsuario.php");
    require_once (__DIR__."/../../modelo/entidad/Usuario.php");

        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $password = $_POST['password'];
        $telefono = $_POST['telefono'];
        $fechanac = $_POST['fechanac'];
        $sexo = $_POST['sexo'];
        $peso = $_POST['peso'];
        
        $usuario = new Usuario(NULL, $nombre, $correo, $password, $telefono, $fechanac, $sexo, $peso);

        registrarUsuario($usuario);
        
        header("Location: ../../vista/login.php");

