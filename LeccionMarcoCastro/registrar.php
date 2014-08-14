<html>
<?php include('metadatos.php');?>
<body>


                <div class="titulo"><h2>Registro de Notas</h2></div>
                <div class="col-2-3">
                    <div class="contenedor_registro">
                        <article>
                            <form action="registrar.php" method="post" name="contact">


                                <div class="nuevo_registro">
                                    <h3>Datos Personales</h3>

                                    <div class="leftCol">
                                        <table>
                                            <tr>
                                                <td><label for="nombre">Nombre</label></td>
                                                <td><input tabindex="1" type="text" name="nombre" id="nombre" class="txtBox" value="" /></td>

                                            </tr>
                                            <tr>
                                                <td><label for="materia">Materia</label></td>
                                                <td><input tabindex="2" type="text" name="contrasenia" id="contrasenia" class="txtBox" value="" /></td>

                                            </tr>
                                            <tr>
                                                <td><label for="parcial1">Parcial1</label></td>
                                                <td><input tabindex="3" type="text" name="parcial1" id="parcial1" class="txtBox" value="" /></td>

                                            </tr>
                                            <tr>
                                                <td><label for="parcial2">Parcial2</label></td>
                                                <td><input tabindex="4" type="text" name="parcial2" id="parcial2" class="txtBox" value="" /></td>

                                            </tr>
                                            
                                    </div>

                                    </table>
                                </div>
                                <p align="center"><input type="submit" class="button" value="Enviar" name="submit"></p>
                            </form>
                        </article>
                    </div>
                </div>


</body>
</html>