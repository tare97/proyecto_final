<?php
// Dato resivido de el ajax.
$id_publicacion = $_POST['id_publicacion'];


?>
<!--Estructura de lo que aparecera en el panel model de los comentarios-->
<br>
<br>
<input type="hidden" id="id_publicacion" value="<?php echo $id_publicacion; ?>"></input>
<label for="texto">Comentario</label>
<textarea name="comentario" onpaste="contarcomentarios();" onkeyup="contarcomentarios();" id="mas_comentario" placeholder="* Escriba su comentario aquí... " required maxlength="65"></textarea>
<!--Div para el seguimiento de caracteres-->
<div id="resu">O caractere/s</div>
<button class="btn btn-default btn-md" onclick="btn_listar_comentarios(<?php echo $id_publicacion; ?>);"></button>

