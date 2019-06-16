// Script para verificar las publicaicones añadidos por el usuario.
window.onload  = function(){
    /* NOMBRE */
    const titulo = document.getElementById("titulo");
    titulo.addEventListener("focusout", vtitulo);
    
    /* BOTON DE REGÍSTRO */
    const registro = document.getElementById("regpublic");
    titulo.addEventListener("click", registrardato);
    
 
    
};


/* VERIFICAR NOMBRE */
function vtitulo(){
    /* Defínimos la variable para conocer su valor. */ 
    const titulo = document.getElementById("titulo").value;
    /* Introducimos una condicion con dos alternativas posibles */
    if (titulo.length < 2 || titulo.length >= 60) {
        /* respuesta cuando es incorrecto lo introducido */
        document.getElementById('panel_respuesta').innerHTML = "El titulo introducido no es valido, intentelo de nuevo.";
        return false;
    }else{
        /* respuesta cuando es correcto lo introducido */
        document.getElementById('panel_respuesta').innerHTML = "";
        return true;
    }
}

/* REGISTRAR DATO */
function registrardato(){
   document.getElementById('panel_respuesta').innerHTML = "Regístro realizado"; 
}