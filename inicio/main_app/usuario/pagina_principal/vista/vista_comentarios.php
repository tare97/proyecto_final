<?php

$id_publicacion = $_POST['id_publicacion'];


?>
<!--Estructura de lo que aparecera en el panel model-->
<br>
<br>
<input type="hidden" id="id_publicacion" value="<?php echo $id_publicacion; ?>"></input>
<label for="texto">Comentario</label>
<textarea name="comentario" id="mas_comentario" placeholder="* Escriba su comentario aquí... " required></textarea>

