<?php
class usuario{
    public  $medico;
	public  $contrasenia;
    public  $especialidad;
    public  $persona;

	public function constructor($medico,$contrasenia,$especialidad,$persona)
	{
		$this->medico=$medico;
        $this->contrasenia=$contrasenia;
        $this->especialidad=$especialidad;
        $this->persona=$persona;
	}

	public function obtenercontrasenia()
	{
		return $this->contrasenia;
	}

	public function obtenermedico()
	{
		return $this->medico;
	}
    public function obtenerespecialidad()
    {
        return $this->especialidad;
    }

    public function obtenerpersona()
    {
        return $this->persona;
    }
    public function establecermedico($medico) {
        $this->medico = $medico;
    }
    public function establecercontrasenia($contrasenia) {
        $this->contrasenia = $contrasenia;
    }
    public function establecerestado($especialidad) {
        $this->especialidad = $especialidad;
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

}

$oConexion=new BD();
$oConexion->conectar();
$orecolector=new medicosColector();
$orecolector->mostrarDatos();
$oConexion->desconectar();
?>
