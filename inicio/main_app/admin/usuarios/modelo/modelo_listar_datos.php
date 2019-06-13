<!--Vista de usuarios en la tabla-->
<!--Parte superior de la vista de elementos-->
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
        //conexion con la base de datos.
	require '../conector/conexion.php';
        //Consulta: Seleccionar todos los elementos de la tabla usuarios mientras el id sea el resivido del ajax.
	$sql = "SELECT * FROM usuarios ORDER BY id_usuario DESC";
        //Envia la consulta a la base datos.
	$rec = mysqli_query($conn, $sql);
        //Contador para listar los elementos.
	$i = 0;
        //rientado a objetos, recuperador de elementos de la base de datos.
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
                        <!--Elementos a mostrar de la base de datos-->
			<td><?php echo $i; ?></td>
			<td><?php echo $usuario; ?></td>
			<td><?php echo $nombre; ?></td>
			<td><?php echo $apellido; ?></td>
			<td><?php echo $email; ?></td>
			<td><?php echo $tipo; ?></td>
			<td class="col-lg-1">
				<!--Boton de modificacion-->
				<button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal_editar"onclick="btn_editar('<?php echo $id_usuario; ?>');">Editar</button>
				<!--Boton de eliminacion-->
				<button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal_eliminar" onclick="btn_eliminar('<?php echo $id_usuario; ?>');">Elimin</button>
			</td>
		</th>
		<?php
	}
?>	
</table>

<!-- Modal de edicion-->
<div id="myModal_editar" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Contenido del modal -->
    <div class="modal-content">
      <!--Parte superior-->
      <div class="modal-header edit">
        <!--Boton de eliminacion-->
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Modal Editar. </h4>
      </div>
      <div class="modal-body">
        <p> Edicion .</p>
        <div id="panel_editar"></div>
        <div id="panel_respuesta_edicion"></div>
      </div>
      <div class="modal-footer">
        <!--Botones para gurdar los cambios-->
      	<button type="button" class="btn btn-info" onclick="btn_guardar_edicion();">Guardar</button>
        <!--Boton para cerrar el modal -->
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>

<!-- Modal de eliminacion-->
<div id="myModal_eliminar" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Contenido del modal -->
    <div class="modal-content">
      <!--Parte superior-->
      <div class="modal-header delet">
        <!--Boton para quitar el modal-->
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <!--Titulo del modal-->
        <h4 class="modal-title"> Modal Eliminar. </h4>
      </div>
      <div class="modal-body">
        <p> Eliminar .</p>
        <div id="panel_eliminar">
        	<!--Div donde aparece la vista de la eliminacion-->
        </div>
      </div>
      <!--Pie de modal-->
      <div class="modal-footer">
        <!--boton para eliminar el usuario-->
        <button type="button" class="btn btn-info" onclick ="btn_eliminar_dato();">Eliminar</button>
        <!--Boton para cerrar el modal-->
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>