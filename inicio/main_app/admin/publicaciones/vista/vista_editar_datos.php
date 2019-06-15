<?php
//Id de la publicacion enviado desde el ajax.
$id_publicacion = $_POST['id_publicacion'];
//conexion con la base de datos.
require '../conector/conexion.php';
//Consulta: Seleccionar todos los elementos de la tabla publicacion mientras el id sea el resivido del ajax.
$sql = "SELECT * FROM publicaciones WHERE id_publicacion='$id_publicacion'";
//Envia la consulta a la base datos.
$rec = mysqli_query($conn, $sql);
//Orientado a objetos, recuperador de elementos de la base de datos.
$row = mysqli_fetch_object($rec);
//Elementos seleccionados de la base de datos.
 $titulo = $row->{'titulo'};
 $texto = $row->{'texto'};


?>
<!--Elemento oculto para conseguír el id de la publicacion deseado-->
<input type="hidden" id="id_publicacion" value="<?php echo $id_publicacion; ?>"></input>
<!--Panel de modificacion que aparecera en la vista-->
<!--Titulo-->
<label for="titulo">Titulo</label>
<input type="text" class="form-control" id="titulo_ed" placeholder="* Usuario " value="<?php echo $titulo; ?>">
<br>
<!--Relato-->
<h5>Relato</h5>
<textarea name="texto" id="texto_ed" placeholder="Introduce tu relato aquí..." maxlength="630" require><?php echo $texto; ?></textarea>