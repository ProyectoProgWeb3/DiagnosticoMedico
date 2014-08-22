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
		$row = self::$db->getRows("SELECT * FROM a9144011_proyect.empresas where idempresas= ? ", array("{$id}")); 
		$ObjEmpre = new Empre($row[0]{'idempresas'},$row[0]{'nombre'},$row[0]{'foto'});
		return $ObjEmpre;
	}

	function createEmpre($nombre) {    
		$insertrow = self::$db->insertRow("INSERT INTO a9144011_proyect.empresas (idempresas, nombre, foto) VALUES (?, ?, ?)", array(null, "{$nombre}", "img/noavatar.jpg"));
	}  

	function readEmpre() {
		$rows = self::$db->getRows("SELECT * FROM a9144011_proyect.empresas ");        
		$arrayEmpre= array();        
		foreach ($rows as $c){
			$aux = new Empre($c{'idempresas'},$c{'nombre'},$c{'foto'});
			array_push($arrayEmpre, $aux);
		}
		return $arrayEmpre;        
	}
	
	function updateEmpre($id,$nombre) {    
		$insertrow = self::$db->updateRow("UPDATE a9144011_proyect.empresas SET empresas.nombre = ?  WHERE empresas.idempresas = ? ", array( "{$nombre}",$id));
	}  

	function deleteEmpre($id) {    
		$deleterow = self::$db->deleteRow("DELETE FROM a9144011_proyect.empresas WHERE empresas.idempresas= ?", array("{$id}"));
	}  



}
?>

