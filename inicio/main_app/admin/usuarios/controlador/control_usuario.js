//Funcion del boton para guardar el nuevo usuario */
function btn_guardar_dato(){
	var nombre = $("#nombre").val();
	var apellido = $("#apellido").val();
	var correo = $("#correo").val();
	var usuario = $("#usuario").val();
	var clave = $("#clave").val();
	var tipo = "admin";

	var ob = {nombre:nombre, apellido:apellido, correo:correo, usuario:usuario, clave:clave, tipo:tipo};

	$.ajax({
		type: "POST",
		url:"../modelo/modelo_registar_datos.php",
		data: ob,
		beforeSend: function(objeto){

		},
		success: function(data){
			$("#panel_respuesta").html(data);
			btn_listar_datos();

			setTimeout(function(){
				$("#panel_respuesta").html("");
			},3000);


		}
	});
}	

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

//Funcion para la vista de la edicion de usuarios.
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
//Funcion para guardar la edicion de un usuario.
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
//Funcion para mostrar la vista de el modal de eliminacion.
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
//Funcion para eliminar un usuario.
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
//Funcion para el boton de seleccion de un usuario.
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