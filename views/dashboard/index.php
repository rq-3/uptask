
<?php use Model\Estados;
 include_once __DIR__ . '/header-dashboard.php'; ?>

    <div class="contenedor">
<div class="grid_agenda_barra">Agenda Hoy</div>
        <div class="clase_incio_dos">
            
            <div class="agenda_inicio">
                
            <?php foreach($agenda as $d): ?>
                    <?php
                    date_default_timezone_set("America/Mexico_City");
                        $fecha = $d->fecha1;
                        list($anio, $mes, $dia) = explode("-", $fecha);
                    
                        $hoy= date('d');
                        $month = date('m');
                        $year = date('Y');

                        
                    ?>

                        <?php if($dia !== $hoy && $mes !== $month  && $anio !== $year){ echo"<p class='sin-eventos'>No hay eventos para el dia de Hoy.</p>"; break;} else if($dia == $hoy && $mes == $month && $anio == $year){ ?>
                            <div class="campo_agenda">
                                <div class="campo_agenda_header">
                                    <p class="eve_heading"><?php echo $d->evento; ?></p>
                                    <p><?php echo $d->nombre; ?></p>
                                </div>

                                <div class="campo_agenda_hora">
                                <p class="text_center"><?php echo"<img src='build/img/fecha.png'>", $dia," de ", date('M');  ?></p>
                                <p class="text_center"><?php
                                    $hora = $d->hora1;
                                    list($hora, $min) = explode(":",$hora);
                                    if($hora > 12){
                                       echo "<img src='build/img/hora.png'>", $hora,":", $min, " PM";  
                                    }else{
                                        echo "<img src='build/img/hora.png'>", $hora,":", $min, " AM"; 
                                    }
                                 ?></p>
                                </div>
                            </div>

                        <?php }?>   
                          
                    
                <?php endforeach; ?>

            </div>


        </div>






        <div class="grid_agenda_barra">Servicios Pendientes</div>
        <div class="clase_inicio_uno">


        <?php if(count($estados) === 0){ ?>
        <p class="sin-eventos">No hay servicios Pendientes</p>
    <?php } else {?>
        
        <?php  foreach($estados as $e) { ?>
 
            <div class="servicioPendiente">


            <?php 

                if($e->servicio == 1){
                    echo "<a href='/orden?orden=$e->folio'><div class='servi'>Programa Interno <span>Orden: </span> </div>", "<span class='e'>".$e->folio."</span></a>" ;
                }
                if($e->servicio == 2){
                    echo "<a href='/orden?orden=$e->folio'><div class='servi'>Capacitación <span>Orden: </span> </div>", "<span class='e'>".$e->folio."</span></a>";
                }
                if($e->servicio == 3){
                    echo "<a href='/orden?orden=$e->folio'><div class='servi'>Simulacro <span>Orden: </span> </div> ", "<span class='e'>".$e->folio."</span></a>";
                }
                if($e->servicio == 4){
                    echo "<a href='/orden?orden=$e->folio'><div class='servi'>Plan de Emergencias <span>Orden: </span> </div>", "<span class='e'>".$e->folio."</span></a>";
                }
                if($e->servicio == 5){
                    echo "<a href='/orden?orden=$e->folio'><div class='servi'>Dictamen <span>Orden: </span> </div>", "<span class='e'>".$e->folio."</span></a>";
                }
                if($e->servicio == 6){
                    echo "<a href='/orden?orden=$e->folio'><div class='servi'>Gestión de Visto Bueno <span>Orden: </span> </div>", "<span class='e'>".$e->folio."</span></a>";
                }
                if($e->servicio == 7){
                    echo "<a href='/orden?orden=$e->folio'><div class='servi'>Gestión de Licencia <span>Orden: </span> </div>", "<span class='e'>".$e->folio."</span></a>";
                }
                if($e->servicio == 8){
                    echo "<a href='/orden?orden=$e->folio'><div class='servi'>Factibilidad de Giro <span>Orden: </span> </div> ", "<span class='e'>".$e->folio."</span></a>";
                }
                if($e->servicio == 9){
                    echo "<a href='/orden?orden=$e->folio'><div class='servi'>Opinión Técnica <span>Orden: </span> </div>", "<span class='e'>".$e->folio."</span></a>";
                }
              
                if($e->servicio == 10){
                    echo "<a href='/orden?orden=$e->folio'><div class='servi'>Trámite <span>Orden: </span> </div>", "<span class='e'>".$e->folio."</span></a>";
                }
              
            ?>
     </div>
        <?php }?>
<?php }?>
            

        </div>

    <?php if($_SESSION['type'] == "1"): ?>
 
        <div class="grid_agenda_barra separacion">Movimientos </div>
    <div class="movimientos"> 
        <?php if(count($ediciones) === 0){ ?>
        <p class="sin-eventos">No hay servicios Pendientes</p>
    <?php } else {?>
        <?php  foreach($ediciones as $ed) { ?>
           
            <div class="movimientos_caja">
                <p><img src="build/img/usr.png"><?php echo $ed->editor; ?></p>
                <p>Editó <?php echo $ed->edita; ?></p>
                <p class="folio"><?php echo $ed->folio; ?></p>
                <p><img src="build/img/fecha.png"><?php date_default_timezone_set("America/Mexico_City"); echo $ed->fecha; ?></p>
                <p><?php
                                    $hora = $ed->hora;
                                    list($hora, $min) = explode(":",$hora);
                                    if($hora <= 12){
                                       echo "<img src='build/img/hora.png'>", $hora-1,":", $min, " PM";  
                                    }else{
                                        echo "<img src='build/img/hora.png'>", $hora-1,":", $min, " AM"; 
                                    }
                                 ?></p>
            </div>
           

        <?php }?>
    <?php }?>
   </div>         
   <?php endif; ?>

    </div>

  


<?php include_once __DIR__ . '/footer-dashboard.php'; ?>