<html>
<head>
</head>

<body>
<div id="main">
<?php
$valor=$_POST["nombre"];
$valor1=$_POST["foto"];
//$valor="manuel";
echo 'Hola ' . htmlspecialchars($valor) . '!';
echo 'ruta archivo ' . htmlspecialchars($valor1) . '!';
include_once("SociosCollector.php");

$SociosCollectorObj = new SociosCollector();
$SociosCollectorObj->createsoci($valor,$valor1);


echo "valor agregado </br>";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
