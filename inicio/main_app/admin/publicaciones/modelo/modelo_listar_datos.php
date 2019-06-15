<!--Vista de publicaciones en la tabla-->
<!--Parte superior de la vista de elementos-->
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
     //conexion con la base de datos.
    require '../conector/conexion.php';
     //Consulta: Seleccionar todos los elementos de la tabla Ppublicaciones mientras el id sea el resivido del ajax.
    $sql = "SELECT * FROM publicaciones ORDER BY id_publicacion DESC";
    //Envia la consulta a la base datos.
    $rec = mysqli_query($conn, $sql);
    //Contador para listar los elementos.
    $i = 0;
    //rientado a objetos, recuperador de elementos de la base de datos.
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

    <!-- Conrenido del modal -->
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
    <!-- Contenido del modal-->
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