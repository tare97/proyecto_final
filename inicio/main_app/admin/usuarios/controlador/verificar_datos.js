// Script para verificar los elementos añadidos por el usuario.
window.onload  = function(){
    /* NOMBRE */
    const nombre = document.getElementById("nombre");
    nombre.addEventListener("focusout", vnombre);
    
    /* APELLIDO */
    const apellido = document.getElementById("apellido");
    apellido.addEventListener("focusout", vapellido);
    
    /* USUARIO */
    const usuario = document.getElementById("usuario");
    usuario.addEventListener("focusout", vusuario);
    
    /* CORREO */
    const correo = document.getElementById("correo");
    correo.addEventListener("focusout", vcorreo);
    
    /* CONTRASEÑAS */
    const clave = document.getElementById("clave");
    clave.addEventListener("focusout", vclave);   
    
};


/* VERIFICAR NOMBRE */
function vnombre(){
    /* Defínimos la variable para conocer su valor. */ 
    const nombre = document.getElementById("nombre").value;
    /* Introducimos una condicion con dos alternativas posibles */
    if (nombre.length < 2 || nombre.length >= 20) {
        /* respuesta cuando es incorrecto lo introducido */
        document.getElementById('panel_respuesta').innerHTML = "El nombre introducido no es valido, intentelo de nuevo.";
        return false;
    }else{
        /* respuesta cuando es correcto lo introducido */
        document.getElementById('panel_respuesta').innerHTML = "";
        return true;
    }
}

/* VERIFICAR APELLIDO */
function vapellido(){
    /* Defínimos la variable para conocer su valor. */ 
    const apellido = document.getElementById("apellido").value;
    /* Introducimos una condicion con dos alternativas posibles */
    if (apellido.length < 2 || apellido.length >= 20) {
        /* respuesta cuando es incorrecto lo introducido */
        document.getElementById('panel_respuesta').innerHTML = "El apellido introducido no es valido, intentelo de nuevo.";
        return false;
    }else{
        /* respuesta cuando es correcto lo introducido */
        document.getElementById('panel_respuesta').innerHTML = "";
        return true;
    }
}

/* CORREO */
function vcorreo(){
    /* Defínimos la variable para conocer su valor. */ 
    const correo = document.getElementById("correo").value;
    //Expresion regular
    expresioncorreo = /\w+@[a-z]+\.+[a-z]/;
    /* Introducimos una condicion */
    if (expresioncorreo.test(correo)) {
        /* respuesta cuando es correcto lo introducido */
        document.getElementById('panel_respuesta').innerHTML = "";
        return true;
    }else{
        /* respuesta cuando es incorrecto lo introducido */
        document.getElementById('panel_respuesta').innerHTML = "Correo incorrecto, ejemplo: xxxx@xxxx.xxx";
        return false;
    }
}

/* USUARIO */
function vusuario(){
    /* Defínimos la variable para conocer su valor. */ 
    const usuario = document.getElementById("usuario").value;
    /* Introducimos una condicion con dos alternativas posibles */
    if (usuario.length < 2 || usuario.length > 15) {
        /* respuesta cuando es correcto lo introducido */
        document.getElementById('panel_respuesta').innerHTML = "El usuario introducido no es valido, intentelo de nuevo";
        return false;
    }else{
        /* respuesta cuando es incorrecto lo introducido */
        document.getElementById('panel_respuesta').innerHTML = "";
        return true;
    }
}

/* CONTRASEÑA */
function vclave(){
    /* Defínimos la variable para conocer su valor. */ 
    const clave = document.getElementById("clave").value;
    /* Introducimos una condicion con dos alternativas posibles */
    if (clave.length < 6 || clave.length > 20) {
        /* respuesta cuando es correcto lo introducido */
        document.getElementById('panel_respuesta').innerHTML = "clave no permitida, intentelo de nuevo.";
        return false;
    }else{
        /* respuesta cuando es incorrecto lo introducido */
        document.getElementById('panel_respuesta').innerHTML = "";
        return true;
        
    }
}