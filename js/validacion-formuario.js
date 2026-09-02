const formulario = document.getElementById("form");

formulario.addEventListener("submit", function(event) {

    const nombre = document.getElementById("name").value.trim();
    const apellido = document.getElementById("apellido").value.trim();
    const correo = document.getElementById("email").value.trim();
    const mensaje = document.getElementById("mensaje").value.trim();

    const soloLetras = /^[A-Za-zÁÉÍÓÚáéíóúÑñÜü\s]+$/;
    const formatoCorreo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (nombre.length < 2 || !soloLetras.test(nombre)) {
        event.preventDefault();
        alert("Ingrese un nombre válido.");
        return;
    }

    if (apellido.length < 2 || !soloLetras.test(apellido)) {
        event.preventDefault();
        alert("Ingrese un apellido válido.");
        return;
    }

    if (!formatoCorreo.test(correo)) {
        event.preventDefault();
        alert("Ingrese un correo electrónico válido.");
        return;
    }

    if (mensaje.length < 4) {
        event.preventDefault();
        alert("Ingrese al menos 4 caracteres.");
        return;
    }


});