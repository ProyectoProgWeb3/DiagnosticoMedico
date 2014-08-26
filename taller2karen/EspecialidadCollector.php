<?php

include_once('espe.php');
include_once('Collector.php');

class EspecialidadCollector extends Collector
{
  
  function showespePagina() {
    $rows = self::$db->getRows("SELECT * FROM especialidad");      
   
    $arrayespe= array();        
    foreach ($rows as $c){
      $aux = new espe($c{'codespecialidad'},$c{'descripcion'},$c{'foto'});
      array_push($arrayespe, $aux);
    }
    return $arrayespe;        
  }

  function showespe($id) {
    $row = self::$db->getRows("SELECT * FROM proyecto.especialidad where codespecialidad= ? ", array("{$id}")); 
    $Objespe = new espe($row[0]{'codespecialidad'},$row[0]{'descripcion'});
    return $Objespe;
  }

  function createespe($descripcion) {    
    $insertrow = self::$db->insertRow("INSERT INTO proyecto.especialidad(codespecialidad, descripcion, foto) VALUES (?, ?, ?)", array(null, "{$descripcion}", "/salud/img/sesion.jpg"));
  }  

  function readespe() {
    $rows = self::$db->getRows("SELECT * FROM proyecto.especialidad");        
    $arrayespe= array();        
    foreach ($rows as $c){
      $aux = new espe($c{'codespecialidad'},$c{'descripcion'});
      array_push($arrayespe, $aux);
    }
    return $arrayespe;        
  }
  
  function updateespe($id,$descripcion) {    
    $insertrow = self::$db->updateRow("UPDATE proyecto.especialidad SET especialidad.nombre = ?  WHERE especialidad.codespecialidad = ? ", array( "{$descripcion}",$id));
  }  

  function deleteespe($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM proyecto.especialidad WHERE codespecialidad= ?", array("{$id}"));
  }  


}
?>

