// 1. REEMPLAZA CON TU PUBLIC KEY

emailjs.init("sxV2pmb4K14COv_Zp");

const form = document.getElementById('form');
const btn = document.getElementById('btn-submit');

form.addEventListener('submit', function(e) {
      e.preventDefault();

      btn.disabled = true;
      btn.textContent = 'Enviando...';

      // 2. REEMPLAZA CON TU SERVICE_ID Y TEMPLATE_ID
  emailjs.sendForm('service_5uapspu', 'template_tiso4hy', this)
    .then(() => {
          alert('¡Correo enviado con éxito!');
          form.reset();
    })
    .catch((err) => {
        alert('Error al enviar el correo. Por favor intenta de nuevo.');
        console.error('EmailJS Error:', err);
      })
      .finally(() => {
        btn.disabled = false;
        btn.textContent = 'Enviar';
       });
});
 /*Interacciones para las cajas */

const elementos = document.querySelectorAll(".animar-scroll");

const observer = new IntersectionObserver((entradas) => {

    entradas.forEach((entrada) => {

        if (entrada.isIntersecting) {
          entrada.target.classList.add("visible");
          observer.unobserve(entrada.target);
        } else {
            entrada.target.classList.remove("visible");
        }
    });

});

elementos.forEach((elemento) => {
    observer.observe(elemento);
});

/*Efecto carrusel en las imagenes de presentacion*/


const imagenes = [
    "img/yo.png",
    "img/yoo.png",
    "img/yooo.png"
];

const imagenCarrusel = document.getElementById("img-carrusel");

let indice = 0;

function cambiarImagen() {

    // Desaparece suavemente
    imagenCarrusel.style.opacity = "0";

    setTimeout(() => {

        // Cambiamos el índice
        indice++;

        if (indice >= imagenes.length) {
            indice = 0;
        }

        // Cambiamos la imagen
        imagenCarrusel.src = imagenes[indice];

        // Volvemos a mostrarla
        imagenCarrusel.style.opacity = "1";

    }, 100);
}

// Cambia cada 10 segundos
setInterval(cambiarImagen, 5000);

// accion para el menu-link

const menuToggle = document.getElementById("menu-toggle");
const menuLinks = document.getElementById("menu-links");

menuToggle.addEventListener("click", () => {
    menuLinks.classList.toggle("activo");
});