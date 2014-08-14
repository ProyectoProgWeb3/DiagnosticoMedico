<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="insertar.php">
<table width="200" border="0">
<form method="get" action="promedio.php">
	<tr>
	  <td>Nombre:</td>
	  <td><input type="text" name="nombre" id="nombre" /></td>
	</tr>
    <tr>
   	     <td>Parcial:</td>
      <td><input type="text" name="parcial" value="" /></td>
	</tr>
    <tr>
   	     <td>Final:</td>
 	     <td><input type="text" name="final" value="" /></td>
	</tr>
<tr>
   	     <td>Mejoramiento:</td>
 	     <td><input type="text" name="mejo" value="" /></td>
	</tr>
	<td>Nota Promedio:</td>
    <tr>    
 	     <td><input name="Enviar" type="submit" value="Enviar" /></td>
	</tr>

<?php
if(isset($_REQUEST['calcular']))
{
$promedio= (($_REQUEST['parcial'] + $_REQUEST['final'] + $_REQUEST['Mejoramiento'])/3) ;
 echo "parcial es:".$_REQUEST['parcial']."<br>";
 echo "final es:".$_REQUEST['final']."<br>";
 echo "mejoramiento es:".$_REQUEST['mejoramiento']."<br>";
 echo "promedio es:".$_REQUEST['parcial + final + $mejoramiento'/3]."<br>";
 echo "El promedio es:".$promedio;
 }

?>

    </table>
<p>&nbsp;</p>
</form>


</body>
</html>
