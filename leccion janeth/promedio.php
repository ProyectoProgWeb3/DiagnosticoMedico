<?php
if(isset($_REQUEST['calcular']))
{
if $_REQUEST['nota1'] > $_REQUEST['nota2']{
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
