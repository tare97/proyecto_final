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
                        setTimeout(function(){
                            $("#panel_eliminar").html(data);
			},1500);

			setTimeout(function(){
				$("#panel_eliminar").html("");
			},2000);

			setTimeout(function(){
				$("#myModal_eliminar").modal("hide").fadeIn("slow");
                                window.location.reload();
			},2500);

                        
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
                        },2000);

                        setTimeout(function(){
                            $("#myModal_editar").modal("hide").fadeIn("slow");
                            window.location.reload();
                        },2500);

                        
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
                        btn_listar_comentarios(id_publicacion);
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
                
                btn_listar_comentarios(id_publicacion);
            }
	});
}

//listar los comentarios.
function btn_listar_comentarios(id_publicacion){
        var ob = {id_publicacion:id_publicacion};
	$.ajax({
		type: "POST",
		url:"pagina_principal/modelo/modelo_listar_comentarios.php",
		data: ob,
		beforeSend: function(objeto){

		},
		success: function(data){
			$("#panel_listado").html(data);
		}
	});
}

//Eliminar comentario.
function btn_eliminar_coment(id_comentario){
        var ob = {id_comentario:id_comentario};
	$.ajax({
		type: "POST",
		url:"pagina_principal/modelo/modelo_eliminar_comentario.php",
		data: ob,
		beforeSend: function(objeto){

		},
		success: function(data){
                        /* recarga la pagína dinamicamente */
                        var id_publicacion = $("#id_publicacion").val();
			btn_listar_comentarios(id_publicacion);
                         
                        /* mensaje de error */ 
                        $("#panel_respuesta_comentario").html(data);
                        setTimeout(function(){
                            $("#panel_respuesta_comentario").html("");
                        },2500);
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

//FUNCION PARA COMPRAR
function btn_compra(id_publicacion){
    var ob = {id_publicacion:id_publicacion};

	$.ajax({
		type: "POST",
		url:"pagina_principal/vista/vista_compra.php",
		data: ob,
		beforeSend: function(objeto){

		},
		success: function(data){
                    $("#panel_compra").html(data);
		}
	});
}

function btn_comprar(){
        var id_publicacion = $("#id_publicacion").val();
        var precio = $("#precio").val();

        var ob = {id_publicacion:id_publicacion, precio:precio};
        
	$.ajax({
		type: "POST",
		url:"pagina_principal/modelo/modelo_comprar_elemento.php",
		data: ob,
		beforeSend: function(objeto){

		},
		success: function(data){
                    $("#panel_dato_compras").html(data);
		}
	});
}

function btn_cambio_elemento(id_publicacion){
    var ob = {id_publicacion:id_publicacion};

	$.ajax({
		type: "POST",
		url:"pagina_principal/modelo/transferir_compra.php",
		data: ob,
		beforeSend: function(objeto){

		},
		success: function(data){
                    setTimeout(function(){
                        window.location.href ="../../main_app/usuario/perfil.php";
                        $("#panel_detalles").html(data);
                    },1000);
                    setTimeout(function(){
                        $("#panel_detalles").html("");
                    },2500);
		}
	});
}