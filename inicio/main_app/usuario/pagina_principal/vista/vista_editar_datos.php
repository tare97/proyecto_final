<?php
// Dato resivido de el ajax.
$id_publicacion = $_POST['id_publicacion'];
// conexion con la base de datos.
require '../../conexion.php';
//Consulta.
$sql = "SELECT * FROM publicaciones WHERE id_publicacion='$id_publicacion'";
$rec = mysqli_query($conn, $sql);
$row = mysqli_fetch_object($rec);
//Elementos recuperados de la base de datos.
 $titulo = $row->{'titulo'};
 $texto = $row->{'texto'};


?>
<!--Estructura de lo que aparecera en el panel model para la edicion-->
<br>
<br>
<input type="hidden" id="id_publicacion" value="<?php echo $id_publicacion; ?>"></input>

<br><br><label for="titulo">Titulo</label>
<input type="text" class="form-control" id="titulo_ed" placeholder="* Titulo " value="<?php echo $titulo; ?>" required>

<label for="texto">Relato</label>
<textarea name="texto" id="texto_ed" placeholder="* relato breve " maxlength="630" required><?php echo $texto; ?></textarea>