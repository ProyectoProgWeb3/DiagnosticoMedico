<?php
session_start();
if(!$_SESSION['logged']){
    header("Location:socios.php");
    exit;
}
echo 'Welcome, '.$_SESSION['username'];
?>