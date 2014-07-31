<?php

echo <<< HERE
<div id="slider1">
  <div class="slider-wrapper theme-default">
    <div id="slider" class="nivoSlider"> <img src="M_S/Images/toystory.jpg" data-thumb="M_S/Images/toystory.jpg" alt="" /> <img src="M_S/Images/up.jpg" data-thumb="M_S/Images/up.jpg" alt="" title="Somos responsables de tu salud!" /></a> <img src="M_S/Images/walle.jpg" data-thumb="M_S/Images/walle.jpg" alt="" data-transition="slideInLeft" /> <img src="M_S/Images/nemo.jpg" data-thumb="M_S/Images/nemo.jpg" alt="" title="#htmlcaption" /> </div>
    <div id="htmlcaption" class="nivo-html-caption"> <strong></strong> Contamos con cobertura a nivel nacional..! <em></em> .. </div>
  </div>
</div>


<!-- xxxxxxxxxxxxxxxxxxxx para el slider       xxxxxxxxxxxxxxxxxxxxxxxxxxx -->
<script type="text/javascript" src="M_S/scripts/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="M_S/scripts/jquery.nivo.slider.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
    
	<link rel="stylesheet" href="M_S/themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="M_S/themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="M_S/themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="M_S/themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="M_S/CSS_Menu/nivo-slider.css" type="text/css" media="screen" />   
 <!-- xxxxxxxxxxxxxxxxxxxx            slider       xxxxxxxxxxxxxxxxxxxxxxxxxxx -->   
  
	

HERE;
?>
