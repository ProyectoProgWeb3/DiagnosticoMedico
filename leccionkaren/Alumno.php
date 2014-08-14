<?php
class Alumno
{
    private $idAlumno;
    private $nombre;
    private $materia;
    private $parcial1;
    private $parcial2;


    function __construct($idAlumno, $nombre,$materia,$parcial1,$parcial2) {
        $this->idAlumno = $idAlumno;
        $this->nombre = $nombre;
        $this->materia=$materia;
        $this->parcial1=$parcial1;
        $this->parcial2=$parcial2;

    }

    function setidAlumno($idAlumno){
        $this->idAlumno = $idAlumno;
    }
    function getidAlumno(){
        return $this->idAlumno;
    }
    function setNombre($nombre){
        $this->nombre = $nombre;
    }
    function getNombre(){
        return $this->nombre;
    }
    function setmateria($materia){
        $this->materia = $materia;
    }
    function getmateria(){
        return $this->materia;
    }
    function setparcial1($parcial1){
        $this->parcial1 = $parcial1;
    }
    function getparcial1(){
        return $this->parcial1;
    }
    function setparcial2($parcial2){
        $this->parcial2 = $parcial2;
    }
    function getparcial2(){
        return $this->parcial2;
    }
}

?> 