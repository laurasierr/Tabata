<?php

require_once(__DIR__."/../../modelo/dao/TabataDAO.php");

function guardarTabata(Tabata $tabata){
    
    $dao=new TabataDAO();

    $tabata = $dao->guardarTabata($tabata);

    return $tabata;
}

function verTabatasGuardadas($idUsuario){
    $dao=new TabataDAO();

    $tabatas = $dao->verTabatasGuardadas($idUsuario);

    return $tabatas;
}