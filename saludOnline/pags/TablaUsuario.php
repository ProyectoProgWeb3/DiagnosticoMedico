<?php
class usuario{
    public  $usuario;
	public  $contrasenia;
    public  $estado;
    public  $persona;

	public function constructor($usuario,$contrasenia,$estado,$persona)
	{
		$this->usuario=$usuario;
        $this->contrasenia=$contrasenia;
        $this->estado=$estado;
        $this->persona=$persona;
	}

	public function obtenercontrasenia()
	{
		return $this->contrasenia;
	}

	public function obtenerusuario()
	{
		return $this->usuario;
	}
    public function obtenerestado()
    {
        return $this->estado;
    }

    public function obtenerpersona()
    {
        return $this->persona;
    }
    public function establecerusuario($usuario) {
        $this->usuario = $usuario;
    }
    public function establecercontrasenia($contrasenia) {
        $this->contrasenia = $contrasenia;
    }
    public function establecerestado($estado) {
        $this->estado = $estado;
    }
    public function establecerpersona($persona) {
        $this->persona = $persona;
    }
}
if(filter_has_var(INPUT_POST,"usuario")){
    $userName=filter_input(INPUT_POST,"usuario");
    print "hola $userName!";

    $eMail=filter_input(INPUT_POST,"email");
    print "Tu Un mensaje fue enviado a tu correo electrónico $eMail!";
}
class BD{
    function conectar(){
        $conn=mysql_connect("localhost","root","") or die (mysql_error());
        mysql_select_db("saludbd",$conn);
    }
    function desconectar(){
        mysql_close();
    }
}
class usuariosColector{
    function mostrarDatos(){
        $sql="select * from usuario";
        $result=mysql_query($sql) or die (mysql_error());
        $usuarios= [];
        while($row=mysql_fetch_assoc($result)){
            $usuario= new usuario;
            foreach($row as $campo=> $value){
                $usuario->$campo=$value;
            }
            $usuarios[]=$usuario;
        }
        foreach($usuarios as $usuario)
        {
            print $usuario->obtenerusuario().'<br />';
            echo $usuario->obtenercontrasenia().'<br />';
            print $usuario->obtenerestado().'<br />';
            echo $usuario->obtenerpersona().'<br />';
        }
    }
}
$oConexion=new BD();
$oConexion->conectar();
$ousuarioColector=new usuariosColector();
$ousuarioColector->mostrarDatos();
$oConexion->desconectar();
?>
