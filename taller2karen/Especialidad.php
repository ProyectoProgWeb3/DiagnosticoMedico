<html>
<body>
<div>
	<div>
	
		<?php
		include_once("EspecialidadCollector.php");

		$id =1;

		$EspecialidadCollectorObj = new EspecialidadCollector();

		foreach ($EspecialidadCollectorObj->showespePagina() as $c){
		  echo "<div>";

		  echo '<img id="logos" src='.$c->getfoto().'></img>';
		  echo $c->getcodespecialidad() . "   " .$c->getdescripcion();                                    
		  echo "</div>"; 
		}


		?>

		
	
	
	<div class="clear"></div>
	</div>
	
	<div class="clear"></div>
	
	
</div>
</body>
</html>
