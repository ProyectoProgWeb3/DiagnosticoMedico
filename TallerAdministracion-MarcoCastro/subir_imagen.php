<SCRIPT LANGUAGE="JavaScript">
    function popUp(URL) {
        day = new Date();
        id = day.getTime();
        eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=1,statusbar=1,menubar=0,resizable=0,width=500,height=500,left = 710,top = 290');");
    }
</script>
<?php
if(!isset($_POST['enviar'])){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Subir imagen</title>
</head>

<body>
<form method='post' action='?subida' enctype='multipart/form-data'>
    <table width="100%" border="0" cellspacing="10">
        <tr>
            <td align="center"><h1 style="text-align:center;">Subir imagen</h1></td>
        </tr>
        <tr>
            <td align="center">Selecciona la imagen<br /><input name="img1" type="file" /></td>
        </tr>

        <tr>
            <td align="center">
                Imagen: <input type="text" id="img"/>
                <a href="javascript:popUp('subir_imagen.php');">[ Subir imagen ]</a>
            </td>
        </tr>
        <tr>
            <td align="center" ><input name='enviar' type='submit' value='Subir' />
            </td>
        </tr>
    </table>
</form>
<?php
}else{
    //SUBIMOS LA IMAGEN
    if (is_uploaded_file($HTTP_POST_FILES['img1']['tmp_name'])){
        //recojo la imagen
        $imagen = $HTTP_POST_FILES['img1']['name'];
        //Obtengo el nombre de la imagen y la extensión de la foto
        $imagen1 = explode(".",$imagen);
        if(($imagen1[1] == "jpg") || ($imagen1[1] == "png")){
            //Genero un nombre aleatorio con números y se asigno la extensión obtenida anteriormente
            $imagen2 = rand(0,9).rand(100,9999).rand(100,9999).".".$imagen1[1];
            //Coloco la imagen en la carpeta correspondiente con el nuevo nombre
            move_uploaded_file($HTTP_POST_FILES['img1']['tmp_name'], "/home/propietario/PhpstormProjects/DiagnosticoMedico/TallerAdministracion-MarcoCastro/".$imagen2);
            //Asigno a la foto permisos
            $ruta="../TallerAdministracion-MarcoCastro/".$imagen2;
            chmod($ruta,0777);
            //MANDAMOS LA URL AL FORMULARIO
            echo "<script>
                  window.opener.document.getElementById('img').value = '/home/propietario/PhpstormProjects/DiagnosticoMedico/TallerAdministracion-MarcoCastro/".$imagen2."';
                    alert('Imagen subida correctamente');
                  window.close();
                  </script>";
        }else{
            echo "<br><br><p align='center'><span style='color:red;font-size:28px;'>Solo se permiten fotograf&iacute;as .jpg y .png</span></p>";
            echo "<p align='center'><a href='subir_imagen.php'><span style='font-size:28px;'>Volver atr&aacute;s</span></a></p>";
        }
    }
}
?></center>
</body>
</html>