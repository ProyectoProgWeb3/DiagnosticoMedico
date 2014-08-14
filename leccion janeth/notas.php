<html>
<head>
<title>promedio de calificaciones</title></head>
<body>
<form method="get" action="promedio.php">
<p>parcial<input type="text" value="" name="nota1"></p>
<p>final<input type="text" value="" name="nota2"></p>
<p>mejoramiento<input type="text" value="" name="nota3"></p>
<p><input type="submit" value="enviar" name="calcular">&nbsp;&nbsp;
</p>
<?php
if(isset($_REQUEST['calcular']))
$a=$_POST["nota1"];
$b=$_POST["nota2"];
$c=$_POST["nota3"];
{
if $a > $b{
  $promedio= (($_REQUEST['nota1']  + $_REQUEST['nota3'])/2) ;
else
   $promedio= (($_REQUEST['nota2']  + $_REQUEST['nota3'])/2) ; 
 }    
 echo "parcial es:".$_REQUEST['nota1']."<br>";
 echo "final:".$_REQUEST['nota2']."<br>";
 echo "mejoramiento".$_REQUEST['nota3']."<br>";
 echo "El promedio es:".$promedio;
 }
?>
</body>
</html> 
