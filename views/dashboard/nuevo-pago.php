<?php include_once __DIR__ . '/header-dashboard.php'; ?>

    <div class="contenedor-sm">
        <p class="foliorden">
            Folio: <span class="foliorden_folio"> <?php  echo $cliente->folio; ?></span>
            <span class="foliorden_barra"> <?php  echo $cliente->empresa; ?></span>
        </p>
    </div>


    
   

    <?php  include_once __DIR__ . '/../templates/alertas.php'; ?>


        <div class="contenedor">
            <form action="/nuevo-pago" class="formulario" method="POST">

    <?php include_once __DIR__ . '/formulario-pago.php'; ?>

        <div class="anticipo_btn">
           <input type="submit" class="boton" value="Agregar"> 
        </div>
        
    </form>
        </div>

        
            

   


<?php include_once __DIR__ . '/footer-dashboard.php'; ?>