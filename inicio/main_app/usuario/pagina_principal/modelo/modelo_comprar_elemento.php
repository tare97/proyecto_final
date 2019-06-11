<?php
session_start();
$id_publicacion = $_POST['id_publicacion'];
$precio = $_POST['precio'];



require '../../conexion.php';

$sql = 'SELECT * FROM comprar';
$rec = mysqli_query($conn, $sql);


$sql1 = "INSERT INTO `comprar`(`id_usuario`, `id_publicacion`, precio) VALUES (" . $_SESSION['id_usuario'] . ", $id_publicacion, $precio)";
$reg = mysqli_query($conn, $sql1);
if ($reg == TRUE) {
        ?>
        <br>
        <br>
        <?php
	echo "Compra realizada, debe darle a transferir para continuar...";	
        ?>
         <button type="button" class="btn btn-info" onclick ="btn_cambio_elemento(<?php echo $id_publicacion; ?>);">Transferir</button>
        <?php
}else{
    echo "<br>Publicación no a podido ser comprada, intentelo mas tarde (No olvide introducir el importe).";
}


?>

