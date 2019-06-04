/* CONTADOR DE CARACTERES */

function contarcaracteres(){
    //Definimos la cantidad de caracteres posibles.
    var total=630;
    
    setTimeout(function(){
        //Conseguímos el id del texto.
        var valor=document.getElementById('texto');
        //Conseguímos el id de la respuesta.
        var respuesta=document.getElementById('res');
        //Contamos la cantidad del valor en el textarea
        var cantidad=valor.value.length;
        //Y se va mostrando por pantalla a medida que pulsemos el teclado.
        document.getElementById('res').innerHTML = cantidad + ' caractere/s, te quedan ' + (total - cantidad);
        
        //Una condición.
        //Si la cantidad es mayor o igual que el maximo permitido se pondra en rojo.
        if(cantidad>=total){
            respuesta.style.color = "red";
        //De lo contrario se mantiene en blanco.
        }else{
            respuesta.style.color = "white";
        }
    },10);
}
