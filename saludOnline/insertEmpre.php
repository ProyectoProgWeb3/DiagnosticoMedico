<html>
<head>
<meta charset="utf-8" />
<title>Creador de Empresas</title>
</head>

<body>
<div id="main">
<?php
$nombre=$_POST["nombre"];
//$valor="manuel";
echo 'Hola ' . htmlspecialchars($nombre) . '!';

include_once("EmpresasCollector.php");

$EmpresasCollectorObj = new EmpresasCollector();
$EmpresasCollectorObj->createEmpre($nombre);

echo "valor agregado </br>";
?>
<div><a href="administracionEmpresas.php">Volver al Inicio</a></div>
</div>
</body>
</html>
