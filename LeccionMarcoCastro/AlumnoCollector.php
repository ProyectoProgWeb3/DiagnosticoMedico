<?php
include_once('Alumno.php');
include_once('Collector.php');

class PersonaCollector extends Collector
{

    function mostrarPersonas() {
        $rows = self::$db->getRows("SELECT * FROM alumno ");
        $arrayPersona= array();
        foreach ($rows as $c){
            $aux = new Alumno($c{'idalumno'},$c{'nombre'},$c{'materia'},$c{'parcial1'},$c{'parcial2'});
            array_push($arrayPersona, $aux);
        }
        return $arrayPersona;
    }
    function insertarRegistro($parametros){
        self::$db->insertRow("insert into persona values ",$parametros);
    }

}
?>
