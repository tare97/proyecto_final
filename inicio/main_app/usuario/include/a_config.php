<?php

/* 
 Este fichero detecta en que pagina estamos y ajusta las variables que luego 
 van a mostrar ese contenido si tu estas usando bd la cadena de conexion 
 tambien ira aqui
*/

    switch($_SERVER["SCRIPT_NAME"]){
        /* Primer caso: Pgína de perfil */
        case "/proyecto_final/inicio/main_app/usuario/perfil.php":
            $CURRENT_PAGE = "Perfil";
            $PAGE_TITLE = "EnjoyArt - Perfil";
            break;
        /* Segundo caso: Pgína para añadir publicaciones */
        case "/proyecto_final/inicio/main_app/usuario/aniadirPublic.php":
            $CURRENT_PAGE = "NewPublic";
            $PAGE_TITLE = "EnjoyArt - Nueva Publicacion";
            break;
        /* Sino es niguno de los anteriores ira a la Pagína de incio */
        default:
            $CURRENT_PAGE = "Index";
            $PAGE_TITLE = "EnjoyArt - Pagína Principal";
            break;
    }

?>