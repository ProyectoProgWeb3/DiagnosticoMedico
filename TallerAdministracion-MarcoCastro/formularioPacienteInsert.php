<!DOCTYPE html>
<!--<SCRIPT LANGUAGE="JavaScript">
    function popUp(URL) {
        day = new Date();
        id = day.getTime();
        eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=1,statusbar=1,menubar=0,resizable=0,width=500,height=500,left = 710,top = 290');");
    }
</script>
-->
<html>
<head>
<meta charset="utf-8" />
<title>formulario Paciente</title>
    <script type="text/javascript">
        function comprobar() {
            var mirarLargo="no";
            var mirarIgual="no";
            var contra1 = document.formulario.clavehash
            var contra2 = document.formulario.clavehash2
            var aviso = document.getElementById("aviso");
            aviso.innerHTML = ""
            if (contra1.value.length >= 6) {
                mirarLargo = "si"
            }
            else {
                texto = "La contraseña debe tener más de 6 caracteres.<br/>"
                aviso.innerHTML += texto
            }
            if (contra1.value == contra2.value) {
                mirarIgual = "si"
            }
            else {
                texto = "La contraseña y su repetición deben ser iguales.<br/>"
                aviso.innerHTML += texto
            }
            if (mirarLargo == "no" || mirarIgual == "no") {
                return false
            }
        }
        function restaurar() {
            var aviso = document.getElementById("aviso");
            aviso.innerHTML = ""
        }
    </script>

</head>
<body>
<form name="formulario" action="insertar.php" method="post"  onsubmit="return comprobar()">
<p>
ID Usuario: <input type="text" name="usuarioid" autofocus required />
Email: <input type="text" name="email" autofocus required />
Contraseña: <input type="text" name="clavehash" autofocus required />
Repetir Contraseña: <input type="text" name="clavehash2" autofocus required />
    Nombres: <input type="text" name="nombres" autofocus required />
    Apellidos: <input type="text" name="apellidos" autofocus required />
    Fecha Nacimiento: <input type="text" name="fechanac" autofocus required />
    Genero: <input type="text" name="sexo" autofocus required />
<!--    Imagen: <input type="text" id="img"/>-->
<!--    <a href="javascript:popUp('subir_imagen.php');">[ Subir imagen ]</a>-->
</p>
<input type="submit" value="Submit!" />

</form>
<p id="aviso"></p>


