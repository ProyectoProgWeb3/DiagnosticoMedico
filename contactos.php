<?php

echo <<< HERE
<nav id="contactos" class="grid_24">

	<div class="wrap-content zerogrid">
		<div class="row block05">
			<div class="title"><span>CONTACTOS</span></div>
			<div class="col-2-3">
				<div class="wrap-col">
					<article>
						<div class="comment">
							Su direccion electronica Llene los datos del formulario *
							<form>
								<div><input type="text" name="name" id="name"> Nombres *</div>
								<div><input type="email" name="email" id="email"> Email *</div>
								<div><input type="url" name="website" id="website"> Website</div>
								<div><textarea rows="10" name="comment" id="comment"></textarea></div>
								<div><input type="submit" name="submit" value="Submit"></div>
							</form>
						</div>
					</article>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<div class="box">
						<div class="heading"><h2>Encuentranos en:</h2></div>
						<div class="content">
							<img src="images/map.png"/>
							<p>Puerto Azul, Edificio Torres del Eden, Via a la Costa</p>
							<p>Telefono : +593 (04) 2078340 </p>
							<p>Celular : +593 (09) 92728868</p>
							<p>Email : anavaleria3001@hotmail.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</nav>
HERE;
?>
