<html>
<head>
</head>
<?php
include_once("EmpresasCollector.php");
$EmpresasCollectorObj = new EmpresasCollector();
?>
<body>
<div id="main">
<table>
<tr><td><a href="formularioDemoInsert.php">Nuevo</a></td></tr>
<?php
foreach ($EmpresasCollectorObj->readEmpre() as $c){
  echo "<tr>";
  echo "<td>".$c->getIdempresas() ."</td>";
  echo "<td>".$c->getNombre()."</td>";
  echo "<td><a href='formularioDemoEditar.php?id=".$c->getIdempresas()."'>editar</a></td>";
  echo "<td><a href='eliminar.php?id=".$c->getIdempresas()."'>eliminar</a></td>"; 
  echo "</tr>"; 
}
?>
</table>
</div>
</body>
</html>
