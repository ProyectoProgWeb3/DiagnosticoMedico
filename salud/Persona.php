<?php

class Persona
{

    private $codpersona;
    private $nombres;
    private $apellidos;
    private $sexo;
    private $fechanac;
    private $direccion;
    
     function __construct($codpersona, $nombres,$apellidos,$sexo,$fechanac,$direccion) {
       $this->codpersona = $codpersona;
       $this->nombres = $nombres;
       $this->apellidos=$apellidos;
       $this->sexo=$sexo;
       $this->fechanac=$fechanac;
       $this->direccion=$direccion;
     }
    
     function setcodpersona($codpersona){
       $this->codpersona = $codpersona;
     } 
     function getcodpersona(){
       return $this->codpersona;
     } 
     function setnombres($nombres){
       $this->nombres = $nombres;
     } 
     function getnombres(){
       return $this->nombres;
     }
    function setapellidos($apellidos){
        $this->apellidos = $apellidos;
    }
    function getapellidos(){
        return $this->apellidos;
    }
    function setSexo($sexo){
        $this->sexo = $sexo;
    }
    function getSexo(){
        return $this->sexo;
    }
    function setFechanac($fechanac){
        $this->fechanac = $fechanac;
    }
    function getFechanac(){
        return $this->fechanac;
    }
    function setDireccion($direccion){
        $this->sexo = $direccion;
    }
    function getDireccion(){
        return $this->direccion;
    }
}

?> 
