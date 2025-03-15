 // Función para mostrar la notificación
 function mostrarNotificacion(mensaje) {
    let notificacion = document.getElementById("notificacion");
    notificacion.innerText = mensaje;
    notificacion.style.display = "block";

    // Ocultar la notificación después de 3 segundos
    setTimeout(() => {
        notificacion.style.display = "none";
    }, 3000);
}

// Detectar si en la URL está el mensaje de "guardado"
window.onload = function() {
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get('mensaje') === 'guardado') {
        mostrarNotificacion('✅ Guardado exitosamente');

        // Limpiar el parámetro de la URL después de mostrar la notificación
        history.replaceState(null, "", window.location.pathname);
    }
};