<?php

class Paciente
{
    private $id;
    private $nombre;
    private $parcial;
    private $final;
    private $mejoramiento;
    
     function __construct($id, $nombre,$parcial, $final, $mejoramiento ) 
     {
       $this->id = $id;
       $this->nombre = $nombre;
       $this->parcial = $parcial; 
       $this->final = $final; 
       $this->mejoramiento = $mejoramiento;        
   
     }
    
      function setidAlumno($id){
        $this->idAlumno = $id;
    }
    function getid(){
        return $this->id;
    }
    function setNombre($nombre){
        $this->nombre = $nombre;
    }
    function getNombre(){
        return $this->nombre;
    }
   
    function setparcial1($parcial){
        $this->parcial1 = $parcial;
    }
    function getparcial(){
        return $this->parcial;
    }
    function setfinal($final){
        $this->final = $final;
    }
    function getfinal(){
        return $this->final;
    }
   
}

?> 

