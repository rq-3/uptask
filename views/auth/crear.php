<div class="contenedor crear">
<?php include_once __DIR__ . '/../templates/nombre_sitio.php'; ?>

    <div class="contenedor-sm">
        <p class="descripcion-pagina">Crear cuenta nueva</p>
<?php include_once __DIR__ . '/../templates/alertas.php'; ?>
        <form action="/crear" method="POST" class="formulario">
            <div class="campo">
                <label for="nombre">nombre</label>
                <input type="text" id="nombre" name="nombre"
                 placeholder="Tu nombre" value="<?php echo$usuario->nombre; ?>">
            </div>
            <div class="campo">
                <label for="email">Email</label>
                <input type="email" id="email" name="email"
                 placeholder="Tu email" value="<?php echo$usuario->email; ?>">
            </div>
            <div class="campo">
                <label for="password">password</label>
                <input type="password" id="password" name="password" 
                placeholder="Tu password">
            </div>
            <div class="campo">
                <label for="password2">Repite tu password</label>
                <input type="password" id="password2" name="password2" 
                placeholder="Repite tu password">
            </div>

            <div class="campo">
                <label for="tipo">Tipo de Usuario</label>
                <select name="type" id="tipo">
                    <option value="0" >Selecciona</option>
                    <option value="1">Empleado</option>
                    <option value="2">Administrativo</option>
                    <option value="3">Socio</option>
                </select>
            </div>

            <input type="submit" value="Crear Cuenta" class="boton">
        </form>

        <div class="acciones">
            <a href="/">login</a>
            <a href="/olvide">Olvido contraseña Texto provisional</a>
        </div>

    </div> <!--  conenedor-sm-->
</div>