<html>

<body>

<?php

 
  function sql_dump_result($result) 
  { 
    $line = ''; 
    $head = '';
	
  while($temp = mysql_fetch_assoc($result)) 
  { 
    if(empty($head)) 
    { 
      $keys = array_keys($temp); 
      $head = '<tr><th>' . implode('</th><th>', $keys). '</th></tr>'; 
    }
	
    $line .= '<tr><td>' . implode('</td><td>', $temp). '</td></tr>'; 
  }
  
  return '<table>' . $head . $line . '</table>'; 
}

$link = mysql_connect("localhost", "root", "jamp3212");

mysql_select_db("proyecto", $link);

$resultado = mysql_query("SELECT * FROM especialidad", $link);

  // Muestra el contenido de la tabla como una tabla HTML	
  echo sql_dump_result($resultado); 
  
  // Libera la memoria del resultado
  mysql_free_result($resultado);

  // Cierra la conexión con la base de datos 
  mysql_close($iden); 

?>

</body>

</html>
