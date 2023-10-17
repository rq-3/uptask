
<div class="caja_pago">
   <div class="campo">
    
        <label for="fecha"><img src="build/img/fecha.png">Fecha de elaboración</label>
        <input type="date" id="fecha" name="fecha">
   </div>
   <div class="campo">
        <label for="monto"><img src="build/img/monto.png">Monto Total</label>
        <input type="number" name="monto" id="monto">
   </div>

   <div class="campo">
        <label><img src="build/img/anticipo.png">Anticipo</label>
        <div class="radios_anticipo">
            <input type="radio" name="anticipo" value="Si" id="ansi">
            <label for="ansi"><img class="btn_ant" src="build/img/si.png"></label>
            <input type="radio" name="anticipo" value="No" id="anno">
            <label for="anno"><img class="btn_ant" src="build/img/no.png"></label>
        </div>
        

        <div class="campo_anticipo"></div>
   </div>

   <div class="campo">
    <label><img src="build/img/fact.png">Factura</label>
    <div class="radios_anticipo">
            <input type="radio" name="factura" value="Si" id="fasi">
            <label for="fasi"><img class="btn_ant" src="build/img/si.png"></label>
            <input type="radio" name="factura" value="No" id="fano">
            <label for="fano"><img class="btn_ant" src="build/img/no.png"></label>
        </div>

        <div class="campo_factura"></div>
   </div>

   <div class="campo">
     <label for="pago">Estado</label>
     <div class="radios_anticipo">
          <input type="radio" name="estado" value="Pendiente" id="pe">
          <label for="pe" class="radios_anticipo_pe btn">Pendiente</label>
          <input type="radio" name="estado" value="Pagado" id="pa">
          <label for="pa"  class="radios_anticipo_pa btn">Pagado</label>
     </div>


     
   </div>

   <div class="campo">
        <label for="obs"><img src="build/img/obs.png">Observación</label>
        <textarea name="obs" id="obs" cols="50" rows="5"></textarea>
   </div>
</div>

<input type="hidden" name="orden" value="<?php echo $cliente->folio; ?>">
<input type="hidden" name="empresa" value="<?php echo $cliente->empresa; ?>">

<script src="build/js/pagos.js"></script>

            
     