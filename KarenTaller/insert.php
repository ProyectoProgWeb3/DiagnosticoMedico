<html>
<head>
</head>

<body>
<div id="main">
<?php
$valor=$_POST["descripcion"];
$valor1=$_POST["foto"];

echo 'como estas' . htmlespecialchars($valor) . '!';
echo 'ruta de imagen' . htmlespecialchars($valor0) . '!';
include_once("EspecialidadCollector.php");
$EspecialidadCollectorObj = new EspecialidadCollector();
$EspecialidadCollectorObj->createespe($valor,$valor0);
echo "exito, valor incluido</br>";
?>
<div><a href="index.php">Ir al Inicio</a></div>
</div>
</body>
</html>
