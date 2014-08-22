<html>
<head>
</head>

<body>
<div id="main">
<?php
$nombre=$_POST["nombre"];
$idempresas=$_POST["idempresas"];

echo "Edici&oacute;n en proceso ....  </br>";

include_once("EmpresasCollector.php");
$EmpresasCollectorObj = new EmpresasCollector();
$EmpresasCollectorObj->updateEmpre($idempresas,$nombre);

echo "id :".$idempresas." actualizado a:".$nombre." </br>";
?>
<div><a href="administracionEmpresas.php">Volver al Inicio</a></div>
</div>
</body>
</html>
