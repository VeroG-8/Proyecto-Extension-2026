<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style-formulario.css">   
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

        <a class="menu-link" href="#inicio">Inicio</a>

        <a class="menu-link" href="#sobre-mi">Menu 1</a>

        <a class="menu-link" href="#proyectos">Menu 2</a>

        <a class="menu-link" href="#habilidades">Menu 3</a>

        <a class="menu-link" href="#contacto">Contacto</a>

      </nav>
    </header>  
  <div class="contenedor">

    <!-- Fila 1 -->

    <div class="caja caja-1">
      <div class="header header-cajas">IMAGEN LOGO</div>
      <div class="body body-imagen">
        <img src="img/logo.png" alt="yo">
      </div>

    </div>
     <div class="caja caja-2">
      <div class="header header-cajas">SOBRE MI</div>
      <div class="body">
       
      </div>
    </div>

     <div class="caja caja-3">
      <div class="header header-cajas">EDUCACIÓN</div>
      <div class="body">
        
      </div>
    <!-- Fila 2 -->

    </div>
     <div class="caja caja-4">
      <div class="header header-cajas">EXPERIENCIAS</div>
      <div class="body">
       
      </div>

    </div>
     <div class="caja caja-5">
      <div class="header header-cajas">HABILIDADES</div>
      <div class="body">
       
        
      </div>
    </div>

    <!-- Fila 3 -->

    <div class="caja caja-6">
      <div class="header header-cajas">HERRAMIENTAS</div>
      <div class="body">
       
      </div>
    </div>

    <div class="caja caja-7">
      <div class="header header-cajas">INTERESES</div>
      <div class="body">
       
      </div>
    </div>

    <section class="caja caja-8">
      <?php include 'formulario.php'; ?>
    </section>

    <!-- Fila 4 -->

    <footer class="caja caja-9" id="contacto">
      <div class="header header-cajas">CONTACTOS</div>
      <div class="body body-imagen">
        
      </div>
    </footer>

  </div>
<script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>