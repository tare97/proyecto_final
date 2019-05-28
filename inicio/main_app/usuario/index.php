<?php include('include/a_config.php'); ?>
<!DOCTYPE html>
<html>
	<head>
            <?php include('include/head-tag-contents.php'); ?>
	</head>
	<body>
            <?php include('include/design-top.php'); ?>
            <?php include('include/navigation.php'); ?>
            <div  class="main-content">	
                <!--Codificación para la aparición en bucle de las publicaciones-->
                <?php
                    require_once 'conexion.php';
                    $sql2 = "SELECT * FROM publicaciones";
                    $rect = mysqli_query($conn, $sql2);
                    while($res = mysqli_fetch_array($rect)){
                        ?>
                        <!--Estructura de la publicacion-->
                        <div class="row publicacion">
                            <!--Primera fila-->
                            <div class="row">
                                <!--Parte superior donde mostramos el id del usuario y la fecha de publicación-->
                                <div class="col-md-6">
                                    <h4 class="usr"><?php echo $res['id_usuario']; ?></h4>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="fch"><?php echo $res['fecha_creacion']; ?></h4>
                                </div>
                            </div>
                            <!--Segunda fila El titulo de la publicacion-->
                            <div class="row">
                                <h2><?php echo $res['titulo']; ?></h2>
                            </div>
                            <!--Tercera fila-->
                            <div class="row">
                                <!--Dos partes el relato corto y a la derecha la imagen-->
                                <div class="col-md-6 relato">
                                    <p><?php echo $res['texto']; ?></p>
                                </div>
                                <div class="col-md-6 dibujo">
                                    <img src="<?php echo $res["imagen"] ?>" width="400" heigth="600">
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>   
            </div>
            <!--Pie de pagína de la pagína-->
            <?php include('include/footer.php'); ?>
	</body>
</html>