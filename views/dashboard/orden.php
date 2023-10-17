

            
<?php include_once __DIR__ . '/header-dashboard.php'; ?>

<div class="contenedor-sm">
<p class="foliorden">
    Folio: <span id="folls" class="foliorden_folio"> <?php  echo $folio; ?></span>
    <span class="foliorden_barra"> <?php  echo $nombre->empresa; ?></span>
</p>
</div>

    


<?php include_once __DIR__ . '/listado-orden.php'; ?>




<?php include_once __DIR__ . '/footer-dashboard.php'; ?>

<input type="hidden" id="ordenFolio" value="<?php echo $folio; ?>">
<script src="build/js/estados.js"></script>