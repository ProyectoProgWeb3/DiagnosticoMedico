<?php
include_once("PersonaCollector.php");

$id =1;

$PersonaCollectorObj = new PersonaCollector();



echo "<table>";
foreach ($PersonaCollectorObj->mostrarPersonas() as $c){
  echo "<tr>";
    echo "<td>";
  echo $c->getidPersona() . "  || " .$c->getNombre();
    echo "</td>";
  echo "</tr>";
}
echo "</table>";


$data = Array (
    "nombre" => "Jon",
    "apellido" => "John",
    "sexo" => '1',
    "fechanac" => "06/06/2000",
    "direccion" => 'Quito',
);
$PersonaCollectorObj->insertarRegistro($data);
if($id)
    echo 'Persona fue creado. Id='.$id;

?>
