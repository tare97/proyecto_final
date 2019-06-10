<table class="table table-bordered">    
    <tr>
	<th>#</th>
        <th>Id</th>
        <th>Titulo</th>
        <th>Imagen</th>
        <th>Tipo de Publicacion</th>
	<th></th>
    </tr>
<?php
    require '../conector/conexion.php';

    $sql = "SELECT * FROM publicaciones ORDER BY id_publicacion DESC";
    $rec = mysqli_query($conn, $sql);
    $i = 0;
    
    while ($row = mysqli_fetch_object($rec)){
        $i++;
        $id_publicacion = $row->{'id_publicacion'};
        $titulo = $row->{'titulo'};
        $imagen = $row->{'imagen'};
	$tipo = $row->{'tipo_publicacion'};
?>
    <tr>    
        <!--Lista de datos que hay en la base de datos-->
        <td><?php echo $i; ?></td>
        <td><?php echo $id_publicacion; ?></td>
        <td><?php echo $titulo; ?></td>
        <td><?php echo $imagen; ?></td>
        <td><?php echo $tipo; ?></td>
        <td class="col-lg-1">
            <!--Boton para editar-->
            <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal_editar"onclick="btn_editar(<?php echo $id_publicacion; ?>);">Editar</button>	
                            
            <!--Boton para eliminar-->
            <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal_eliminar" onclick="btn_eliminar(<?php echo $id_publicacion; ?>);">Elimin</button>
        </td>
    </th>
    <?php
    }
?>	
</table>

<!-- Modal de edicion -->
<div id="myModal_editar" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header edit">
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

<!-- Modal de eliminacion -->
<div id="myModal_eliminar" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header delet">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Modal Eliminar. </h4>
      </div>
      <div class="modal-body">
        <p> Eliminar .</p>
        <div id="panel_eliminar"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" onclick ="btn_eliminar_dato();">Eliminar</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>