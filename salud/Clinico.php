<?php

class Clinico
{
    private $paciente;
    private $tratamiento;
    
     function __construct($paciente, $tratamiento) 
     {
       $this->paciente = $paciente;
       $this->tratamiento = $tratamiento;
   
     }
    
     function setpaciente($paciente){
       $this->paciente = $paciente;
     } 
     
     function getpaciente(){
       return $this->paciente;
     } 
     
    function setratamiento($tratamiento){
       $this->tratamiento = $tratamiento;
     } 
     
     function getratamiento(){
       return $this->tratamiento;
     }      
   
}

?> 

