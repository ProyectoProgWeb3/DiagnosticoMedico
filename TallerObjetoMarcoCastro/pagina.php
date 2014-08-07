<?php
include_once("PersonaCollector.php");

$id =1;

$PersonaCollectorObj = new PersonaCollector();



echo "<table>";
foreach ($PersonaCollectorObj->showPersonas() as $c){
  echo "<tr>";
    echo "<td>";
  echo $c->getidPersona() . "  || " .$c->getNombre();
    echo "</td>";
  echo "</tr>";
}
echo "</table>";


?>
