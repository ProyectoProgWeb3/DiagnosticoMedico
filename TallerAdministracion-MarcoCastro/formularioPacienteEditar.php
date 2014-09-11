<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>formulario Paciente</title>
</head>
<body>

<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];
include_once("pacienteCollector.php");
include_once("paciente.php");
$PacienteCollectorObj = new PacienteCollector();
$ObjPaciente = $PacienteCollectorObj->showPaciente($id);
?>
<h2>Editar Objeto Paciente</h2>
<form action="editar.php" method="post" >
<p>
Id: <input type="text" name="codpaciente" value="<?php echo $ObjPaciente->getcodpaciente(); ?>" readonly />
</p>

<p>
Nombre: <input type="text" name="usuarioid"  value="<?php echo $ObjPaciente->getusuarioid(); ?>" autofocus required />
</p>
<a href="index.php">Cancelar</a>
<input type="submit" value="Guardar" />

</form>
