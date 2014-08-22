<?php

include_once('Paciente.php');
include_once('Collector.php');

class PacienteCollector extends Collector
{
  
  function showDemos() {
    $rows = self::$db->getRows("SELECT * FROM paciente ");        
    $arrayDemo= array();        
    foreach ($rows as $c){
      $aux = new Paciente($c{'codpaciente'},$c{'login'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;        
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

}
?>



