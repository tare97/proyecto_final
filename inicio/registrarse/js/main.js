function validar() {
    var nombre, apellido, correo, usuario, clave, clavev, expresioncorreo;
    nombre = document.getElementById("nombre").value;
    apellido = document.getElementById("apellido").value;
    usuario = document.getElementById("usuario").value;
    correo = document.getElementById("correo").value;
    clave = document.getElementById("pass").value;
    clavev = document.getElementById("pass2").value;

    //Expresiones regulares
    expresioncorreo = /\w+@[a-z]+\.+[a-z]/;

    //Prohibicion que deje campos vacíos y restricción de cantidad.
    if (nombre === "" || apellido === "" || usuario === "" || correo === "" || clave === "" || clavev === "") {
        alert("Es obligatorio rellenar todos los campos.");
        return false;
    }
    else if (nombre.length < 2 || nombre.length > 20) {
        alert("El nombre introducido no es valido.");
        return false;
    }
    else if (apellido.length < 2 || apellido.length > 20) {
        alert("El apellido introducido no es valido.");
        return false;
    }
    else if (usuario.length < 2 || usuario.length > 15) {
        alert("No se permiten usuarios con menos de 2 caracter o mas de 15 caracteres.");
        return false;
    }
    else if (correo.length < 5 || correo.length > 30) {
        alert("No se permiten correos con menos de 5 caracter o mas de 30 caracteres.");
        return false;
    }
    else if (!expresioncorreo.test(correo)) {
        alert("Correo Incorrecto, ejemplo:[datos]@[datos].[extención].");
        return false;
    }
    else if (clave.length < 6 || clave.length > 30) {
        alert("No se permiten contraseñas con menos de 6 caracteres o mas de 30 caracteres.");
        return false;
    }
    else if (clave !== clavev) {
        alert("Las claves que ha introducido no coinciden, vuelva a intentarlo.");
        return false;
    }
    else{
        return true;
    }

    
}

if(true){
    $(document).ready(function(){
	$('#btnguardar').click(function(){
		var datos = $('#frmajax').serialize();
		$.ajax({
			type: "POST",
			url: "guardar_datos/insertar.php",
			data: datos,
			success:function(r){
				alert(r);
			}
		});
		return false;

	});
    });
}



