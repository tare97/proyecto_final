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

function btn_guardar_edicion(){

	var id_publicacion = $("#id_publicacion").val();
	var titulo = $("#titulo_ed").val();
	var texto = $("#texto_ed").val();

	//alert(nombre+" "+apellido+" "+correo+" "+usuario+" "+clave);

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

function select_publicacion(){
	//id="select_usuario"
	var id_publicacion = $("#select_publicacion").val();
	//alert("hola mundo = " + id_usuario);

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