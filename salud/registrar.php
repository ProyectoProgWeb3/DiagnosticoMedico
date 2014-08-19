<?php

/**
 * Registro de Usuario

 */

// comprobando versión mínima de PHP
if (version_compare(PHP_VERSION, '5.3.7', '<')) {
    exit("Lo sentimos, la sesión PHP no se ejecuta en una versión menor que PHP 5.3.7!");
} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
    // si se está usando PHP 5.3 o PHP 5.4 se tiene que incluir password_api_compatibility_library.php
    // (esta biblioteca agrega las funciones de hash de contraseñas  de PHP5.5 para las versiones anteriores de PHP)
    require_once("librerias/password_compatibility_library.php");
}

// incluir las configuraciones / constantes para la conexión de base de datos
require_once("configuracion/bd.php");

// cargar la clase Registro
require_once("clases/Registro.php");

// crear el objeto de Registro. cuando se crea este objeto, hará todas las cosas de Registro automáticamente
// por lo que esta sola línea se encarga de todo el proceso de Registro de nuevo usuario.
$registro = new Registro();

// mostrar la vista de registro (con el formulario de Registro y Mensajes/Errores)
include("vistas/registrar.php");
