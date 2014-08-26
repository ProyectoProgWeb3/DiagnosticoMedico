<?php

include_once('Empre.php');
include_once('Collector.php');

class EmpresasCollector extends Collector
{
  
  function showEmpres() {
    $rows = self::$db->getRows("SELECT * FROM empresas ");        
    $arrayEmpre= array();        
    foreach ($rows as $c){
      $aux = new Empre($c{'idempresas'},$c{'nombre'},$c{'foto'});
      array_push($arrayEmpre, $aux);
    }
    return $arrayEmpre;        
  }

}
?>