function mostrar_comentario($id_public){
    var url='mostar_comentarios.php';
    $.ajax({
        type:"POST",
        url:url,
        data:'id='+$id_public,
        success:function(response){
            alert(response);
        }
    });
}


