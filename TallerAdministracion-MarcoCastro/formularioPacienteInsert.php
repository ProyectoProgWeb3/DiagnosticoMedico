<!DOCTYPE html>
<SCRIPT LANGUAGE="JavaScript">
    function popUp(URL) {
        day = new Date();
        id = day.getTime();
        eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=1,statusbar=1,menubar=0,resizable=0,width=500,height=500,left = 710,top = 290');");
    }
</script>

<html>
<head>
<meta charset="utf-8" />
<title>formulario Paciente</title>
</head>
<body>
<form action="insert.php" method="post" >
<p>
Nombre: <input type="text" name="usuarioid" autofocus required />
    Imagen: <input type="text" id="img"/>
    <a href="javascript:popUp('subir_imagen.php');">[ Subir imagen ]</a>
</p>
<input type="submit" value="Submit!" />

</form>

