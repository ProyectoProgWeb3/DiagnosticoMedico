<?php

$error1 = 'Problem connecting to Host';
$error2 = 'Problem connecting to MySQL';
$connect = mysql_connect ('hostmysql','usuariomysql','contraseñamysql') or die($error1);
$db = mysql_select_db ('basededatos') or die($error2);

?>