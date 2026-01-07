<h1 class="nombre-pagina">Olvide Password</h1>
<p class="descripcion-pagina">Reestable tu password escribiendo tu email</p>
<form action="/olvide" class="formulario" method="POST">
    <div class="campo">
        <label for="email">E-mail</label>
        <input
            type="email"
            name="email"
            id="email"
            placeholder="Tu Email">
    </div>
    <input type="submit" value="Enviar Instrucciones" class="boton">
</form>
<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Inicia Sesión</a>
    <a href="/crear-cuenta">¿Aun no tienes una cuenta? Crear una</a>

</div>