<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style-formulario.css">   
    <link rel="stylesheet" type="text/css" href="css/style-img-carrusel.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Gelasio:ital,wght@0,400..700;1,400..700&family=Saira:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Mi Blog Personal</title>
</head>

<body>

    <header class="header">

      <h1 class="titulo-principal">Verónica Anahí Guaymás</h1>

      <p class="subtitulo">
        Técnica Electrónica / Programadora
      </p>

     <nav class="menu">

        <a class="menu-link" href="#contenedor">Inicio</a>

        <a class="menu-link" href="#sobre-mi">Sobre mi</a>

        <a class="menu-link" href="#educacion">Educación</a>

        <a class="menu-link" href="#experiencias">Experiencias</a>

        <a class="menu-link" href="#habilidades">Habilidades</a>

        <a class="menu-link" href="#herramientas">Herramientas</a>

         <a class="menu-link" href="#intereses">Intereses</a>

        <a class="menu-link" href="#contacto">Contacto</a>

      </nav>
    </header>  
  <div class="contenedor">

    <!-- Fila 1 -->

    <div class="caja caja-1 animar-scroll">
      <div class="header header-cajas">IMAGEN LOGO</div>
      <div class="body body-imagen">
        <div clas="carrusel">
          <img id="img-carrusel" src="img/yo.png" alt="image de presentacion">
        </div>
        </div>
        

    </div>
     <div class="caja caja-2 animar-scroll" id="sobre-mi">
      <div class="header header-cajas">SOBRE MI</div>
      <div class="body">
       
      </div>
    </div>

     <div class="caja caja-3 animar-scroll" id="educacion">
      <div class="header header-cajas">EDUCACIÓN</div>
      <div class="body">
        
      </div>
    <!-- Fila 2 -->

    </div>
     <div class="caja caja-4 animar-scroll" id="experiencias">
      <div class="header header-cajas">EXPERIENCIAS</div>
      <div class="body">
       
      </div>

    </div>
     <div class="caja caja-5 animar-scroll" id="habilidades">
      <div class="header header-cajas">HABILIDADES</div>
      <div class="body">
       
        
      </div>
    </div>

    <!-- Fila 3 -->

    <div class="caja caja-6 animar-scroll" id="herramientas">
      <div class="header header-cajas">HERRAMIENTAS</div>
      <div class="body">
       
      </div>
    </div>

    <div class="caja caja-7 animar-scroll" id="intereses">
      <div class="header header-cajas">INTERESES</div>
      <div class="body">
       
      </div>
    </div>

    <section class="caja caja-8 animar-scroll">
      <?php include 'formulario.php'; ?>
    </section>

    <!-- Fila 4 -->

    <footer class="caja caja-9 animar-scroll" id="contacto">
      <div class="header header-cajas">CONTACTOS</div>
      <div class="body">
        <p> 
            © 2026 Verónica Anahí Guaymás <br>
            Tel: (0387) 154025203 <br>
            E-mail: verogdevs@gmail.com <br>
            Salta - Capital
        </p>
        <a 
          href="file/CV-Veronica-Guaymas.pdf" 
          download="CV-Veronica-Guaymas.pdf"
          class="btn-cv"
        >⬇ Descargar CV</a>
      </div>
    </footer>

  </div>
<script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>