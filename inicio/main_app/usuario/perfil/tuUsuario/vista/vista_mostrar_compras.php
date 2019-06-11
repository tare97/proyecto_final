<?php
session_start();
require_once '../../../conexion.php';
$id_usuario = $_SESSION['id_usuario'];


$sql6 = "SELECT * FROM comprar WHERE id_usuario=$id_usuario";
$rect = mysqli_query($conn, $sql6);
while($res = mysqli_fetch_array($rect)){
    //Estructura de lo que aparecera en el panel-->
    ?>
    <p>-La publicacion, <?php echo $res['id_publicacion']; ?> ha sido adquirida por <?php echo $res['precio']; ?> €.</p>
    <?php
}




