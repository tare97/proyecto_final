<?php

$id_publicacion = $_POST['id_publicacion'];

require '../conector/conexion.php';

$sql = "SELECT * FROM publicaciones WHERE id_publicacion='$id_publicacion'";
$rec = mysqli_query($conn, $sql);
$row = mysqli_fetch_object($rec);

 $titulo = $row->{'titulo'};
 $texto = $row->{'texto'};


?>
<input type="hidden" id="id_publicacion" value="<?php echo $id_publicacion; ?>"></input>

<label for="titulo">Titulo</label>
<input type="text" class="form-control" id="titulo_ed" placeholder="* Usuario " value="<?php echo $titulo; ?>">
<br>
<h5>Relato</h5>
<textarea name="texto" id="texto_ed" placeholder="Introduce tu relato aquí..." maxlength="630" require><?php echo $texto; ?></textarea>