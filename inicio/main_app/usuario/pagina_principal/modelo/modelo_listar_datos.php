
<?php
	require '../../conexion.php';
        $id_publicacion = $_POST['id_publicacion'];
	$sql = "SELECT * FROM comentar WHERE id_publicacion = $id_publicacion  ORDER BY fecha_creacion DESC";
	$rec = mysqli_query($conn, $sql);

	while ($row = mysqli_fetch_object($rec)){
		$id_usuario = $row->{'id_usuario'};
		$comentario = $row->{'comentario'};
		$fecha = $row->{'fecha_creacion'};
		?>
<div class="comentarioslist">
    <div class="row datos_comentario">
        <div class="col-sm-6 usrc">
            <h4><?php echo $id_usuario; ?></h4>
        </div>
        <div class="col-sm-6 fechc">
            <h4><?php echo $fecha; ?></h4>
        </div>
    </div>
    <div class="row comentario_usr">
        <div class="col-sm-12 dato_comentario">
            <p><?php echo $comentario; ?></p>
        </div>
    </div>
</div>
		<?php
	}
?>	