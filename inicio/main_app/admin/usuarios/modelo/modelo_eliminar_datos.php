<?php
//Elementos que resive del ajax.
$id_usuario = $_POST['id_usuario'];
//Conexion con la base de datos.
require '../conector/conexion.php';

    //Consulta: Eliminar de la tabla mientras el id_usuario se el mismo que el resivido del ajax.
    $sql1 = "DELETE FROM `usuarios` WHERE `usuarios`.`id_usuario` = $id_usuario";
    //Envia la consulta a la base datos.
    $reg = mysqli_query($conn, $sql1);
    if ($reg == TRUE) {
        //Mensaje de error positivo.
        echo "Borrado realizado";	
    }else{
        //Mensaje de error negativo.
        echo "El borrado no a podido ser realizado, intentelo mas tarde.";
    }

