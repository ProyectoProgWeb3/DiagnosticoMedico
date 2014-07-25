<?php
class recolector{

    function conectar(){
        $conn=mysql_connect("localhost","root","") or die (mysql_error());
        mysql_select_db("saludbd",$conn);
    }
    function desconectar(){
        mysql_close();
    }
}
    function mostrarDatos(){
        $sql="select * from medico";
        $result=mysql_query($sql) or die (mysql_error());
        $medicos= [];
        while($row=mysql_fetch_assoc($result)){
            $medico= new medico;
            foreach($row as $campo=> $value){
                $medico->$campo=$value;
            }
            $medicos[]=$medico;
        }
        foreach($medicos as $medico)
        {
            print $medico->obtenermedico().'<br />';
            echo $medico->obtenercontrasenia().'<br />';
            print $medico->obtenerestado().'<br />';
            echo $medico->obtenerpersona().'<br />';
        }
    }
}