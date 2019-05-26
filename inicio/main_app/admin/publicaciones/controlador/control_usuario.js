function btn_guardar_dato(){
	var titulo = $("#titulo").val();
	var foto = $("#foto").val();
        var tipo_publi = $("#id_vista").val();
        var tipo_publi = $("#id_compra").val();
	var texto = $("#texto").val();

	//alert(nombre+" "+apellido+" "+correo+" "+usuario+" "+clave);

	var ob = {titulo:titulo, foto:foto, tipo_publi:tipo_publi, texto:texto};

	$.ajax({
		type: "POST",
		url:"../modelo/modelo_registar_datos.php",
		data: ob,
		beforeSend: function(objeto){

		},
		success: function(data){
			$("#panel_respuesta").html(data);
			btn_listar_datos();

		


		}
	});
}	


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

function btn_editar(id_usuario){
	var ob = {id_usuario:id_usuario};

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

	var id_usuario = $("#id_usuario").val();
	var nombre = $("#nombre_ed").val();
	var apellido = $("#apellido_ed").val();
	var correo = $("#correo_ed").val();
	var usuario = $("#usuario_ed").val();
	var tipo = $("#tipo_ed").val();

	//alert(nombre+" "+apellido+" "+correo+" "+usuario+" "+clave);

	var ob = {id_usuario:id_usuario, nombre:nombre, apellido:apellido, correo:correo, usuario:usuario, tipo:tipo};

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

function btn_eliminar(id_usuario){
	var ob = {id_usuario:id_usuario};

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

	var id_usuario = $("#id_usuario").val();

	var ob = {id_usuario:id_usuario};

	$.ajax({
		type: "POST",
		url:"../modelo/modelo_eliminar_datos.php",
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

			setTimeout(function(){
				btn_listar_datos();
			},3000);
		}
	});
}

function select_usuario(){
	//id="select_usuario"
	var id_usuario = $("#select_usuario").val();
	//alert("hola mundo = " + id_usuario);

	var ob = {id_usuario:id_usuario};

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