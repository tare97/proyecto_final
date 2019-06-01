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
                                    <h4 class="usr"><span class="glyphicon glyphicon-user"></span> <?php echo $res['id_usuario']; ?></h4>
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
                            <div class="row">
                                <!--Dos partes para los likes y a la para los comentarios-->
                                <div class="col-md-12 likcom">
                                    <a>Likes</a>
                                    <a>Comentarios</a>
                                </div>
                            </div>
                            <!--Quinta fila-->
                            <div class="row">
                                <?php
                                //Si la publicacion tiene el id del usuario logeado podras editarlo y borrarlo
                                if(isset($_SESSION['id_usuario'])){
                                    if ($_SESSION['id_usuario'] == $res['id_usuario']) {
                                    ?>
                                    <!--Botones para borrar o editar-->
                                    <div class="col-md-12 tools">
                                        <button type="button" class="btn btn-primary">Editar</button>
                                        <button type="button" class="btn btn-danger">Eliminar</button>
                                    </div>
                                    <?php
                                    // y si tiene la pubicación es de tipo compra podras comprarlo de
                                    // lo conttrario no aparecera nada.
                                    } else if($res['tipo_publicacion'] == 'compra') {
                                        
                                        ?>
                                    <!--Botones para comprar-->
                                    <div class="col-md-12 shop">
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
            <!--Pie de pagína-->
            <?php include('include/footer.php'); ?>
	</body>
</html>