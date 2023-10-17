
<?php include_once __DIR__ . '/header-dashboard.php'; ?>

<div class="contenedor-sm">
<p class="pago_folio">
    Folio: <span id="folls" class="folio_pago"> <?php  echo $pago->id; ?></span>
    <span class="pago_barra"> <?php  echo $pago->empresa; ?></span> <span class="folio_orden">Orden Folio: <?php  echo $folio; ?></span> 
</p>
</div>



<div class="contenedor">
           <p  class="heading-servi">Servicios</p> 
    <div class="ver_pago">
       
        <div class="ver_pago_caja">

        <?php foreach($contenido as $c): $servicio = $c->servicio; setlocale(LC_MONETARY, 'es_MX');

                if($servicio == "1"){
                    echo "<p class='servicaja s1'>Programa Interno</p>";
                }
                if($servicio == "2"){
                    echo "<p class='servicaja s2'>Capacitación</p>";
                }
                if($servicio == "3"){
                    echo "<p class='servicaja s3'>Simulacro</p>";
                }
                if($servicio == "4"){
                    echo "<p class='servicaja s4'>Plan de Emergencia</p>";
                }
                if($servicio == "5"){
                    echo "<p class='servicaja s5'>Dictamen: ".$c->datos4."</p>";
                }
                if($servicio == "6"){
                    echo "<p class='servicaja s6'>Gestion de Visto Bueno</p>";
                }
                if($servicio == "7"){
                    echo "<p class='servicaja s7'>Gestion de Licencia</p>";
                }
                if($servicio == "8"){
                    echo "<p class='servicaja s8'>Factibilidad de Giro</p>";
                }
                if($servicio == "9"){
                    echo "<p class='servicaja s9'>Opinion Técnica</p>";
                }
           
                endforeach; ?>

    </div>
        <p class="heading-servi">Datos</p>
    <div class="ver_pago_caja">
                <p class="pago_dato"><span>Fecha de creación</span> 
                     <?php echo $pago->fecha; ?>
                </p>
                <p class="pago_dato"> <span>Monto </span>
                    $<?php echo number_format($pago->monto, 2, '.', ','); ?>
                </p>
                <p class="pago_dato"><span>Anticipo</span> 
                    <?php  if($pago->anticipo == 'No') {echo $pago->anticipo;}
                    else{echo "$". number_format($pago->anticipo, 2, '.', ',');} ?>
                </p>
                <p class="pago_dato"> <span>Factura</span>
                    <?php echo $pago->factura; ?>
                </p>
                <p class="pago_dato"><span>Estado</span> 
                    <?php echo $pago->estado; ?>
                </p>

        </div>
        <p class="heading-servi">Observaciones</p>
        <div class="ver_pago_caja">
                  <p class="caja_pago_obs">  <?php echo $pago->obs; ?>
                </p>
        </div>


    </div>        

       
</div>


<?php include_once __DIR__ . '/footer-dashboard.php'; ?>