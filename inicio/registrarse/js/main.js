window.onload  = function(){
    /* NOMBRE */
    const nombre = document.getElementById("nombre");
    nombre.addEventListener("focusout", rnombre);
    
    /* APELLIDO */
    const apellido = document.getElementById("apellido");
    apellido.addEventListener("focusout", rapellido);
    
    /* USUARIO */
    const usuario = document.getElementById("usuario");
    usuario.addEventListener("focusout", rusuario);
    
    /* CORREO */
    const correo = document.getElementById("correo");
    correo.addEventListener("focusout", rcorreo);
    
    /* CONTRASEÑAS */
    const clave = document.getElementById("pass");
    clave.addEventListener("focusout", rclave);
    
    const clavev = document.getElementById("pass2");
    clavev.addEventListener("focusout", rclavev);
    
    /* CAPTCHA */
    const captcha = document.getElementById("confirmacion");
    captcha.addEventListener("focusout", rcaptcha);
    
    /* Boton de regístro */
    const registrar = document.getElementById("btnguardar");
    registrar.addEventListener("click", registro);
};

/* NOMBRE */
function rnombre(){
    /* Defínimos la variable para conocer su valor. */ 
    const nombre = document.getElementById("nombre").value;
    /* Introducimos una condicion con dos alternativas posibles */
    if (nombre.length < 2 || nombre.length >= 20) {
        document.getElementById('errores').innerHTML = "El nombre introducido no es valido, intentelo de nuevo.";
        return false;
    }else{
        document.getElementById('errores').innerHTML = "";
        return true;
    }
}

/* APELLIDO */
function rapellido(){
    const apellido = document.getElementById("apellido").value;
    if (apellido.length < 2 || apellido.length >= 20) {
        document.getElementById('errores').innerHTML = "El apellido introducido no es valido, intentelo de nuevo.";
        return false;
    }else{
        document.getElementById('errores').innerHTML = "";
        return true;
    }
}

/* USUARIO */
function rusuario(){
    const usuario = document.getElementById("usuario").value;
    if (usuario.length < 2 || usuario.length > 15) {
        document.getElementById('errores').innerHTML = "El usuario introducido no es valido, intentelo de nuevo";
        return false;
    }else{
        document.getElementById('errores').innerHTML = "";
        return true;
    }
}

/* CORREO */
function rcorreo(){
    const correo = document.getElementById("correo").value;
    //Expresion regular
    expresioncorreo = /\w+@[a-z]+\.+[a-z]/;
    if (expresioncorreo.test(correo)) {
        document.getElementById('errores').innerHTML = "";
        return true;
    }else{
        document.getElementById('errores').innerHTML = "Correo incorrecto, ejemplo: xxxx@xxxx.xxx";
        return false;
    }
}

/* CONTRASEÑA */
function rclave(){
    const clave = document.getElementById("pass").value;
    if (clave.length < 6 || clave.length > 20) {
        document.getElementById('errores').innerHTML = "clave no permitida, intentelo de nuevo.";
        return false;
    }else{
        document.getElementById('errores').innerHTML = "";
        return true;
        
    }
}

function rclavev(){
    const clave = document.getElementById("pass").value;
    const clavev = document.getElementById("pass2").value;
    if (clave !== clavev) {
        document.getElementById('errores').innerHTML = "clave no coinciden, intentelo de nuevo.";
        return false;
    }else{
        document.getElementById('errores').innerHTML = "";
        return true;
    }
}

function rcaptcha(){
    const captcha = document.getElementById("confirmacion").value;
    if (captcha.length < 1) {
        document.getElementById('errores').innerHTML = "Debes rellenar el captcha.";
        return false;
    }else{
        document.getElementById('errores').innerHTML = "";
        return true;
    }
}

/* Regístro del usuario */
function registro(){
    if(rnombre() && rapellido() && rusuario() && rcorreo() && rclave() && rclavev() && rcaptcha()){
        $(document).ready(function(){
            var datos = $('#frmajax').serialize();
            $.ajax({
                type: "POST",
                url: "guardar_datos/insertar.php",
                data: datos,
                success:function(r){
                    alert(r);
                }
            });   
        });
    }else{
        document.getElementById('errores').innerHTML = "El regístro no fue realizado.";
    }
}






