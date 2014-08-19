<html>
<head>
</head>

<body>
<div id="main">
<?php
$usuarioid=$_POST["usuarioid"];
$idpaciente=$_POST["idpaciente"];

echo "Edici&oacute;n en proceso ....  </br>";

include_once("pacienteCollector.php");
$PacienteCollectorObj = new PacienteCollector();
$PacienteCollectorObj->updatePaciente($idpaciente,$usuarioid);

echo "id :".$idpaciente." actualizado a:".$usuarioid." </br>";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
