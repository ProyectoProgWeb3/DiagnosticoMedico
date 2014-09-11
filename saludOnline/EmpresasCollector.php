<?php

include_once('Empre.php');
include_once('Collector.php');

class EmpresasCollector extends Collector
{
  function showEmprePagina() {
    $rows = self::$db->getRows("SELECT * FROM empresas ");        
    $arrayEmpre= array();        
    foreach ($rows as $c){
      $aux = new Empre($c{'idempresas'},$c{'nombre'},$c{'foto'});
      array_push($arrayEmpre, $aux);
    }
    return $arrayEmpre;        
  }

  function showEmpre($id) {
    $row = self::$db->getRows("SELECT * FROM proyecto.empresas where idempresas= ? ", array("{$id}")); 
    $ObjEmpre = new Empre($row[0]{'idempresas'},$row[0]{'nombre'});
    return $ObjEmpre;
  }

  function createEmpre($nombre) {    
    $insertrow = self::$db->insertRow("INSERT INTO proyecto.empresas (idempresas, nombre, foto) VALUES (?, ?, ?)", array(null, "{$nombre}", "/DiagnosticoMedico/salud/img/noavatar.jpg"));
  }  

  function readEmpre() {
    $rows = self::$db->getRows("SELECT * FROM proyecto.empresas ");        
    $arrayEmpre= array();        
    foreach ($rows as $c){
      $aux = new Empre($c{'idempresas'},$c{'nombre'});
      array_push($arrayEmpre, $aux);
    }
    return $arrayEmpre;        
  }
  
  function updateEmpre($id,$nombre) {    
    $insertrow = self::$db->updateRow("UPDATE proyecto.empresas SET empresas.nombre = ?  WHERE empresas.idempresas = ? ", array( "{$nombre}",$id));
  }  

  function deleteEmpre($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM proyecto.empresas WHERE idempresas= ?", array("{$id}"));
  }  



}
?>

