<html>
<head>
</head>
<?php
include_once("EspecialidadCollector.php");
$EspecialidadCollectorObj = new EspecialdadCollector();
?>
<body>
<div id="main">
<table>
<tr><td><a href="formularioespeInsert.php">Nuevo</a></td></tr>
<?php
foreach ($EspecialidadCollectorObj->readespe() as $c){
  echo "<tr>";
  echo "<td>".$c->getcodespecialidad() ."</td>";
  echo "<td>".$c->getdescripcion()."</td>";
  echo "<td>".$c->getfoto()."</td>";
  echo "<td><a href='formularioespeEditar.php?id=".$c->getcodespecialidad()."'>editar</a></td>";
  echo "<td><a href='eliminar.php?id=".$c->getcodespecialidad()."'>eliminar</a></td>"; 
  echo "</tr>"; 
}
?>
</table>
</div>
</body>
</html>
