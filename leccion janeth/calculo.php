<?php
print("Parcial 1.- ".$_POST["parcial"]."<br>");
print("Parcial 2.- ".$_POST["final"]."<br>");
$a=$_POST["parcial"];
$b=$_POST["final"];
$c=$_POST["mejor"];
if $a>$b
{
  $suma = ($a+$c)/2;
}
else
  $suma = ($b+$c)/2;  
}  

if($suma>60)
{
print("<font color=blue>aprobo con promedio ".$suma."<br>");
}
else
{
print("<font color=red> reprovo con promedio ".$suma."<br>");
}
?>

