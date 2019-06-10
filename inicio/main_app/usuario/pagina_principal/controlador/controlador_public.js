// CONTROLES PARA LA ELIMINACIÓN.
function btn_eliminar(id_publicacion){
	var ob = {id_publicacion:id_publicacion};

	$.ajax({
		type: "POST",
		url:"pagina_principal/vista/vista_eliminar_datos.php",
		data: ob,
		beforeSend: function(objeto){

		},
		success: function(data){
			$("#panel_eliminar").html(data);
		}
	});
}

function btn_eliminar_dato(){

	var id_publicacion = $("#id_publicacion").val();

	var ob = {id_publicacion:id_publicacion};

	$.ajax({
		type: "POST",
		url:"pagina_principal/modelo/modelo_eliminar_datos.php",
		data: ob,
		beforeSend: function(objeto){

		},
		success: function(data){
			$("#panel_eliminar").html(data);
			//btn_listar_datos();

			setTimeout(function(){
				$("#panel_eliminar").html("");
			},2000);

			setTimeout(function(){
				$("#myModal_eliminar").modal("hide").fadeIn("slow");
			},2500);

                        window.location.reload();
		}
	});
}


// CONTROLES PARA LA EDICION.
function btn_editar(id_publicacion){
	var ob = {id_publicacion:id_publicacion};

	$.ajax({
		type: "POST",
		url:"pagina_principal/vista/vista_editar_datos.php",
		data: ob,
		beforeSend: function(objeto){

		},
		success: function(data){
			$("#panel_editar").html(data);
		}
	});
}

function btn_guardar_edicion(){

	var id_publicacion = $("#id_publicacion").val();
	var titulo = $("#titulo_ed").val();
	var texto = $("#texto_ed").val();


	var ob = {id_publicacion:id_publicacion, titulo:titulo, texto:texto};

	$.ajax({
		type: "POST",
		url:"pagina_principal/modelo/modelo_guardar_datos.php",
		data: ob,
		beforeSend: function(objeto){

		},
		success: function(data){
			$("#panel_respuesta_edicion").html(data);

			setTimeout(function(){
                            $("#panel_respuesta_edicion").html("");
                        },3500);

                        setTimeout(function(){
                            $("#myModal_editar").modal("hide").fadeIn("slow");
                        },3500);

                        window.location.reload();
		}
	});
}

//CONTROLES PARA COMENTARIO.
function btn_comentario(id_publicacion){
	var ob = {id_publicacion:id_publicacion};

	$.ajax({
		type: "POST",
		url:"pagina_principal/vista/vista_comentarios.php",
		data: ob,
		beforeSend: function(objeto){

		},
		success: function(data){
			$("#panel_comentario").html(data);
                        btn_listar_comentarios(id_publicacion)
		}
	});
}

//guardar comentario.
function btn_camentario_dato(){
    var id_publicacion = $("#id_publicacion").val();
    var comentario = $("#mas_comentario").val();

    var ob = {id_publicacion:id_publicacion, comentario:comentario};

    $.ajax({
        type: "POST",
	url:"pagina_principal/modelo/modelo_guardar_comentario.php",
	data: ob,
        beforeSend: function(objeto){

	},
	success: function(data){
            $("#panel_respuesta_comentario").html(data);
                setTimeout(function(){
                    $("#panel_respuesta_comentario").html("");
                },3500);
                
                setTimeout(function(){
                    $("#mas_comentario").html("");
                },1500);
                
                comentario = "";
                btn_listar_comentarios(id_publicacion)
            }
	});
}

//listar los comentarios.
function btn_listar_comentarios(id_publicacion){
        var ob = {id_publicacion:id_publicacion};
	$.ajax({
		type: "POST",
		url:"pagina_principal/modelo/modelo_listar_datos.php",
		data: ob,
		beforeSend: function(objeto){

		},
		success: function(data){
			$("#panel_listado").html(data);
		}
	});
}

//CONTROLES PARA LOS LIKES.
function darLike(id_publicacion){
    var ob = {id_publicacion:id_publicacion};
    $.ajax({
        type: "POST",
	url:"pagina_principal/modelo/modelo_dar_like.php",
	data: ob,
            beforeSend: function(objeto){

            },
            success: function(data){
                window.location.reload();
            }
    });
}

function quitarLike(id_puntuacion){
    var ob = {id_puntuacion:id_puntuacion};
    $.ajax({
        type: "POST",
	url:"pagina_principal/modelo/modelo_quitar_like.php",
	data: ob,
            beforeSend: function(objeto){

            },
            success: function(data){
                window.location.reload();
            }
    });
}