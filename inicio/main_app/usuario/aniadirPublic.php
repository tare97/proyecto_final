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
                    <!--Breadcrumb-->
                    <div class="migaDePan"><span class="glyphicon glyphicon-edit"></span> Nuevas Publicaciones.</div>
                    <form id="registro-public" action="nuevasPublicaciones/valida_foto.php" method="POST" enctype="multipart/form-data">
                        <h2>REGÍSTRO DE PUBLICACIÓN</h2>
                        <input type="text" name="txtnom" placeholder="Introduce el titulo deseado (max - 60 Caracteres.)" value="" maxlength="60">
                        Adquicisión <input type="radio" name="modo" value="compra"> 
                        Vista <input type="radio" name="modo" value="vista"> 
                        <input type="file" name="foto" id="foto">
                        <textarea name="texto" id="texto" onpaste="contarcaracteres();" onkeyup="contarcaracteres();" placeholder="(Permitido 630 caracteres.)Introduce tu relato aquí..." maxlength="630"></textarea>
                        <div id="res">O caractere/s</div>
                        <br>
                        <input type="submit" id="regpublic" name="enviar" value="Enviar">    
                    </form>
		</div>
            <!--Pie de pagína de la pagína-->
            <?php include('include/footer.php'); ?>
	</body>
</html>

