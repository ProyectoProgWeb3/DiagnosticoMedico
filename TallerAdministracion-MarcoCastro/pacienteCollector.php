<?php

include_once('paciente.php');
include_once('Collector.php');

class PacienteCollector extends Collector
{
  
  function showPaciente($id) {
    $row = self::$db->getRows("SELECT * FROM Paciente where idpaciente= ? ", array("{$id}")); 
    $ObjPaciente = new Paciente($row[0]{'idpaciente'},$row[0]{'usuarioid'},$row[0]{'persona'},$row[0]{'email'},$row[0]{'clavehash'});
    return $ObjPaciente;
  }

  function createPaciente($usuarioid) {    
    $insertrow = self::$db->insertRow("INSERT INTO clasedb.paciente (idpaciente, usuarioid) VALUES (?, ?)", array(null, "{$usuarioid}"));
  }  

  function readPacientes() {
    $rows = self::$db->getRows("SELECT * FROM paciente");
    $arrayPaciente= array();        
    foreach ($rows as $c){
      $aux = new Paciente($c{'idpaciente'},$c{'usuarioid'},$c{'persona'},$c{'email'},$c{'clavehash'});
      array_push($arrayPaciente, $aux);
    }
    return $arrayPaciente;        
  }
  
  function updatePaciente($id,$usuarioid) {    
    $insertrow = self::$db->updateRow("UPDATE clasedb.Paciente SET Paciente.usuarioid = ?  WHERE Paciente.idpaciente = ? ", array( "{$usuarioid}",$id));
  }  

  function deletePaciente($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM clasedb.Paciente WHERE idpaciente= ?", array("{$id}"));
  }  



}
?>

