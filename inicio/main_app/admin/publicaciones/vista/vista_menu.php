<?php
    session_start();
    // Estructura de seguridad para que no se puede acceder introduciendo la url.
    error_reporting(0);
    //Se cra una variable con el nombre de usuario.
    $varsesion = $_SESSION['login_user'];
    //Condición : Si el usuario es nulo o vacío sera rechazado y no podra acceder.
    if($varsesion == null || $varsesion = ''){
        echo 'Usted no tiene autorización, no se a logeado correctamente. <a href="../../../../index.php">Volver</a>';
        die();
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title> Proyecto </title>
	<link rel="stylesheet" type="text/css" href="../librerias/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../librerias/bootstrap/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="../librerias/bootstrap/css/glyphicons.css">
        <link rel="stylesheet" type="text/css" href="../css/estilos.css">

	<script type="text/javascript" src="../librerias/bootstrap/js/jquery.min.js"></script>
	<script type="text/javascript" src="../librerias/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../controlador/control_publicaciones.js"></script>
        <script src="../controlador/contarCaracteres.js"></script>
</head> 
<body>
	<div>
        <!--Barra superior-->
        <nav class="navbar navbar-inverse navbar-global navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="vista_menu.php">Panel de Administración de Usuarios</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="../../usuarios/masUsuario.html">USUARIOS</a></li>
                    <li class="active"><a href="#">PUBLICACIONES</a></li>
                </ul>
                <div id="navbar" class="collapse navbar-collapse">
                  <ul class="nav navbar-nav navbar-user navbar-right">
                    <li><a href="vista_menu.php"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['login_user']; ?></a></li>
                    <li><a href="../../logout.php"><span class="glyphicon glyphicon-log-out"></span> Salir</a></li>
                  </ul>
                </div>
            </div>
        </nav>
        <!--Estructura central-->
        <div class="main-content">
        	<br>
        	<br>
        	<br>
        	<div class="row">
                                <!--Formulario de regístro-->
				<div class="col-lg-6 col-md-8 xs-12">
					<h3 align="center"> Registro de publicaciones </h3>
					<div id="panel_registro" align="center">
                                            <!--Panel de datos-->
                                            <form id="registro-public" action="../modelo/valida_foto.php" method="POST" enctype="multipart/form-data">
                                                <table class="table table-condensed">
							<tr>
								<td>
									<label>Titulo</label>
								</td>
								<td>
                                                                        <input type="text" id="titulo" class="form-control" name="txtnom" placeholder="Introduce el titulo deseado" value="">
								</td>
							</tr>
							<tr>
								<td>
									<label>Tipo de publicacion</label>
								</td>
								<td>
                                                                        Adquicisión <input type="radio" name="modo" value="compra"> 
                                                                        Vista <input type="radio" name="modo" value="vista">
								</td>
							</tr>
							<tr>
								<td>
									<label>Imagen</label>
								</td>
								<td>
                                                                        <input type="file"id="foto" class="form-control" name="foto" id="foto">
								</td>
							</tr>
							<tr>
								<td>
									<label>Relato</label>
								</td>
								<td>
                                                                        <textarea name="texto" id="texto" onpaste="contarcaracteres();" onkeyup="contarcaracteres();" placeholder="Introduce tu relato aquí..." maxlength="630"></textarea>
                                                                        <div id="res">O caractere/s</div>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<hr>
									<div id="panel_respuesta"></div>
								</td>
							</tr>
							<tr>
								<td colspan="2" align="center">
                                                                    <input class="btn btn-success" type="submit" id="regpublic" name="enviar" value="Regístrar"> 
								</td>
							</tr>
						</table>
                                            </form>
					</div>
				</div>
                                <!--Panel de publicaciones donde se podra eliminar, y editar a demas de ver todos los elementos-->
				<div class="col-md-6 col-md-8 xs-12">
					<h3 align="center"> Listado de datos </h3>
					<button class="btn btn-info btn-md" onclick="btn_listar_datos();"> Listar </button>
					<button class="btn btn-info btn-md"  data-toggle="modal" data-target="#myModal_selector"> Selector </button>
					<div id="panel_listado" class="">
						<!--Panel de datos-->
					</div>
				</div>
			</div>    
        </div>
   	</div>
</body>
</html>

<!-- Modal seleccionar un elemento-->
<div id="myModal_selector" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Selector. </h4>
      </div>
      <div class="modal-body">
        <p> Seleccion .</p>
        <select class="form-control" id="select_publicacion" onchange="select_publicacion();">
        	<option value="">
        		Selecciona
        	</option>
        	<?php 
        		require '../conector/conexion.php';

        		$sql_s = 'SELECT * FROM publicaciones ORDER BY id_publicacion';
				$rec = mysqli_query($conn, $sql_s);
				while ($row_s = mysqli_fetch_object($rec)){
					$id_publicacion = $row_s->{'id_publicacion'};
					$titulo = $row_s->{'titulo'};
					?>
					<option value="<?php echo $id_publicacion; ?>"><?php echo $titulo; ?></option>
					<?php 
				}
        	?>
        </select>
        <div id="panel_selector">
        	
        </div>
      </div>
      <div class="modal-footer">
        <button type="button"  class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>