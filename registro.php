<?php

    $userName=filter_input(INPUT_POST,"nombre");
    print "hola $userName!";

    $eMail=filter_input(INPUT_POST,"email");
    print "Tu Un mensaje fue enviado a tu correo electrónico $eMail!";


?>
