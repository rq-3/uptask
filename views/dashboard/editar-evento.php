<?php include_once __DIR__ . '/header-dashboard.php'; ?>


    
    <div class="contenedor-sm">
    <?php  include_once __DIR__ . '/../templates/alertas.php'; ?>

      
      
  <form method="POST">        
<div class="contenedor-sm">
    <div class="evento_heading">
       <input type="text" autocomplete="nope" class="bozx" name="evento" value="<?php echo $evento->evento; ?>"><span></span></input> 
       <input type="text" autocomplete="nope" class="bozx" name="nombre" value="<?php echo $evento->nombre; ?>"><span></span></input> 

    </div>
</div>

<div class="contenedor-sm">
           
    <div class="fondo_blanco">

        <div class="fechora2">
            <div class="fechora2_caja2">
                <label for="fech1"><img src="build/img/fecha2.png"></label>
                <input type="date" id="fech1" name="fecha1" value="<?php echo $evento->fecha1; ?>">
                <label for="fech2"><img src="build/img/fecha.png"></label>
                <input type="date" id="fech2" name="fecha2" value="<?php echo $evento->fecha2; ?>">
            </div>
            <div class="fechora2_caja2">
                <label for="time1"><img src="build/img/relo.png"></label>
                <input type="time" id="time1" name="hora1" value="<?php echo $evento->hora1; ?>">
               
                <label for="time2"><img src="build/img/relo2.png"></label>
                <input type="time" id="time2" name="hora2" value="<?php echo $evento->hora2; ?>">
               
            </div>
        </div>

        <div class="observacion">
            <textarea name="obs" id="" cols="30" rows="10"><?php echo $evento->obs; ?></textarea>
        </div>
    </div>

       
</div>

            <input type="hidden" name="id" value="<?php echo $evento->id; ?>">
            <input type="hidden" name="creador" value="<?php echo $evento->creador; ?>">
            <input type="submit" class="boton_agenda" value="Actualizar">
        </form>
            
    </div>
   


<?php include_once __DIR__ . '/footer-dashboard.php'; ?>