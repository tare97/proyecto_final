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
                <header>
                    <h1>Roles</h1>
                    <h2>Listar</h2>
                </header>
                <table border="1" collapse style="background: red;">
                    <thead>
			<tr>
                            <th>ID</th>
                            <th>Titulo</th>
                            <th>Foto</th>
                            <th>Texto</th>
                            <th>Fecha</th>
                            <th colspan="2">Opciones</th>
			</tr>
                    </thead>
                    <tbody>
			<?php foreach (Rol::listar() as $fila) { ?>
				<tr>
					<td><?= $fila[0] ?></td>
					<td><?= $fila[2] ?></td>
                                        <td><?= $fila[3] ?></td>
                                        <td><?= $fila[5] ?></td>
                                        <td><?= $fila[6] ?></td>
					<td>
						<a href="perfil/vistas/roles/editar.php?id=<?=base64_encode($fila[0])?>">Editar</a>
					</td>
					<td>
						<a href="perfil/controladores/Roles.php?a=elim&id=<?=base64_encode($fila[0])?>" onclick="return confirm('¿Desea eliminar?')">Eliminar</a>
					</td>
				</tr>
			<?php } ?>
                    </tbody>
                </table>
            </div>
            <!--Pie de pagína de la pagína-->
            <?php include('include/footer.php'); ?>
	</body>
</html>

