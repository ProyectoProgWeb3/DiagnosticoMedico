<html>
<head>
</head>

<body>
<div id="main">
<?php
$nombre=$_POST["nombre"];
$foto=$_POST["foto"];


echo 'Hola ' . htmlspecialchars($nombre) . '!';


include_once("EmpresasCollector.php");

$EmpresasCollectorObj = new EmpresasCollector();
$EmpresasCollectorObj->createEmpre($nombre, $foto);

echo "valor agregado </br>";
?>
<div><a href="administracion.php">Volver al Inicio</a></div>
</div>
</body>
</html>
