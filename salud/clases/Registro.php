<?php

/**
 * Clase de registro
 * maneja el registro de usuarios
 */
class Registro
{
    /**
     * objecto $conexionBd La conexion a la base de datos
     */
    private $conexionBd = null;
    /**
     * arreglo $errores Colección de mensajes de error
     */
    public $errores = array();
    /**
     * arreglo $mensajes Colección de mensajes de éxito/neutral
     */
    public $mensajes = array();

    /**
     * la función "__construct ()" inicia automáticamente cada vez que se crea un objeto de esta clase,
     * cuando se hace "$registro = new Registro();"
     */
    public function __construct()
    {
        if (isset($_POST["registro"])) {
            $this->registrarNuevoUsuario();
        }
    }

    /**
     * maneja todo el proceso de registro. comprueba todas las posibilidades de error
     * y crea un nuevo usuario en la base de datos si todo está bien
     */
    private function registrarNuevoUsuario()
    {
        if (empty($_POST['usuarioId'])) {
            $this->errores[] = "UsuarioId vacío";
        } elseif (empty($_POST['clave']) || empty($_POST['claveRepetir'])) {
            $this->errores[] = "Contraseña vacía";
        } elseif ($_POST['clave'] !== $_POST['claveRepetir']) {
            $this->errores[] = "Contraseña y su repetición no son la misma";
        } elseif (strlen($_POST['clave']) < 6) {
            $this->errores[] = "Contraseña tiene una longitud mínima de 6 caracteres";
        } elseif (strlen($_POST['usuarioId']) > 64 || strlen($_POST['usuarioId']) < 2) {
            $this->errores[] = "Nombre de usuario no puede ser inferior a 2 o más de 64 caracteres";
        } elseif (!preg_match('/^[a-z\d]{2,64}$/i', $_POST['usuarioId'])) {
            $this->errores[] = "Nombre de usuario no se ajusta a la estructura de nombres: sólo A-Z y números están permitidos, de 2 a 64 caracteres";
        } elseif (empty($_POST['email'])) {
            $this->errores[] = "Email no puede ser vacío";
        } elseif (strlen($_POST['email']) > 64) {
            $this->errores[] = "El correo electrónico no puede tener más de 64 caracteres";
        } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $this->errores[] = "Su dirección de correo electrónico no está en un formato de correo electrónico válida";
        } elseif (!empty($_POST['usuarioId'])
            && strlen($_POST['usuarioId']) <= 64
            && strlen($_POST['usuarioId']) >= 2
            && preg_match('/^[a-z\d]{2,64}$/i', $_POST['usuarioId'])
            && !empty($_POST['email'])
            && strlen($_POST['email']) <= 64
            && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)
            && !empty($_POST['clave'])
            && !empty($_POST['claveRepetir'])
            && ($_POST['clave'] === $_POST['claveRepetir'])
        ) {
            // crear una conexión de base de datos
            $this->conexionBd = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

            // cambiar el conjunto de caracteres a utf8 y comprobar
            if (!$this->conexionBd->set_charset("utf8")) {
                $this->errores[] = $this->conexionBd->error;
            }

            // Si no hay Errores de conexión (= conexión está trabajando)
            if (!$this->conexionBd->connect_errno) {

                // escape, además remueve todo lo que podría ser código (html / Javascript-)
                $usuarioId = $this->conexionBd->real_escape_string(strip_tags($_POST['usuarioId'], ENT_QUOTES));
                $email = $this->conexionBd->real_escape_string(strip_tags($_POST['email'], ENT_QUOTES));

                $clave = $_POST['clave'];

                // encriptar la contraseña del usuario con la función de PHP 5.5 password_hash(), da como resultado en 60 carácteres de
                // cadena hash. la constante PASSWORD_DEFAULT está definida por PHP 5.5, o si se está utilizando
                // PHP 5.3/5.4, por la Librería para compatibilidad de hash de contraseñas
                $claveHash = password_hash($clave, PASSWORD_DEFAULT);

                // comprobar si ya existe de usuario o dirección de correo electrónico
                $sql = "SELECT * FROM paciente WHERE usuarioid = '" . $usuarioId . "' OR email = '" . $email . "';";
                $query_check_user_name = $this->conexionBd->query($sql);

                if ($query_check_user_name->num_rows == 1) {
                    $this->errores[] = "Lo sentimos, ese nombre de usuario / correo electrónico ya está en uso.";
                } else {
                    // escribir datos nuevos de usuario en la base de datos
                    $sql = "INSERT INTO paciente (usuarioid, clavehash, email)
                            VALUES('" . $usuarioId . "', '" . $claveHash . "', '" . $email . "');";
                    $query_new_user_insert = $this->conexionBd->query($sql);

                    // si el usuario se ha agregado con éxito
                    if ($query_new_user_insert) {
                        $this->mensajes[] = "Su cuenta ha sido creado con éxito. Ahora puede iniciar sesión.";
                    } else {
                        $this->errores[] = "Lo sentimos, tu inscripción falló. Por favor, regrese y vuelva a intentarlo.";
                    }
                }
            } else {
                $this->errores[] = "Lo sentimos, no hay conexión de base de datos.";
            }
        } else {
            $this->errores[] = "Ha ocurrido un error desconocido.";
        }
    }
}
