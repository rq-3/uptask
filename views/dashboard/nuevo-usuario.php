<?php include_once __DIR__ . '/header-dashboard.php'; ?>


    
    <div class="contenedor-sm">


    <?php  include_once __DIR__ . '/../templates/alertas.php'; ?>

        <form action="/nuevo-usuario" class="formulario" method="POST">

        <?php include_once __DIR__ . '/formulario-nuevoUsuario.php'; ?>

        <div class="text-center">
            <input type="submit" class="boton" value="Agregar">
        </div>
            
        </form>
            
    </div>
   


<?php include_once __DIR__ . '/footer-dashboard.php'; ?>