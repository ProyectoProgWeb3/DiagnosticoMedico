<?php

include_once('Doc.php');
include_once('Collector.php');

class DoctoresCollector extends Collector
{
	function showDocPagina() {
		$rows = self::$db->getRows("SELECT * FROM medico ");        
		$arrayDoc= array();        
		foreach ($rows as $c){
			$aux = new Doc($c{'idmedico'},$c{'nombre'},$c{'especialidad'},$c{'foto'});
			array_push($arrayDoc, $aux);
		}
		return $arrayDoc;        
	}

	function showDoc($id) {
		$row = self::$db->getRows("SELECT * FROM a9144011_proyect.medico where idmedico= ? ", array("{$id}")); 
		$ObjDoc = new Doc($row[0]{'idmedico'},$row[0]{'nombre'},$row[0]{'especialidad'},$row[0]{'foto'});
		return $ObjDoc;
	}

	function createDoc($nombre,$especialidad) {    
		$insertrow = self::$db->insertRow("INSERT INTO a9144011_proyect.medico (idmedico, nombre, especialidad, foto) VALUES (?, ?, ?, ?)", array(null, "{$nombre}", "{$especialidad}", "img/noavatar.jpg"));
	}  

	function readDoc() {
		$rows = self::$db->getRows("SELECT * FROM a9144011_proyect.medico ");        
		$arrayDoc= array();        
		foreach ($rows as $c){
			$aux = new Doc($c{'idmedico'},$c{'nombre'},$c{'especialidad'},$c{'foto'});
			array_push($arrayDoc, $aux);
		}
		return $arrayDoc;        
	}
	
	function updateDoc($id,$nombre,$especialidad) {    
		$insertrow = self::$db->updateRow("UPDATE a9144011_proyect.medico SET medico.nombre = ? ,medico.especialidad = ? WHERE medico.idmedico = ? ", array( "{$nombre}","{$especialidad}",$id));
	}  

	function deleteDoc($id) {    
		$deleterow = self::$db->deleteRow("DELETE FROM a9144011_proyect.medico WHERE medico.idmedico= ?", array("{$id}"));
	}  



}
?>

