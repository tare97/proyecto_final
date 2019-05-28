<?php include('include/a_config.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<?php include('include/head-tag-contents.php'); ?>
	</head>
	<body>
		<?php include('include/design-top.php'); ?>
		<?php include('include/navigation.php'); ?>
		<div class="main-content">	
			<center><strong><h1>INSERTAR RUTA DE FOTOS A LA BD</h1></strong></center>
                        <form action="valida_foto.php" method="POST" enctype="multipart/form-data">
                            <center>
				<table border="1">
					<tr bgcolor="skyblue">
						<td>
							<strong>Titulo</strong>
						</td>
						<td>
							<input type="text" name="txtnom" value="">
						</td>
					</tr>
                                        <tr bgcolor="skyblue">
						<td>
							<strong>Selecciona Opcion</strong>
						</td>
						<td>
							<input type="radio" name="modo" value="compra"> Adquicisión
                                                        <input type="radio" name="modo" value="vista"> Vista
						</td>
					</tr>
					<tr bgcolor="skyblue">
						<td bgcolor="skyblue">
							<strong>Foto:</strong>
						</td>
						<td>
							<input type="file" name="foto" id="foto">
						</td>
					</tr>
                                        <tr bgcolor="skyblue">
						<td bgcolor="skyblue">
							<strong>Texto:</strong>
						</td>
						<td>
                                                    <textarea name="texto" id="texto" rows="10" cols="50">
                                                        
                                                    </textarea>
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center" bgcolor="skyblue">
							<input type="submit" name="enviar" value="Enviar">
						</td>
					</tr>
				</table>
			</center>
                    </form>
		</div>
            <!--Pie de pagína de la pagína-->
            <?php include('include/footer.php'); ?>
	</body>
</html>

