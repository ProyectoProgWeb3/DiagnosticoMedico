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
     function setFoto($foto){
       $this->foto = $foto;
     } 
     function getFoto(){
       return $this->foto;
     } 
}

?> 
