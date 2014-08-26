<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Formulario Edicion de Medicos</title>
</head>
<body>

<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];
include_once("DoctoresCollector.php");
include_once("Doc.php");
$DoctoresCollectorObj = new DoctoresCollector();
$ObjDoc = $DoctoresCollectorObj->showDoc($id);
?>
<h2>Editar Objeto Doctores </h2>
<form action="editarDoc.php" method="post" >
<p>
Id: <input type="text" name="idmedico" value="<?php echo $ObjDoc->getIdmedico(); ?>" readonly />
</p>

<p>
Nombre: <input type="text" name="nombre"  value="<?php echo $ObjDoc->getNombre(); ?>" autofocus required />
</p>
<p>
Especialidad: <input type="text" name="especialidad"  value="<?php echo $ObjDoc->getEspecialidad(); ?>" autofocus required />
</p>
<a href="administracionMedicos.php">Cancelar</a>
<input type="submit" value="Guardar" />

</form>
