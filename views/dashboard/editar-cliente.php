<?php include_once __DIR__ . '/header-dashboard.php'; ?>


    
    <div class="contenedor-sm">
    <?php  include_once __DIR__ . '/../templates/alertas.php'; ?>

        <form action="/editar-cliente" class="formulario" method="POST" >
      
        <?php include_once __DIR__ . '/formulario-cliente-editar.php'; ?>
          
            <input type="submit" class="boton_clientes" value="Actualizar">
        </form>
            
    </div>
   


<?php include_once __DIR__ . '/footer-dashboard.php'; ?>