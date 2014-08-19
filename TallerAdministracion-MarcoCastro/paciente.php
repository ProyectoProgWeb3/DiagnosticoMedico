<?php

class Paciente
{
    private $idPaciente;
    private $persona;
    private $email;
    private $usuarioid;
    private $clavehash;
    
     function __construct($idPaciente, $usuarioid,$persona,$email,$clavehash) {
       $this->idPaciente = $idPaciente;
       $this->usuarioid = $usuarioid;
         $this->persona = $persona;
         $this->email = $email;
         $this->clavehash = $clavehash;
     }
    
     function setIdPaciente($idPaciente){
       $this->idPaciente = $idPaciente;
     } 
     function getIdPaciente(){
       return $this->idPaciente;
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
