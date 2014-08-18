<?php

class Demo
{
    private $codhistoriaclinica;
    private $paciente;
    
     function __construct($codhistoriaclinica, $paciente) {
       $this->codhistoriaclinica = $codhistoriaclinica;
       $this->paciente = $paciente;
     }
    
     function setcodhistoriaclinica($codhistoriaclinica){
       $this->codhistoriaclinica = $codhistoriaclinica;
     } 
     function getcodhistoriaclinica(){
       return $this->codhistoriaclinica;
     } 
     function setpaciente($paciente){
       $this->paciente = $paciente;
     } 
     function getpaciente(){
       return $this->paciente;
     } 
}

?> 
