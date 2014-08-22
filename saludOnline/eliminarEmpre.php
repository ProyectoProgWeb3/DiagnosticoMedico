<html>
<head>
<meta charset="utf-8" />
<title>Eliminador de Empresas</title>
</head>

<body>
<div id="main">
<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];

//incluir la libreria de DemoCollector
include_once("EmpresasCollector.php");
//creo una instancia de DemoCollector
$EmpresasCollectorObj = new EmpresasCollector();
//Ejecuto el metodo para eliminar el objeto Demo indicando el id
$EmpresasCollectorObj->deleteEmpre($id);

// muestro mensaje de que se ha eliminado el objeto Demo
echo "valor id". htmlspecialchars($id) ."  ha sido eliminado correctamente.";
?>
<div><a href="administracionEmpresas.php">Volver al Inicio</a></div>
</div>
</body>
</html>
