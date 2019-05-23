<table class="table table-bordered">
	<tr>
		<th>#</th>
		<th>Usuario</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Email</th>
		<th>Tipo de Usuario</th>
		<th></th>
	</tr>
<?php
	require '../conector/conexion.php';

	$sql = "SELECT * FROM usuarios ORDER BY id_usuario DESC";
	$rec = mysqli_query($conn, $sql);
	$i = 0;

	while ($row = mysqli_fetch_object($rec)){
		$i++;
		$id_usuario = $row->{'id_usuario'};
		$usuario = $row->{'usuario'};
		$nombre = $row->{'nombre'};
		$apellido = $row->{'apellido'};
		$email = $row->{'email'};
		$tipo = $row->{'tipo_usuario'};
		?>
		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $usuario; ?></td>
			<td><?php echo $nombre; ?></td>
			<td><?php echo $apellido; ?></td>
			<td><?php echo $email; ?></td>
			<td><?php echo $tipo; ?></td>
			<td class="col-lg-1">
				
				<button class="btn btn-primary btn-xs" style="width: 100%;" data-toggle="modal" data-target="#myModal_editar"onclick="btn_editar('<?php echo $id_usuario; ?>');">Editar</button>
				
				<button class="btn btn-danger btn-xs" style="width: 100%; margin-top: 1%;" data-toggle="modal" data-target="#myModal_eliminar" onclick="btn_eliminar('<?php echo $id_usuario; ?>');">Elimin</button>
			</td>
		</th>
		<?php
	}
?>	
</table>

<!-- Modal -->
<div id="myModal_editar" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color: #084B8A; color:white;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Modal Editar. </h4>
      </div>
      <div class="modal-body">
        <p> Edicion .</p>
        <div id="panel_editar"></div>
        <div id="panel_respuesta_edicion"></div>
      </div>
      <div class="modal-footer">
      	<button type="button" class="btn btn-info" onclick="btn_guardar_edicion();">Guardar</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>

<!-- Modal -->
<div id="myModal_eliminar" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color: red; color:white;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Modal Eliminar. </h4>
      </div>
      <div class="modal-body">
        <p> Eliminar .</p>
        <div id="panel_eliminar">
        	
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" onclick ="btn_eliminar_dato();">Eliminar</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>