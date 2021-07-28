<?php
    session_start();
    require_once (__DIR__.'/../mdb/mdbTabata.php');
    
    $tabatas = verTabatasGuardadas($_SESSION['ID_USUARIO']);
   
    echo json_encode($tabatas);  

