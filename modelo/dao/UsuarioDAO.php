<?php
//En esta clase se implementa el patron de diseño DAO, para separar la capa de acceso
//a datos de la lógica de la aplicación. Aqui se crea una instancia de la clase de la 
//conexión para realizar las consultas pertinentes a la base de datos.
//Tambien se llama a las clases planas para guardar la informacion, por ejemplo 
//la clase Usuario


//Con require_once se incluye el archivo especificado, en este caso DataSource.php y 
//Usuario.php
require_once ("DataSource.php");
require_once (__DIR__."/../entidad/Usuario.php");

class UsuarioDAO {
     
     //Con este metodo se hace la validacion para saber si el usuario ingresado
     //en el login se encuentra registrado en la base de datos
	 public function autenticarUsuario($correo, $password){
        
        //Se crea la instancia de DataSource para hacer la conexión
        $data_source = new DataSource();

        //Se llama al metodo ejecutarConsulta para devolver el usuario
        //que cumpla con el correo y contraseña recibidos del login
        $data_table= $data_source->ejecutarConsulta("SELECT * FROM usuario WHERE correo = :correo AND password = :password",array(':correo'=>$correo,':password'=>$password));

        $usuario=null;
        //Si $data_table retornó una fila, quiere decir que se encontro el usuario en la base de datos
        if(count($data_table)==1){
            
            //Se guarda la informacion del usuario en un objeto de tipo Usuario
            foreach($data_table as $indice => $valor){
                //Los nombres de los campos corresponden a los nombres que tienen en la 
                //base de datos, por ejemplo: id, nombre, correo, password, etc.
                $usuario = new Usuario(
                        $data_table[$indice]["id"],
                        $data_table[$indice]["nombre"],
                        $data_table[$indice]["correo"],
                        $data_table[$indice]["password"],
                        $data_table[$indice]["telefono"],
                        $data_table[$indice]["fechanac"],
                        $data_table[$indice]["sexo"],
                        $data_table[$indice]["pesokg"]
                        );
            }
        }
        //se retorna el objeto usuario, retorna null en el caso de que no encuentre el usuario
        //en la base de datos 
        return $usuario;
    }    


    public function registrarUsuario(Usuario $usuario){
        $data_source = new DataSource();
        
        $stmt1 = "INSERT INTO usuario VALUES (NULL,:nombre,:correo,:password,:telefono,:fechanac,:sexo,:pesokg)"; 
        
        $resultado = $data_source->ejecutarActualizacion($stmt1, array(
            ':nombre' => $usuario->getNombre(),
            ':correo' => $usuario->getCorreo(),
            ':password' => $usuario->getPassword(),
            ':telefono'=>$usuario->getTelefono(),
            ':fechanac'=>$usuario->getFechaNacimiento(),
            ':sexo'=>$usuario->getSexo(),
            ':pesokg'=>$usuario->getPeso()
            )
        ); 

      return $resultado;
    }
}



