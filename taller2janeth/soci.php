<?php

class soci
{
    private $idsocios;
    private $nombre;
    private $foto;
    
     function __construct($idsocios, $nombre, $foto) {
       $this->idsocios = $idsocios;
       $this->nombre = $nombre;
       $this->foto = $foto;
     }
    
     function setIdsocios($idsocios){
       $this->idsocios = $idsocios;
     } 
     function getIdsocios(){
       return $this->idsocios;
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
