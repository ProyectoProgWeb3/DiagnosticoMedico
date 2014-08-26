<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Formulario de Creacion de Medicos</title>
</head>
<body>
<form action="insertDoc.php" method="post" >
<p>
Nombre: <input type="text" name="nombre" autofocus required />
</p>
<p>
Especialidad: <input type="text" name="especialidad" autofocus required />
</p>
<a href="administracionMedicos.php">Cancelar</a>
<input type="submit" value="Submit!" />

</form>
