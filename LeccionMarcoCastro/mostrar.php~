<?php
echo <<< HERE
<head>
	<title>Mostrar Promedio</title>

		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" />

</head>
HERE;
include_once("AlumnoCollector.php");

$id =1;

$PersonaCollectorObj = new PersonaCollector();



echo ("<table class=\"table table-striped\"");

foreach ($PersonaCollectorObj->mostrarPersonas() as $c){
    echo "<tr>";

    echo "<td>";
    echo $c->getNombre();
    echo "</td>";
    echo "<td>";
    echo $c->getmateria();
    echo "</td>";
    echo "<td>";
    echo $c->getparcial1();
    echo "</td>";
    echo "<td>";
    echo $c->getparcial2();
    echo "</td>";
    echo "<td>";
    echo ($c->getparcial1()+$c->getparcial2())/2;
    echo "</td>";

    echo "</tr>";
}
echo "</table>";


?>