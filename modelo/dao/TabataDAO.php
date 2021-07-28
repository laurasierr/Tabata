<?php

require_once ("DataSource.php");
require_once (__DIR__."/../entidad/Tabata.php");

class TabataDAO {
     
    public function guardarTabata(Tabata $tabata){
        $data_source = new DataSource();
        
        $stmt1 = "INSERT INTO tabata VALUES (NULL,:nombre,:tPreparacion,:tActividad,:tDescanso,:numSeries,:numRondas,:idUsuario)"; 
        
        $resultado = $data_source->ejecutarActualizacion($stmt1, array(
            ':nombre' => $tabata->getNombre(),
            ':tPreparacion' => $tabata->getPreparacion(),
            ':tActividad' => $tabata->getActividad(),
            ':tDescanso'=>$tabata->getDescanso(),
            ':numSeries'=>$tabata->getNumSeries(),
            ':numRondas'=>$tabata->getNumRondas(),
            ':idUsuario'=>$tabata->getIdUsuario()
            )
        ); 

      return $resultado;
    }

    public function verTabatasGuardadas($idUsuario){
        $data_source = new DataSource();
        
        $data_table = $data_source->ejecutarConsulta("SELECT id,nombre,tPreparacion,tActividad,tDescanso, numSeries,numRondas FROM tabata WHERE idUsuario = :idUsuario",array(':idUsuario'=>$idUsuario));

        $tabata=null;
        $tabatas=array();

        foreach($data_table as $indice => $valor){
            $tabata = new Tabata(
                    $data_table[$indice]["id"],
                    $data_table[$indice]["nombre"], 
                    $data_table[$indice]["tPreparacion"],
                    $data_table[$indice]["tActividad"],
                    $data_table[$indice]["tDescanso"],
                    $data_table[$indice]["numSeries"],
                    $data_table[$indice]["numRondas"],
                    $idUsuario
                    );
            array_push($tabatas,$tabata);
        }
        
    return $tabatas;
    }

}
