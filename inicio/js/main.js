jQuery(document).on('submit','#formlg', function(event){
	event.preventDefault();

	jQuery.ajax({
		url: 'main_app/login.php',
		type: 'POST',
		dataType: 'json',
		data: $(this).serialize(),
		beforeSend: function(){
			$('.LogIn').val('Validando...');
		}
	})	
	.done(function(respuesta){
		console.log(respuesta);
		if(!respuesta.error){
			if(respuesta.tipo === 'admin'){
				location.href = 'main_app/admin/usuarios/masUsuario.html';
			}else if(respuesta.tipo === 'usuario'){
				location.href = 'main_app/usuario/index.php';
			}
		}else{
			$('.error').slideDown('slow');
			setTimeout(function(){
				$('.error').slideUp('slow');
			},2000);
			$('.LogIn').val('Iniciar Sesión');
		}
	})
	.fail(function(resp){
		console.log(resp.responseText);
	})
	.always(function(){
		console.log("complete");
	});
});


