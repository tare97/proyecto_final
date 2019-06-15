<?php
// Dato resivido de el ajax.
$id_publicacion = $_POST['id_publicacion'];


?>
<!--Estructura de lo que aparecera en el panel model de los comentarios-->
<br>
<br>
<input type="hidden" id="id_publicacion" value="<?php echo $id_publicacion; ?>"></input>
<label for="texto">Comentario</label>
<textarea name="comentario" id="mas_comentario" placeholder="* Escriba su comentario aquí... " required></textarea>
<button class="btn btn-info btn-md" onclick="btn_listar_comentarios(<?php echo $id_publicacion; ?>);"> comentarios </button>

