
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Leccion</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<script type="text/javascript">
function es_numero(input){
return !isNaN(input)&&parseInt(input)==input;
    }
    //ahora verificas que sea no sea mayor que 5
    function comprobar(){
  
    var lparcial = document.getElementById('parcial').value;  
    if(es_numero(lparcial)){
    if(lparcial =< 100){
    alert("Debe estar entre 0-100\n\rsu número: " + lparcial);
    document.getElementById('parcial').value= 0;
    }
    } else{
    alert("Debe ingresar nota parcial entre 0 -100");
    }
     
    }
    //]]>
    

    
    </script>
    </head>
<body>
	  <div >
    <form action="#">
	   <br>
	   <br>
     
		    <form method="post" action="calculo.php" autocomplete="off">
		    Nombre:<br>
		    <input type="text" name="nombUsuario" id="nombUsuario" title="Ingresa tu nombre"><br><br>
		    parcial:<br>
		    <input type="text" name="parcial" id="parcial" onblur="comprobar()" ><br><br>
 		    final:<br>
		    <input type="text" name="final" id="final" title="Nota Final"><br><br>
		    Mejoramiento:<br>
		    <input type="text" name="mejor" id="mejor" title="Mejoramiento"><br><br>		    
		    <input type="submit" name="submit" value="Enviar">
		
    </p>
    </form>
  </div>
    </body>
    </html>





