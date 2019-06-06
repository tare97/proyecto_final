<?php session_start();
if(isset($_SESSION['custom_captcha']))
{
unset($_SESSION['custom_captcha']); // Destruye la session que has iniciado.
}
$string1="abcdefghijklmnopqrstuvwxyz";
$string2="1234567890";
$string=$string1.$string2;
$string= str_shuffle($string);
$random_text= substr($string,0,8); // Cambia aleatoriamente las letras y numeros.
$_SESSION['custom_captcha']=$random_text;
$im = @ImageCreate (80, 20)
or die ("Cannot Initialize new GD image stream");
$background_color = ImageColorAllocate ($im, 204, 204, 204); // Asigna un color al fondo.
$text_color = ImageColorAllocate ($im, 51, 51, 255); // Le asigna un color al texto. 
ImageString($im,5,5,2,$_SESSION['custom_captcha'],$text_color); // Random string from session added 
ImagePng ($im);
imagedestroy($im); // Desaparece los datos de la imagen.
?>
