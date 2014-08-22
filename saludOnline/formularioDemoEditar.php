<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>formulario Empresas</title>
</head>
<body>

<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];
include_once("EmpresasCollector.php");
include_once("Empre.php");
$EmpresasCollectorObj = new EmpresasCollector();
$ObjEmpre = $EmpresasCollectorObj->showEmpre($id);
?>
<h2>Editar Objeto Empresas </h2>
<form action="editar.php" method="post" >
<p>
Id: <input type="text" name="idempresas" value="<?php echo $ObjEmpre->getIdempresas(); ?>" readonly />
</p>

<p>
Nombre: <input type="text" name="nombre"  value="<?php echo $ObjEmpre->getNombre(); ?>" autofocus required />
</p>
<a href="administracionEmpresas.php">Cancelar</a>
<input type="submit" value="Guardar" />

</form>
