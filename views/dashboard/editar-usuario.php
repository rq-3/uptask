<?php include_once __DIR__ . '/header-dashboard.php'; ?>


    
    <div class="contenedor-sm">
    <?php  include_once __DIR__ . '/../templates/alertaUsuario.php'; ?>

        <form class="formulario" method="POST" novalidate>
      
        <?php include_once __DIR__ . '/formulario-editaUsuario.php'; ?>
          
            <input type="submit" class="boton_clientes" value="Actualizar">
        </form>
            
    </div>
   


<?php include_once __DIR__ . '/footer-dashboard.php'; ?>