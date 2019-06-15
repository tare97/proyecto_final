<?php

/* NOTA IMPORTANTE */
// Este archivo PHP debe guardarse con encoding UTF8"

/*+++++++++++++++++++++++++++++++++++++++++++++++++/
/*++++++++++++++++++ DB CONNECTION ****************/
/**************************************************/

$servername = "localhost";
$username = "root";
$password = "admin";

// Crear la conexion.
$conn = new mysqli($servername, $username, $password);

// Chequear la conexion.
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$conn->select_db("proyecto");

/* cambiar el conjunto de caracteres a utf8 */
$conn->set_charset("utf8");

/*+++++++++++++++++++++++++++++++++++++++++++++++++/
/**************************************************/

// Elimina caracteres extraños que me pueden molestar en las cadenas que meto en los item de los RSS
function sanitize($str) {
	$str=str_replace("&","&amp;",$str);
	$str=str_replace("\"","&quot;",$str);
	$str=str_replace("'","&apos;",$str);
	$str=str_replace(">","&gt;",$str);
	$str=str_replace("<","&lt;",$str);
	return $str;
}



//Consulta
$sql = "SELECT * FROM publicaciones ORDER BY fecha_creacion DESC LIMIT 12";


$result = $conn->query($sql);



//comienzo a escribir el código del RSS
$data = '<?xml version="1.0" encoding="UTF-8" ?>';

//Cabeceras del RSS
$data .= '<rss version="2.0">';


//Datos generales del Canal. Edítalos conforme a tus necesidades
$titulo_canal="EnjoyArt Application";         
$link_canal = "http://EnjoyArtApplication.com";
$descripcion_canal="Es una red social donde podras dejar con total liberdad volar tu imaginación.";
$idioma_canal = "es-es";
$copyright_canal = "&copy; EnjoyArt Application";


$data .= "<channel>\n";
$data .= "<title>".sanitize($titulo_canal)."</title>";
$data .= "<link>".$link_canal."</link>";
$data .= "<description>".sanitize($descripcion_canal)."</description>";
$data .= "<language>".$idioma_canal."</language>";
$data .= "<copyright>".htmlentities($copyright_canal)."</copyright>\n";

if ($result->num_rows > 0) 
{
	
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
        //elimino caracteres extraños en campos susceptibles de tenerlos
	   $titulo=sanitize($row["titulo"]);         
	   $texto=sanitize($row["texto"]);
           $tipo=sanitize($row["tipo_publicacion"]);
           $fecha= sanitize($row["fecha_creacion"]);
           
	   $data .= "<item>\n";
	   $data .= "<titulo>".$titulo."</titulo>\n";
	   $data .= "<texto>".$texto."</texto>\n";
	   $data .= "<tipo_de_publicacion>" . $tipo . "</tipo_de_publicacion>\n";
	   $data .= "<fechaPublicacion>". $fecha ."</fechaPublicacion>\n";
	   $data .= "</item>\n";
    }
}

//cierro las etiquetas del XML
$data .= "</channel>";
$data .= "</rss>";


//creo cabeceras desde PHP para decir que devuelvo un XML
header("Content-type: text/xml;charset=utf-8");

echo $data;

?>
