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
include_once("LeccionCollector.php");


$LeccionCollectorObj = new LeccionCollector();

foreach ($LeccionCollectorObj->showDemos() as $c){
  echo "<div>";
  echo $c->getid(). "  && " .$c->getlogin();                                     
  echo "</div>"; 
   echo "<tr>";

    echo "<td>";
    echo $c->getNombre();
    echo "</td>";
   
    echo "<td>";
    echo $c->getparcial();
    echo "</td>";
    echo "<td>";
    echo $c->getfinal();
    echo "</td>";
    echo "<td>";
    echo ($c->getparcial()+$c->getfinal())/2;
    echo "</td>";

    echo "</tr>";
}
echo "</table>";
}


?>
