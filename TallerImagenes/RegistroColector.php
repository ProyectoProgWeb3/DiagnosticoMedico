<?php
function mostrarDemos() {
    $rows = self::$db->getRows("SELECT * FROM Usuario ");
    $arrayDemo= array();
    foreach ($rows as $c){
        $aux = new Paciente($c{'codpaciente'},$c{'login'});
        array_push($arrayDemo, $aux);
    }
    return $arrayDemo;
}
function insertarRegistro(){
    $rows= self::$db->insertRow("");
}

function UserByUsername($user,$passw) {

    $row = self::$db->getRows("SELECT * FROM paciente");
    $demo = new Demo($row{'codpaciente'});
    return $demo;

    /*
    $arrayDemo= array();
    foreach ($rows as $c){
      $aux = new Demo($c{'codpaciente'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;
    */
}