/* MODIFICAR DATOS */
function btn_editar(id_usuario){
	var ob = {id_usuario:id_usuario};

	$.ajax({
		type: "POST",
		url:"vista/vista_editar_datos.php",
		data: ob,
		beforeSend: function(objeto){

		},
		success: function(data){
                    $("#elementos_modificar").html(data);
		}
	});
}

//guardar datos del usuario.
function btn_editar_dato(id_usuario){
    //Datos del usuario a modificar.
    var usuario = $("#usuario").val();
    var nombre = $("#nombre").val();
    var apellido = $("#apellido").val();
    var correo = $("#correo").val();
    var clave = $("#clave").val();
    var ob = {id_usuario:id_usuario, usuario:usuario, nombre:nombre, apellido:apellido, correo:correo, clave:clave};
    $.ajax({
        type: "POST",
	url:"modelo/modelo_guardar_datos.php",
	data: ob,
        beforeSend: function(objeto){

	},
	success: function(data){
            setTimeout(function(){
                $("#panel_cambio_usuario").html(data);
            },1500);
            
            setTimeout(function(){
                $("#panel_cambio_usuario").html("");
                btn_editar(id_usuario);
            },2500);
        }
    });
}


//ELIMINAR USUARIO.
function btn_eliminar_usuario(id_usuario){

	var ob = {id_usuario:id_usuario};

	$.ajax({
		type: "POST",
		url:"modelo/modelo_eliminar_usuario.php",
		data: ob,
		beforeSend: function(objeto){

		},
		success: function(data){
                        setTimeout(function(){
				$("#eliminar_user").html(data);
			},2500);

			setTimeout(function(){
				$("#eliminar_user").html("");
			},3000);
                        
                        setTimeout(function(){
				window.location="../../../../index.php";
			},3500);

                        
		}
	});
}

/* DETALLES DE MIS COMPRAS */
function btn_mis_compras(){
	$.ajax({
		type: "POST",
		url:"vista/vista_mostrar_compras.php",
		beforeSend: function(objeto){

		},
		success: function(data){
                    $("#elementos_comprados").html(data);
		}
	});
}