// Funcion para abrir la barra lateral.
$('.menu-bar').on('click', function(){
    $(".main-content").toggleClass('abrir');
});
// Funcion para cerrar la barra lateral.
$('.menu-bar').on('click', function(){
    $(".footer").toggleClass('abrir');
});