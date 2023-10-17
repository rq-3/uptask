<div class="contenedor olvide">
<?php include_once __DIR__ . '/../templates/nombre_sitio.php'; ?>

    <div class="contenedor-sm">
        <p class="descripcion-pagina">Recuperar Acceso</p>
<?php include_once __DIR__ . '/../templates/alertas.php'; ?>

        <form action="/olvide" novalidate method="POST" class="formulario">
            <div class="campo">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Tu email">
            </div>
            <input type="submit" value="Reestablecer" class="boton">
        </form>

        <div class="acciones">
            <a href="/">Login</a>
        </div>

    </div> <!--  conenedor-sm-->
</div>