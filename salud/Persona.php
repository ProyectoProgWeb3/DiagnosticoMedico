<?php

class Persona
{

    private $idPersona;
    private $nombre;
    private $apellido;
    private $sexo;
    private $fechanac;
    private $direccion;
    
     function __construct($idPersona, $nombre,$apellido,$sexo,$fechanac,$direccion) {
       $this->idPersona = $idPersona;
       $this->nombre = $nombre;
       $this->apellido=$apellido;
       $this->sexo=$sexo;
       $this->fechanac=$fechanac;
       $this->direccion=$direccion;
     }
    
     function setidPersona($idPersona){
       $this->idPersona = $idPersona;
     } 
     function getidPersona(){
       return $this->idPersona;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     }
    function setApellido($apellido){
        $this->apellido = $apellido;
    }
    function getApellido(){
        return $this->apellido;
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
