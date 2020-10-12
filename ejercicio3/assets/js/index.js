// Variables
const btnSiguiente = document.getElementById("btnSiguiente");
const btnEnviar = document.getElementById("btnEnviar");


eventListers();

function eventListers() {
    // Eventos.
    if (btnSiguiente) {
        btnSiguiente.addEventListener("click", accionSiguiente);
    }
    if (btnEnviar) {
        btnEnviar.addEventListener("click", accionEnviar);
    }
}

function accionSiguiente() {
    console.log("Presionaste siguiente");
}

function accionEnviar() {

}

function initApp() {
    $("#btnEnviar").hide();
}