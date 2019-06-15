<?php
    /* Funcion para utilizar sesiones.*/
    session_start();
    if(session_destroy()){
        header("location:../../index.php");
    }

