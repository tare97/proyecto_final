<?php

$id_publicacion = $_POST['id_publicacion'];


?>
<!--Estructura de lo que aparecera en el panel model-->
<input type="hidden" id="id_publicacion" value="<?php echo $id_publicacion; ?>"></input>
<label for="texto">Introduzca el importe que desea a donar:</label>
<input type="number" id="precio" placeholder="Introduce el importe..." min="0" max="10000" maxlength="0" required></input>
<button class="btn btn-success btn-md" onclick="btn_comprar(<?php echo $id_publicacion; ?>);"> Comprar </button>

