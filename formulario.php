
<form class="formulario" id="form" action="enviar.php" method="POST">
    <div class="header header-cajas titulo">CONSULTAS</div>
    <div class="campo">
      <label for="nombre">Nombre</label>
      <input type="text" id="nombre" placeholder="Tu nombre">
    </div>

    <div class="campo">
      <label for="apellido">Apellido</label>
      <input type="text" id="apellido" placeholder="Tu apellido">
    </div>

    <div class="campo">
      <label for="email">Email</label>
      <input type="email" id="email" placeholder="correo@ejemplo.com">
    </div>

    <div class="campo">
      <label for="telefono">Teléfono</label>
      <input type="tel" id="telefono" placeholder="+54 ...">
    </div>

    <div class="campo campo-completo">
      <label for="mensaje">Mensaje</label>
      <textarea id="mensaje" placeholder="Escribe tu consulta aquí..."></textarea>
    </div>

    <button type="submit" id="btn-submit">Enviar</button>
    </form>
