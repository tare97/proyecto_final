
<?php
        // conexion con la base de datos.
	require '../../conexion.php';
        // Dato resivido de el ajax.
        $id_publicacion = $_POST['id_publicacion'];
        //Consulta.
	$sql = "SELECT * FROM comentar WHERE id_publicacion = $id_publicacion  ORDER BY fecha_creacion DESC";
	$rec = mysqli_query($conn, $sql);
        //Bucle para mostrar todos los comentarios.
	while ($row = mysqli_fetch_object($rec)){
		$id_usuario = $row->{'id_usuario'};
		$comentario = $row->{'comentario'};
		$fecha = $row->{'fecha_creacion'};
		?>
<!--Contenido de la vista-->
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
