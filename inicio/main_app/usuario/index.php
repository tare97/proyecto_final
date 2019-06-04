<!--Configuracion para que pueda ser dinamico-->
<?php include('include/a_config.php'); ?>
<!DOCTYPE html>
<html>
	<head>
            <!--Cabecera - Titulo y enlaces-->
            <?php include('include/head-tag-contents.php'); ?>
	</head>
	<body>
            <!--Barra de navecación-->
            <?php include('include/design-top.php'); ?>
            <!--Barra lateral-->
            <?php include('include/navigation.php'); ?>
            <!--Cuerpo de la pagína-->
            <div  class="main-content">	
                <!--Codificación para la aparición en bucle de las publicaciones-->
                <?php
                require_once 'conexion.php';
                $sql2 = "SELECT * FROM publicaciones ORDER BY fecha_creacion DESC";
                $rect = mysqli_query($conn, $sql2);
                while($res = mysqli_fetch_array($rect)){
                    ?>
                    <!--Estructura de la publicacion-->
                    <div class="row publicacion">
                        <!--Primera fila-->
                        <div class="row arriba">
                            <!--Parte superior donde mostramos el id del usuario y la fecha de publicación-->
                            <div class="col-xs-6">
                                <h4 class="usr"><span class="glyphicon glyphicon-user"></span>(id): <?php echo $res['id_usuario']; ?></h4>
                            </div>
                            <div class="col-xs-6">
                                <h4 class="fch"><?php echo $res['fecha_creacion']; ?></h4>
                            </div>
                        </div>
                        <!--Segunda fila El titulo de la publicacion-->
                        <div class="row tit">
                            <div class="col-md-12">
                                <h2><?php echo $res['titulo']; ?></h2>
                            </div>
                        </div>
                        <!--Tercera fila-->
                        <div class="row central">
                            <!--Dos partes el relato corto y a la derecha la imagen-->
                            <div class="col-xs-6 dibujo">
                                <img src="<?php echo $res["imagen"] ?>">
                            </div>
                            <div class="col-xs-6 relato">
                                <p><?php echo $res['texto']; ?></p>
                            </div>
                        </div>
                        <!--Cuarta fila-->
                        <div class="row botones">
                            <!--Dos partes para los likes y a la para los comentarios-->
                            <div class="col-xs-6 likcom">
                                <!--Likes-->
                                <a href=""><span class="glyphicon glyphicon-heart"></span></a>
                                <!--Comentarios (Estructura en la parte inferior)-->
                                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalcoment" onclick="btn_comentario('<?php echo $res['id_publicacion']; ?>');"><span class="glyphicon glyphicon-comment"></span></button>    
                            </div>
                            <!--Y los botones de edicion, eiminacion o compra-->
                            <?php
                            //Si la publicacion tiene el id del usuario logeado podras editarlo y borrarlo
                            if(isset($_SESSION['id_usuario'])){
                                if ($_SESSION['id_usuario'] == $res['id_usuario']) {
                                ?>
                                    <!--Botones para borrar o editar-->
                                    <div class="col-xs-6 tools">
                                        <button class="btn btn-danger" data-toggle="modal" data-target="#myModal_eliminar" onclick="btn_eliminar('<?php echo $res['id_publicacion']; ?>');">Eliminar</button>
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal_editar"onclick="btn_editar('<?php echo $res['id_publicacion']; ?>');">Editar</button>
                                    </div>
                                <?php
                                // y si tiene la pubicación es de tipo compra podras comprarlo de
                                // lo conttrario no aparecera nada.
                                } else if($res['tipo_publicacion'] == 'compra') {         
                                ?>
                                    <!--Botones para comprar-->
                                    <div class="col-xs-6 shop">
                                        <button type="button" class="btn btn-success">Comprar</button>
                                    </div>
                                <?php        
                                }
                            }
                            ?> 
                        </div>
                    </div>   
                    <?php
                    }
                    ?>
            </div>
                    <!--Modal para los comentarios-->
                    <div class="modal fade" id="myModalcoment" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Panel de comentarios</h4>
                                </div>
                                <div class="modal-body">
                                    <div id="panel_comentario"></div>
                                    <div id="panel_respuesta_comentario"></div>
                                    <button class="btn btn-info btn-md" onclick="btn_listar_comentarios();"> comentarios </button>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info" onclick ="btn_camentario_dato();">Añadir</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal para eliminar-->
                    <div id="myModal_eliminar" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <!-- Contenido del modelo de eliminación-->
                            <div class="modal-content">
                                <div class="modal-header delet">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title"> Panel de eliminar. </h4>
                                </div>
                                <div class="modal-body">
                                    <div id="panel_eliminar"></div>
                                </div>
                                <!--Pie de pagína del modelo-->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info" onclick ="btn_eliminar_dato();">Eliminar</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal para editar -->
                    <div id="myModal_editar" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <!--Contenido del modelo de edición.-->
                            <div class="modal-content">
                                <div class="modal-header edit">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title"> Panel de edición de la publicación. </h4>
                                </div>
                                <div class="modal-body">
                                    <div id="panel_editar"></div>
                                    <div id="panel_respuesta_edicion"></div>
                                </div>
                                <!--Pie de pagína del model-->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info" onclick="btn_guardar_edicion();">Guardar</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
            <!--Pie de pagína-->
            <?php include('include/footer.php'); ?>
	</body>
</html>