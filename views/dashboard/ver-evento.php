
<?php include_once __DIR__ . '/header-dashboard.php'; ?>

<div class="contenedor-sm">
    <div class="evento_heading">
       <p class="evento_evento"><?php echo $evento->evento; ?><span></span></p> 
        <p class="evento_nombre"><?php echo $evento->nombre; ?></p>
    </div>
</div>

<div class="contenedor-sm">
           
    <div class="fondo_blanco">
        <div class="creador">
            <p class="creador_por">Creado por:</p>
            <p class="evento_creador"><img src="build/img/usr2.png"> <?php echo $evento->creador; ?></p>
        </div>

        <div class="fechora">
            <div class="fechora_caja">
                <p><img src="build/img/fecha2.png"><?php echo $evento->fecha1; ?></p>
                <p><img src="build/img/fecha.png"><?php echo $evento->fecha2; ?></p>
            </div>
            <div class="fechora_caja">
                <p><img src="build/img/relo.png"><?php echo $evento->hora1; ?></p>
                <p><img src="build/img/relo2.png"><?php echo $evento->hora2; ?></p>
            </div>
        </div>

        <div class="observacion">
            <p><?php echo $evento->obs; ?></p>
        </div>
    </div>

       
</div>


<?php include_once __DIR__ . '/footer-dashboard.php'; ?>