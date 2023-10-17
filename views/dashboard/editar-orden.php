<?php include_once __DIR__ . '/header-dashboard.php'; ?>


    
    <div class="contenedor-sm">
    <p class="foliorden">
    Folio: <span id="folls" class="foliorden_folio"> <?php  echo $datos->folio; ?></span>
    <span class="foliorden_barra"> <?php  echo $datos->empresa; ?></span>
</p>
    <?php  include_once __DIR__ . '/../templates/alertas.php'; ?>
</div>
        <form class="formulario" method="POST">

        <input type="hidden" name="editor" value="<?php echo $editor; ?>">
            <?php
            date_default_timezone_set("America/Mexico_City");
            foreach($orden as $o){}
            ?>
        <input type="hidden" name="editor" value="<?php echo $editor; ?>">
        <input type="hidden" name="edita" value="Orden">
        <input type="hidden" name="folio" id="folio" value="<?php echo $o->folio; ?>">
        <input type="hidden" name="fecha" value="<?php echo date("Y/m/d"); ?>">
        <input type="hidden" name="hora" value="<?php  echo date('h:i A'); ?>">
      
        <?php include_once __DIR__ . '/formulario-editaOrden.php'; ?>
          
            <input type="submit" id="btnEnviar" class="boton_clientes" value="Actualizar">
        </form>
            
    
   


<?php include_once __DIR__ . '/footer-dashboard.php'; ?>

<script src="build/js/erden.js"></script>