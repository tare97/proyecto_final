//Funcion muy importante para listar los elementos de la base de datos.
function btn_listar_datos(){
	
	var ob = "";

	$.ajax({
		type: "POST",
		url:"../modelo/modelo_listar_datos.php",
		data: ob,
		beforeSend: function(objeto){

		},
		success: function(data){
			$("#panel_listado").html(data);
		}
	});
}	
//Funcion para la vista de la edicion de las publicaciones.
function btn_editar(id_publicacion){
	var ob = {id_publicacion:id_publicacion};

	$.ajax({
		type: "POST",
		url:"../vista/vista_editar_datos.php",
		data: ob,
		beforeSend: function(objeto){

		},
		success: function(data){
			$("#panel_editar").html(data);
		}
	});
}
//Funcion para guardar la edicion de una publicacion.
function btn_guardar_edicion(){

	var id_publicacion = $("#id_publicacion").val();
	var titulo = $("#titulo_ed").val();
	var texto = $("#texto_ed").val();

	var ob = {id_publicacion:id_publicacion, titulo:titulo, texto:texto};

	$.ajax({
		type: "POST",
		url:"../modelo/modelo_guardar_datos.php",
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
            },2500);

            setTimeout(function(){
                btn_listar_datos();
            },3000);
		}
	});
}
//Funcion para mostrar la vista de el modal de eliminacion.
function btn_eliminar(id_publicacion){
	var ob = {id_publicacion:id_publicacion};

	$.ajax({
		type: "POST",
		url:"../vista/vista_eliminar_datos.php",
		data: ob,
		beforeSend: function(objeto){

		},
		success: function(data){
                    $("#panel_eliminar").html(data);
		}
	});
}
//Funcion para eliminar un usuario.
function btn_eliminar_dato(){
    
        var id_publicacion = $("#id_publicacion").val();

	var ob = {id_publicacion:id_publicacion};

	$.ajax({
		type: "POST",
		url:"../modelo/modelo_eliminar_datos.php",
		data: ob,
		beforeSend: function(objeto){

		},
		success: function(data){
			$("#panel_eliminar").html(data);

			setTimeout(function(){
				$("#panel_eliminar").html("");
			},2000);

			setTimeout(function(){
				$("#myModal_eliminar").modal("hide").fadeIn("slow");
			},2500);

			setTimeout(function(){
				btn_listar_datos();
			},3000);
		}
	});
}
//Funcion para el boton de seleccion de un usuario.
function select_publicacion(){
	var id_publicacion = $("#select_publicacion").val();


	var ob = {id_publicacion:id_publicacion};

	$.ajax({
		type: "POST",
		url:"../modelo/modelo_mostrar_datos.php",
		data: ob,
		beforeSend: function(objeto){

		},
		success: function(data){
			$("#panel_selector").html(data);
			

		}
	});

}