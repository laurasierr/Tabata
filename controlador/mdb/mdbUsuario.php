<?php
//Con require_once se incluye el archivo UsuarioDAO.php
require_once(__DIR__."/../../modelo/dao/UsuarioDAO.php");
        
function autenticarUsuario($correo, $password){
        
        $dao=new UsuarioDAO();
        
        //Se llama al método autenticarUsuario que se encuentra en la clase
        //UsuarioDAO
        $usuario = $dao->autenticarUsuario($correo, $password);

        //Retorna el usuario si lo encontró, de lo contrario retorna null
        return $usuario;
    }

function registrarUsuario(Usuario $usuario){
    
    $dao=new UsuarioDAO();

    $usuario = $dao->registrarUsuario($usuario);

    return $usuario;
}
