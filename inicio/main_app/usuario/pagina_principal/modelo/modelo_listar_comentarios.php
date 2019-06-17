
<?php
        //funcion para utilizar sesiones.
        session_start();
        // conexion con la base de datos.
	require '../../conexion.php';
        // Dato resivido de el ajax.
        $id_publicacion = $_POST['id_publicacion'];
        //Consulta.
	$sql = "SELECT * FROM comentar WHERE id_publicacion = $id_publicacion  ORDER BY fecha_creacion DESC";
	$rec = mysqli_query($conn, $sql);
        //Bucle para mostrar todos los comentarios.
	while ($row = mysqli_fetch_object($rec)){
                $id_comentario = $row->{'id_comentario'};
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
        <div class="col-sm-8 dato_comentario">
            <p><?php echo $comentario; ?></p>
        </div>
        <div class="col-sm-3 col-sm-offset-1">
            <?php
            // Condicion: Solo aparecera el boton eliminar cuando la publicacion 
            // tenga el mismo id usuario que el de la sesion.
            if($_SESSION['id_usuario'] == $id_usuario){
            ?>
            <button type="submit" id="eliminar_coment" class="btn btn-danger" onclick="btn_eliminar_coment(<?php echo $id_comentario; ?>);">Elíminar</button>
            <?php
            }
            ?>
            
        </div>
    </div>
</div>
		<?php
	}
?>	
