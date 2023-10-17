<div class="contenedor restablece">
<?php include_once __DIR__ . '/../templates/nombre_sitio.php'; ?>

    <div class="contenedor-sm">
        <p class="descripcion-pagina">Coloca tu nueva contraseña</p>
<?php include_once __DIR__ . '/../templates/alertas.php'; ?>
<?php if($mostrar) {  ?>
        <form method="POST" class="formulario">
            <div class="campo">
                <label for="password">password</label>
                <input type="password" id="password" name="password" placeholder="Tu password">
            </div>

            <input type="submit" value="Guardar" class="boton">
        </form>
<?php } ?>
        <div class="acciones">
            <a href="/crear">Crear Cuenta Texto provisional</a>
            <a href="/olvide">Olvido contraseña Texto provisional</a>
        </div>

    </div> <!--  conenedor-sm-->
</div>