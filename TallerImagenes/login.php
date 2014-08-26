<?php
if(isset($_POST['submit'])){
    $dbHost = "localhost";
    $dbUser = "root";            //Usuario de la base de datos
    $dbPass = "jamp3212";            //Contraseña de la base de datos
    $dbDatabase = "proyecto";    //Nombre de la base de datos
 
    $db = mysql_connect($dbHost,$dbUser,$dbPass)or die("Error connecting to database.");
 
    mysql_select_db($dbDatabase, $db)or die("Couldn't select the database.");
 
    /*
    El siguiente código puede ir en un archivo diferente, como puede ser 'filename.php'.
    */
 
    $usr = mysql_real_escape_string($_POST['username']);
    $pas = hash('sha256', mysql_real_escape_string($_POST['password']));
    $sql = mysql_query("SELECT * FROM paciente ");
    if(mysql_num_rows($sql) == 1){
        $row = mysql_fetch_array($sql);
        session_start();
        $_SESSION['username'] = $row['username'];
        $_SESSION['fname'] = $row['first_name'];
        $_SESSION['lname'] = $row['last_name'];
        $_SESSION['logged'] = TRUE;
        header("Location: user_page.php"); // A la página a la que tenemos que ir
        exit;
    }else{
        header("Location: noticias.php");
        exit;
    }
}else{    //Si no se ha mandado nada, volvemos al index o la página del login
    header("Location: promociones.php");
    exit;
}
?>