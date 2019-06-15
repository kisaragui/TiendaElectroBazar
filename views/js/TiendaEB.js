/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function ingresar() {
    location.href="controllers/Sessions.php?opcion=1";
}

function enviar(id){
    
    var mostrar = document.getElementById("mostrar");
    mostrar.addEventListener("click",mostrarModal(id))
}

function mostrarModal(id) {
    
    const url = "Detalle.php?id="+id;
    fetch(url)
            .then(response => {
                return response.text();
          }).then((text) => {
                mostrar.innerHTML =  text;
          });
}
    


