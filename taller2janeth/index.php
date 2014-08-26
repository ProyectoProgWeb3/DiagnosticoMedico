<html>
<head>
</head>
<?php
include_once("SociosCollector.php");
$SociosCollectorObj = new SociosCollector();
?>
<body>
<div id="main">
<table>
<tr><td><a href="formulariosocioInsert.php">Nuevo</a></td></tr>
<?php
foreach ($SociosCollectorObj->readsoci() as $c){
  echo "<tr>";
  echo "<td>".$c->getIdsocios() ."</td>";
  echo "<td>".$c->getnombre()."</td>";
  echo "<td>".$c->getfoto()."</td>";
  echo "<td><a href='formularioDemoEditar.php?id=".$c->getIdsocios()."'>editar</a></td>";
  echo "<td><a href='eliminar.php?id=".$c->getIdsocios()."'>eliminar</a></td>"; 
  echo "</tr>"; 
}
?>
</table>
</div>
</body>
</html>
