<?php

include_once('soci.php');
include_once('Collector.php');

class SociosCollector extends Collector
{
  function showsociPagina() {
    $rows = self::$db->getRows("SELECT * FROM socios");        
    $arraysoci= array();        
    foreach ($rows as $c){
      $aux = new soci($c{'idsocios'},$c{'nombre'},$c{'foto'});
      array_push($arraysoci, $aux);
    }
    return $arraysoci;        
  }

  function showsoci($id) {
    $row = self::$db->getRows("SELECT * FROM proyecto.socios where idsocios= ? ", array("{$id}")); 
    $Objsoci = new soci($row[0]{'idsocios'},$row[0]{'nombre'});
    return $Objsoci;
  }

  function createsoci($nombre) {    
    $insertrow = self::$db->insertRow("INSERT INTO proyecto.socios (idsocios, nombre, foto) VALUES (?, ?, ?)", array(null, "{$nombre}", "/salud/img/sesion.jpg"));
  }  

  function readsoci() {
    $rows = self::$db->getRows("SELECT * FROM proyecto.socios");        
    $arraysoci= array();        
    foreach ($rows as $c){
      $aux = new soci($c{'idsocios'},$c{'nombre'});
      array_push($arraysoci, $aux);
    }
    return $arraysoci;        
  }
  
  function updatesoci($id,$nombre) {    
    $insertrow = self::$db->updateRow("UPDATE proyecto.socios SET socios.nombre = ?  WHERE socios.idsocios = ? ", array( "{$nombre}",$id));
  }  

  function deletesoci($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM proyecto.socios WHERE idsocios= ?", array("{$id}"));
  }  



}
?>

