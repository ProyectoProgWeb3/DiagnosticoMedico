<?php

class Paciente
{
    private $codpaciente;
    private $login;
    
     function __construct($codpaciente, $login) 
     {
       $this->codpaciente = $codpaciente;
       $this->login = $login;
   
     }
    
     function setcodpaciente($codpaciente){
       $this->codpaciente = $codpaciente;
     } 
     
     function getcodpaciente(){
       return $this->codpaciente;
     } 
     
    function setlogin($login){
       $this->login = $login;
     } 
     
     function getlogin(){
       return $this->login;
     }      
   
}

?> 

