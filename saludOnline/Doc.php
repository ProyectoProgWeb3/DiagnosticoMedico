<?php

class Doc
{
    private $idmedico;
    private $nombre;
    private $especialidad;
    private $foto;
    
     function __construct($idmedico, $nombre, $especialidad, $foto) {
       $this->idmedico = $idmedico;
       $this->nombre = $nombre;
       $this->especialidad = $especialidad;
       $this->foto = $foto;
     }
    
     function setIdmedico($idmedico){
       $this->idmedico = $idmedico;
     } 
     function getIdmedico(){
       return $this->idmedico;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     }
     function setEspecialidad($especialidad){
       $this->especialidad = $especialidad;
     } 
     function getEspecialidad(){
       return $this->especialidad;
     }
     function setFoto($foto){
       $this->foto = $foto;
     } 
     function getFoto(){
       return $this->foto;
     } 
}

?> 
