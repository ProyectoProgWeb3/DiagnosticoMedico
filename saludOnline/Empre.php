<?php

class Empre
{
    private $idempresas;
    private $nombre;
    private $foto;
    
     function __construct($idempresas, $nombre, $foto) {
       $this->idempresas = $idempresas;
       $this->nombre = $nombre;
       $this->foto = $foto;
     }
    
     function setIdempresas($idempresas){
       $this->idempresas = $idempresas;
     } 
     function getIdempresas(){
       return $this->idempresas;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     }
     function setFoto($foto){
       $this->foto = $foto;
     } 
     function getFoto(){
       return $this->foto;
     } 
}

?> 
