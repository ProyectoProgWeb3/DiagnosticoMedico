<html>
<?php include('metadatos.php');?>
<body>
<div class="container_24">
    <?php include('header.php'); ?>
    <div class="clear"></div>
    <?php include('menu.php'); ?>
    <div class="clear">
        <?php

        $valor=$_POST["usuarioid"];
        $valor1=$_POST["email"];
        $valor2=$_POST["clavehash"];
        $valor3=$_POST["clavehash2"];

        $valor4=$_POST["nombres"];
        $valor5=$_POST["apellidos"];
        $valor6=$_POST["sexo"];
        $valor7=$_POST["fechanac"];

        //$valor="manuel";
        echo 'Hola ' . htmlspecialchars($valor) . '!';
        include_once("PersonaCollector.php");
        $PersonaCollectorObj = new PersonaCollector();
        $idpersona= $PersonaCollectorObj->createPersona($valor4,$valor5,$valor6,$valor7);

        include_once("PacienteCollector.php");

        $PacienteCollectorObj = new PacienteCollector();
        $PacienteCollectorObj->createPaciente($valor,$valor1,$valor2,$idpersona);

        echo "valor agregado </br>";
        ?>
    </div>

    <div id="contenedor_izquierdo" class="grid_4">
        <a href="registro.php"><nav id="iniciar_sesion" class="btn btn-lg btn-primary">
                Registro
            </nav></a>
        <a href="consultas.php"><nav id="consulta" class="btn btn-lg btn-success">
                Consultas
            </nav></a>
        <a href="promociones.php"><nav id="promociones" class="btn btn-lg btn-warning">
                Promociones
            </nav></a>
    </div>

    <div id="contenedor_derecho" class="grid_20">
        <br>
        <h2><p align="center">Registro de Usuario Exitoso!</p></h2>
        <div><a href="index.php">Volver al Inicio</a></div>




    </div>

    <div class="clear"></div>
    <?php include('footer.php'); ?>



