<?php

class Empre
{
    private $idempresas;
    private $nombre;
    
     function __construct($idempresas, $nombre) {
       $this->idempresas = $idempresas;
       $this->nombre = $nombre;
     }
    
     function setidempresas($idempresas){
       $this->idempresas = $idempresas;
     } 
     function getidempresas(){
       return $this->idempresas;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
}

?> 
