<?php

include_once('paciente.php');
include_once('Collector.php');

class PacienteCollector extends Collector
{
  
  function showPaciente($id) {
    $row = self::$db->getRows("SELECT * FROM Paciente where codpaciente= ? ", array("{$id}"));
    $ObjPaciente = new Paciente($row[0]{'codpaciente'},$row[0]{'usuarioid'},$row[0]{'persona'},$row[0]{'email'},$row[0]{'clavehash'});
    return $ObjPaciente;
  }

  function createPaciente($usuarioid,$email,$clavehash,$persona) {
    $insertrow = self::$db->insertRow("INSERT INTO paciente (codpaciente, usuarioid,email,clavehash,persona) VALUES (?, ?,?,?,?)", array(null, "{$usuarioid}", "{$email}", "{$clavehash}", "{$persona}"));
      return $insertrow;
  }  

  function readPacientes() {
    $rows = self::$db->getRows("SELECT * FROM paciente");
    $arrayPaciente= array();        
    foreach ($rows as $c){
      $aux = new Paciente($c{'codpaciente'},$c{'usuarioid'},$c{'persona'},$c{'email'},$c{'clavehash'});
      array_push($arrayPaciente, $aux);
    }
    return $arrayPaciente;        
  }
  
  function updatePaciente($id,$usuarioid) {    
    $insertrow = self::$db->updateRow("UPDATE Paciente SET Paciente.codpaciente = ?  WHERE Paciente.idpaciente = ? ", array( "{$usuarioid}",$id));
  }  

  function deletePaciente($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM Paciente WHERE codpaciente= ?", array("{$id}"));
  }  



}
?>

