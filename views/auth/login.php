<div class="contenedor login">
<?php include_once __DIR__ . '/../templates/nombre_sitio.php'; ?>

    <div class="contenedor-sm">
        <p class="descripcion-pagina">Iniciar Sesion</p>
<?php include_once __DIR__ . '/../templates/alertas.php'; ?>
        <form action="/" method="POST" class="formulario" novalidate>
            <div class="campo">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Tu email">
            </div>
            <div class="campo">
                <label for="password">password</label>
                <input type="password" id="password" name="password" placeholder="Tu password">
            </div>

            <div class="text-center">
                 <input type="submit" value="Iniciar Sesión" class="boton">
            </div>
           
        </form>

    </div> <!--  conenedor-sm-->
</div>