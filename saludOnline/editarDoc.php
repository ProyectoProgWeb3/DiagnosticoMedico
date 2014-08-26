<html>
<head>
<meta charset="utf-8" />
<title>Editor de Medicos</title>
</head>

<body>
<div id="main">
<?php
$nombre=$_POST["nombre"];
$idmedico=$_POST["idmedico"];
$especialidad=$_POST["especialidad"];

echo "Edici&oacute;n en proceso ....  </br>";

include_once("DoctoresCollector.php");
$DoctoresCollectorObj = new DoctoresCollector();
$DoctoresCollectorObj->updateDoc($idmedico,$nombre,$especialidad);

echo "id :".$idempresas." actualizado a:".$nombre." ".$especialidad." </br>";
?>
<div><a href="administracionMedicos.php">Volver al Inicio</a></div>
</div>
</body>
</html>
