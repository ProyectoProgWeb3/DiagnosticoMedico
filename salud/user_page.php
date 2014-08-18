<?php

session_start();
if(!$_SESSION['sesion_usuario']){
    header("Location:iniciar.php");
    exit;
}

header("Location:histo.php");
    exit;
?>
