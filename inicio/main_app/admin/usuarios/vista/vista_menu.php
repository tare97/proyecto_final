<?php
    //Varíable necesaria para usar sesiones.
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
        <!--Titulo de la pagína-->
	<title> Proyecto </title>
        <!--Librerias necesarias CSS, JS...-->
        <!--CSS-->
	<link rel="stylesheet" type="text/css" href="../librerias/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../librerias/bootstrap/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="../librerias/bootstrap/css/glyphicons.css">
        <!--JS-->
        <script type="text/javascript" src="../librerias/bootstrap/js/jquery.min.js"></script>
	<script type="text/javascript" src="../librerias/bootstrap/js/bootstrap.min.js"></script>
        <!--Archivos propios-->
        <link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<script type="text/javascript" src="../controlador/control_usuario.js"></script>
</head>
<body>
    <div>
        <!--Barra de navegacion superior-->
        <nav class="navbar navbar-inverse navbar-global navbar-fixed-top">
            <div class="container-fluid">
                <!--Titulo de la barra de navegacion-->
                <div class="navbar-header">
                    <a class="navbar-brand" href="vista_menu.php">Panel de Administración de Usuarios</a>
                </div>
                <!--Enlaces de navegacion (Usuarios y publicaciones.)-->
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">USUARIOS</a></li>
                    <li><a href="../../publicaciones/masPublic.html">PUBLICACIONES</a></li>
                </ul>
                <div id="navbar" class="collapse navbar-collapse">
                  <!--Nombre del usuario administrador y boton para salir de la seccion de administracion-->
                  <ul class="nav navbar-nav navbar-user navbar-right">
                    <li><a href="vista_menu.php"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['login_user']; ?></a></li>
                    <li><a href="../../logout.php"><span class="glyphicon glyphicon-log-out"></span> Salir</a></li>
                  </ul>
                </div>
            </div>
        </nav>
        <!--CONTENIDO PRINCIPAL-->
        <div class="main-content">
                <!--Distanciador de espacios-->
        	<br>
        	<br>
        	<br>
                <br>
                <br>
        	<div class="row">
                                <!--Panel de registro de usuarios-->
				<div class="col-lg-6 col-md-8 xs-12">
					<h3 align="center"> Registro de datos </h3>
					<div id="panel_registro" align="center">
						<!--Panel de datos-->
						<table class="table table-condensed">
							<tr>
								<td>
									<label>Nombre</label>
								</td>
								<td>
									<input type="text" id="nombre" class="form-control" placeholder="Introduce el Nombre">
								</td>
							</tr>
							<tr>
								<td>
									<label>Apellido</label>
								</td>
								<td>
									<input type="text" id="apellido"class="form-control" placeholder="Introduce el Apellido">
								</td>
							</tr>
							<tr>
								<td>
									<label>correo</label>
								</td>
								<td>
									<input type="email" id="correo"class="form-control" placeholder="Introduce el Correo">
								</td>
							</tr>
							<tr>
								<td>
									<label>usuario</label>
								</td>
								<td>
									<input type="text" id="usuario"class="form-control" placeholder="Introduce el Usuario">
								</td>
							</tr>
							<tr>
								<td>
									<label>contraseña</label>
								</td>
								<td>
									<input type="password" id="clave" class="form-control" placeholder="Introduce la Contraseña">
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
									<button class="btn btn-success btn-md" onclick="btn_guardar_dato();">Registrar</button>
								</td>
							</tr>
						</table>
					</div>
				</div>
                                <!--Bonotes para listar los elementos de la base de datos-->
				<div class="col-md-6 col-md-8 xs-12">
					<h3 align="center"> Listado de datos </h3>
					<button class="btn btn-info btn-md" onclick="btn_listar_datos();"> Listar </button>
					<button class="btn btn-info btn-md"  data-toggle="modal" data-target="#myModal_selector"> Selector </button>
					<div id="panel_listado" class="">
						<!--Panel de datos(Localizado en una vista-->
					</div>
				</div>
			</div>    
        </div>
    </div>
</body>
</html>
<!--MODELS DE MOFICACION, ELIMINACION Y SELECTOR-->
<!-- Modal de seleccion-->
<div id="myModal_selector" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!--Contenido del modal-->
    <div class="modal-content">
      <div class="modal-header">
        <!--Boton x para cerrar el modle-->
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <!--Titulo-->
        <h4 class="modal-title"> Selector. </h4>
      </div>
      <div class="modal-body">
        <p> Seleccion .</p>
        <select class="form-control" id="select_usuario" onchange="select_usuario();">
        	<option value="">
        		Selecciona
        	</option>
                <!--PHP para conseguir los datos de la base de datos y poder seleccionarlos en el selector-->
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
            <!--Mensajes de error o panel con elementos del usuario-->
        </div>
      </div>
      <!--Pie de pagína y boton de cerrar-->
      <div class="modal-footer">
        <button type="button"  class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>