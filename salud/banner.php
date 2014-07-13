<?php

echo <<< HERE
<nav id="galeria" class="grid_19">
		
		<div class="slider-wrapper">
			<div id="slider">
				<div class="slide1">
					<img src="img/img1.jpg" alt="" />
				</div>
				<div class="slide2">
					<img src="img/img2.jpg" alt="" />
				</div>
				<div class="slide3">
					<img src="img/img3.jpg" alt="" />
				</div>
				<div class="slide4">
					<img src="img/img4.jpg" alt="" />
				</div> 
			</div>
			<div id="slider-direction-nav"></div>
			<div id="slider-control-nav"></div>
		</div>
		
		<script type="text/javascript">
		$(document).ready(function() {
			var slider = $('#slider').leanSlider({
				directionNav: '#slider-direction-nav',
				controlNav: '#slider-control-nav'
			});
		});
		</script>
	
</nav>
HERE;
?>
