
<?php include_once __DIR__ . '/header-dashboard.php'; ?>

<div class="contenedor-sm">
<p class="pago_folio">
    Folio: <span id="folls" class="folio_pago"> <?php  echo $pago->id; ?></span>
    <span class="pago_barra"> <?php  echo $pago->empresa; ?></span> <span class="folio_orden">Orden Folio: <?php  echo $pago->orden; ?></span> 
</p>

<?php  include_once __DIR__ . '/../templates/alertas.php'; ?>
</div>



<div class="contenedor">
         
    <div class="ver_pago">
       <form method="POST">
        <p class="heading-servi">Datos</p>
    <div class="ver_pago_caja2">
                <p class="pago_dato"><span>Fecha de creación</span> 
                     <?php echo $pago->fecha; ?>
                </p>

                <div class="pago_dato">
                    <label for="mont">Monto</label>
                    <input id="mont" name="monto" type="number" autocomplete="nope" value="<?php echo $pago->monto; ?>">
                </div>
               
                <div class="pago_dato">
                     <label for="ant">Anticipo</label> 
                <input id="ant" name="anticipo" type="number" autocomplete="nope" value="<?php echo $pago->anticipo; ?>">
                </div>

                <div class="pago_dato">
                    <label for="fact">Factura</label>
                    <input  id="fact" name="factura" type="text" autocomplete="nope" class="pago_dato" value="<?php echo $pago->factura; ?>">
                    
                </div>

                <div class="pago_dato">
                    <label for="esta">Estado</label>
                    <input id="esta" name="estado" type="text" autocomplete="nope" class="pago_dato" value="<?php echo $pago->estado; ?>">
                </div>
                   

        </div>
        <p class="heading-servi">Observaciones</p>
        <div class="ver_pago_caja2">
                  <textarea class="caja_pago_obs" name="obs" autocomplete="nope"><?php echo $pago->obs; ?></textarea>  
        </div>

        <input type="hidden" id="rs" name="rs" value="<?php  echo $_SESSION['nombre']; ?>">
        <input type="hidden" id="fol" name="id" value="<?php  echo $pago->id; ?>">
        <input type="hidden" name="empresa" value="<?php  echo $pago->empresa; ?>">
        <input type="hidden"  name="orden" value="<?php  echo $pago->orden; ?>">
        <input type="hidden" name="fecha" value="<?php  echo $pago->fecha; ?>">

        <div class="btn_pago">
            <input type="submit" id="btnEnviar" value="Actualizar" class="boton_pago">
        </div>
        
    </div>        
</form>
       
</div>


<?php include_once __DIR__ . '/footer-dashboard.php'; ?>
<script src="build/js/edit.js"></script>