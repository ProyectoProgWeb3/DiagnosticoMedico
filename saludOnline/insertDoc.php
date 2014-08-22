<html>
<head>
<meta charset="utf-8" />
<title>Creador de Medicos</title>
</head>

<body>
<div id="main">
<?php
$nombre=$_POST["nombre"];
$especialidad=$_POST["especialidad"];

echo 'Hola ' . htmlspecialchars($nombre) . '!';

include_once("DoctoresCollector.php");

$DoctoresCollectorObj = new DoctoresCollector();
$DoctoresCollectorObj->createDoc($nombre,$especialidad);

echo "valor agregado </br>";
?>
<div><a href="administracionMedicos.php">Volver al Inicio</a></div>
</div>
</body>
</html>
