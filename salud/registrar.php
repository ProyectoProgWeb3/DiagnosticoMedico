<?php
class register
{
    public $user;
    public $contrasenia;
    public $recontrasenia;
    public $email;
    public $nombres;
    public $consulta;
    public $numrows;
    public $error;
    public $error2;
    public $error3;
    public $error4;
    public $ok;
    public $fields;
    public $regconsulta;

    public function __construct($usuario, $contrasenia, $repeatcontrasenia,  $email, $nombres)
    {
        include "config.php";
        $this->user         =    $usuario;
        $this->contrasenia        =    $contrasenia;
        $this->recontrasenia    =    $repeatcontrasenia;
        $this->email        =    $email;
        $this->nombres        =    $nombres;
        $this->consulta        =    mysql_consulta("SELECT * FROM users WHERE usuario = '".$this->user."'");
        $this->numrows        =    mysql_num_rows($this->consulta);
        $this->error        =    "Nombre de usuario en uso.";
        $this->error2        =    "Las contraseñas no coinciden";
        $this->error3        =    "Nombre completo y/o nombre de usuarios superan los 25 caracteres.";
        $this->error4        =    "La contraseña debe tener un minimo de 6 caracteres y un maximo de 25";
        $this->ok            =    "Te has registrado correctamente";
        $this->fields        =    "Por favor, rellena todos los campos.";
    }
    public function check()
    {
        if($this->numrows!=0)
        {
            die ($this->error);
        }
        if($this->user&&$this->contrasenia&&$this->email&&$this->nombres)
        {
            if($this->contrasenia == $this->recontrasenia)
            {
                if(strlen($this->usuario)>25||strlen($this->nombres)>25)
                {
                    echo $this->error3;
                }
                else
                {
                    if(strlen($this->contrasenia)>25||strlen($this->contrasenia)<6)
                    {
                        echo $this->error4;
                    }
                    else
                    {
                        $this->contrasenia = md5($this->contrasenia);
                        $register = mysql_consulta("INSERT INTO `users` (`id`, `nombres`, `usuario`, `contrasenia`, `email`, `admin`) VALUES (NULL, '".$this->nombres."', '".$this->user."', '".$this->contrasenia."', '".$this->email."', '0')");
                        echo $this->ok;
                    }
                }
            }
            else
            {
                echo $this->error2;
            }
        }
        else
        {
            echo $this->fields;
        }
    }
}
include_once "limpiar.php";
$reg = new register(clear($_POST['usuario']), clear($_POST['contrasenia']), clear($_POST['repeatcontrasenia']), clear($_POST['email']), clear($_POST['nombres']));
echo $reg->check();
?>