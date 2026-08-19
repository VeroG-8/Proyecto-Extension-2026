
<form class="formulario" id="form">
    <div class="header header-cajas titulo">CONSULTAS</div>
    <div class="campo">
      <label for="nombre">Nombre</label>
      <input type="text" id="name" name="name" placeholder="Tu nombre">
    </div>

    <div class="campo">
      <label for="apellido">Apellido</label>
      <input type="text" id="apellido" name="surname" placeholder="Tu apellido">
    </div>

    <div class="campo">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" required placeholder="correo@ejemplo.com">
    </div>

    <div class="campo">
      <label for="telefono">Teléfono</label>
      <input type="tel" id="telefono" placeholder="+54 ...">
    </div>

    <div class="campo campo-completo">
      <label for="mensaje">Mensaje</label>
      <textarea name="message" id="mensaje" placeholder="Escribe tu consulta aquí..."></textarea>
    </div>

    <button type="submit" id="btn-submit">Enviar</button>
    </form>
