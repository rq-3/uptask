<?php include_once __DIR__ . '/header-dashboard.php'; ?>


    
    <div class="contenedor-sm">
    <p class="nombre_cliente_orden">
                            <?php
                                echo $cliente->nombre; 
                                date_default_timezone_set("America/Mexico_City");
                                
                            ?>
                        </p>
    <?php  include_once __DIR__ . '/../templates/alertas.php'; ?>
</div>

    <div class="contenedor">
   

         <form action="/nueva-orden" method="POST">
            <input type="hidden" name="empresa" 
            value="<?php echo $cliente->nombre; ?>">
            <input type="hidden" name="fecha" 
            value="<?php echo  date("Y/m/d"); ?>">
            <input type="hidden" name="folio" id="folio"
            value="<?php echo $conter->folio+1; ?>">
            <input type="hidden" name="estado" 
            value="1">
            <input type="hidden" name="creador" 
            value="<?php echo $user; ?>">
            <?php include_once __DIR__ . '/formulario-orden.php'; ?>
        </form>  
           

    
    </div>
       
            
    
   


<?php include_once __DIR__ . '/footer-dashboard.php'; ?>