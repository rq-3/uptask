<?php include_once __DIR__ . '/header-dashboard.php'; ?>


    
    <div class="contenedor-sm">
    <?php  include_once __DIR__ . '/../templates/alertas.php'; ?>

        <form action="/nuevo-cliente" class="formulario" method="POST" >

        <?php include_once __DIR__ . '/formulario-cliente.php'; ?>
            <input type="hidden" name="token" value="<?php echo md5(uniqid()); ?>">
            <input type="submit" class="boton_clientes" value="Agregar">
        </form>
            
    </div>
   


<?php include_once __DIR__ . '/footer-dashboard.php'; ?>