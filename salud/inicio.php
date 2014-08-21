<?
    //Verificamos si la cookie ya se ha establecido.
    //[La cookie se establece al iniciar sesión con datos correctos]
if(isset($_COOKIE["misitio_userid"]))
    echo "Usuario con sesión iniciada <br /> <META HTTP-EQUIV='Refresh' CONTENT='1;<li><a href="index.php">Inicio</a></li>>";
    //En caso contrario indicamos que no se ha iniciado sesión.
    //Y poner un link mediante HTML para ir al formulario de inicio.
else
    echo "No haz iniciado sesión <br /> <a href= login/iniciarsesion.html'>Iniciar Sesión</a>";
?>