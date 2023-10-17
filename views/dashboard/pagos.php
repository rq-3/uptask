
<?php include_once __DIR__ . '/header-dashboard.php'; ?>

<div class="contenedor-sm">

    <!-- <div class="agregar_nuevo">
        <a href="/pago-url" class="btn_agregar">
            <img class="btn_agregar_imagen" src="build/img/agrega.png" alt="">
        </a>
    </div>
                 -->
    <div class="busqueda">
         <input type="text" name="busqueda" id="searchbar" onkeyup="search_pay()">
    </div>
</div>
    <?php if(count($pagos) === 0){ ?>
        <p class="no-proyectos">No hay pagos</p>
    <?php } else {?>

    <?php foreach($pagos as $pago) { ?>
    
    <div class="trabajo_grid contenedor">  
        <div class="trabajo_caja">

            <div class="trabajo_caja_datos2">
                <p class="trabajo_id">Folio: <span><?php echo $pago->id; ?></span></p>
                <p class="trabajo_empresa"><?php echo $pago->empresa; ?></p>
                <p class="trabajo_orden">Orden Folio: <span><?php echo $pago->orden; ?></span> </p>
                <p class="trabajo_fecha">Factura <span class="factu"><?php echo $pago->factura; ?></span> </p>
                <p class="trabajo_status"> <?php echo $pago->estado; ?></p>
                <!-- <p class="trabajo_fecha">Fecha <span><?php echo $pago->fecha; ?></span> </p> -->
            </div>
                    

            <div class="trabajo_caja_botones">
                <a class="btn_ver" href="/ver-pago?url=<?php  echo $pago->orden; ?>">
                    <img src="build/img/lupa.png">
                </a>
                <a class="btn_editar" href="/editar-pay?url=<?php  echo $pago->id; ?>">
                    <img src="build/img/lapiz.png">
                </a>
            </div>
                    
        </div>
    </div>

    <?php }?>

    <?php } ?>
    




<?php include_once __DIR__ . '/footer-dashboard.php'; ?>
<script src="build/js/busqueda.js"></script>