<html>
<head>
</head>
<?php
include_once("pacienteCollector.php");
$DemoCollectorObj = new PacienteCollector;
?>
<body>
<div id="main">
<table>
<tr><td><a href="formularioPacienteInsert.php">Nuevo</a></td></tr>
<?php
foreach ($DemoCollectorObj->readPacientes() as $c){
  echo "<tr>";
  echo "<td>".$c->getIdPaciente() ."</td>";
  echo "<td>".$c->getusuarioid()."</td>";
    echo "<td>".$c->getpersona() ."</td>";
    echo "<td>".$c->getemail()."</td>";
    echo "<td>".$c->getclavehash() ."</td>";
  echo "<td><a href='formularioPacienteEditar.php?id=".$c->getIdPaciente()."'>editar</a></td>";
  echo "<td><a href='eliminar.php?id=".$c->getIdPaciente()."'>eliminar</a></td>";
  echo "</tr>"; 
}
?>
</table>
</div>
</body>
</html>
