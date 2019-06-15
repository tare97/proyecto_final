<?php
    // Variable de session de php.
    session_start();
    //Si la session es cerrada seras enviado a la pagina de inicio...
    if(session_destroy()){
        header("location:../../index.php");
    }

