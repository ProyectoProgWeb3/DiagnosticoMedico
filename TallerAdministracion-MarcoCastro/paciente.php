<?php

class Paciente
{
    private $codpaciente;
    private $persona;
    private $email;
    private $usuarioid;
    private $clavehash;
    
     function __construct($codpaciente, $usuarioid,$persona,$email,$clavehash) {
       $this->codpaciente = $codpaciente;
       $this->usuarioid = $usuarioid;
         $this->persona = $persona;
         $this->email = $email;
         $this->clavehash = $clavehash;
     }
    
     function setcodpaciente($codpaciente){
       $this->codpaciente = $codpaciente;
     } 
     function getcodpaciente(){
       return $this->codpaciente;
     } 
     function setusuarioid($usuarioid){
       $this->usuarioid = $usuarioid;
     } 
     function getusuarioid(){
       return $this->usuarioid;
     }

    function setpersona($persona){
        $this->persona = $persona;
    }
    function getpersona(){
        return $this->persona;
    }
    function setemail($email){
        $this->email = $email;
    }
    function getemail(){
        return $this->email;
    }
    function setclavehash($clavehash){
        $this->clavehash= $clavehash;
    }
    function getclavehash(){
        return $this->clavehash;
    }
}

?> 
