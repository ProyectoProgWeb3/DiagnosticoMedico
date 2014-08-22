<html>
<head>
<meta charset="utf-8" />
<title>Eliminador de Medicos</title>
</head>

<body>
<div id="main">
<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];

//incluir la libreria de DemoCollector
include_once("DoctoresCollector.php");
//creo una instancia de DemoCollector
$DoctoresCollectorObj = new DoctoresCollector();
//Ejecuto el metodo para eliminar el objeto Demo indicando el id
$DoctoresCollectorObj->deleteDoc($id);

// muestro mensaje de que se ha eliminado el objeto Demo
echo "valor id". htmlspecialchars($id) ."  ha sido eliminado correctamente.";
?>
<div><a href="administracionMedicos.php">Volver al Inicio</a></div>
</div>
</body>
</html>
