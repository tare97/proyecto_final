<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title> Proyecto </title>
	<link rel="stylesheet" type="text/css" href="../librerias/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../librerias/bootstrap/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="../librerias/bootstrap/css/glyphicons.css">
	<!--<link rel="stylesheet" type="text/css" href="../css/glyphicons.css">-->

	<script type="text/javascript" src="../librerias/bootstrap/js/jquery.min.js"></script>
	<script type="text/javascript" src="../librerias/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../controlador/control_usuario.js"></script>
</head>
<body>
	<div>
        <nav class="navbar navbar-inverse navbar-global navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="vista_menu.php">Panel de Administración de Publicaciones</a>
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
        <div class="main-content">
        	<br>
        	<br>
        	<br>
        	<div class="row" style="margin: 0px; padding: 0px;">
				<div class="col-lg-6 col-md-8 xs-12">
                                    <form method="POST" enctype="multipart/form-data">
                                        <h3 align="center"> Registro de datos </h3>
					<div id="panel_registro" style="padding: 5%; box-shadow: 1px 2px 2px #A4A4A4; border:1px solid #A4A4A4;" align="center">
						<!--Panel de datos-->
						<table class="table table-condensed" style="width: 70%;">
							<tr>
								<td>
									<label>Titulo</label>
								</td>
								<td>
									<input type="text" id="titulo" class="form-control" placeholder="Introduce el Titulo">
								</td>
							</tr>
							<tr>
								<td>
									<label>Dibujo</label>
								</td>
								<td>
									<input type="file" name="foto" id="foto" class="form-control">
								</td>
							</tr>
							<tr>
								<td>
									<label>Tipo de publicacion</label>
								</td>
								<td>
									<label class="radio-inline"><input type="radio" name="optradio" id="id_vista" checked>Vista</label>
                                                                        <label class="radio-inline"><input type="radio" name="optradio" id="id_compra">Compra</label>
								</td>
							</tr>
							<tr>
                                                                <td>
									<label>Relato corto</label>
								</td>
								<td>
									<div class="form-group"><label for="texto">Texto:</label>
                                                                            <textarea class="form-control" rows="6" id="texto"></textarea>
                                                                        </div>
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
									<button class="btn btn-success btn-md" onclick="btn_guardar_dato();">Guardar</button>
								</td>
							</tr>
						</table>
					</div>
                                    </form>
				</div>
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

<!-- Modal -->
<div id="myModal_selector" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color: #084B8A; color:white;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Selector. </h4>
      </div>
      <div class="modal-body">
        <p> Seleccion .</p>
        <select class="form-control" id="select_usuario" onchange="select_usuario();">
        	<option value="">
        		Selecciona
        	</option>
        	<?php 
        		require '../conector/conexion.php';

        		$sql_s = 'SELECT * FROM usuarios ORDER BY id_usuario';
				$rec = mysqli_query($conn, $sql_s);
				while ($row_s = mysqli_fetch_object($rec)){
					$id_usuario = $row_s->{'id_usuario'};
					$nombre = $row_s->{'nombre'};
					?>
					<option value="<?php echo $id_usuario; ?>"><?php echo $nombre; ?></option>
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