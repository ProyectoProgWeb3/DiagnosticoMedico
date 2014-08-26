
<?php

class espe
{
    private $codespecialidad;
    private $descripcion;
    private $foto;
    
     function __construct($codespecialidad, $descripcion, $foto) {
       $this->codespecialidad = $codespecialidad;
       $this->descripcion = $descripcion;
       $this->foto = $foto;
     }
    
     function setcodespecialidad($codespecialidad){
       $this->codespecialidad = $codespecialidad;
     } 
     function getcodespecialidad(){
       return $this->codespecialidad;
     } 
     function setdescripcion($descripcion){
       $this->descripcion = $descripcion;
     } 
     function getdescripcion(){
       return $this->descripcion;
     }
     function setfoto($foto){
       $this->foto = $foto;
     } 
     function getfoto(){
       return $this->foto;
     } 
}

?> 

