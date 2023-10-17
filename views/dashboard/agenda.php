
<?php include_once __DIR__ . '/header-dashboard.php'; ?>
    <div class="contenedor-sm">
        <div class="agregar_nuevo">
            <a  href="/agenda-agregar" class="btn_agregar">
                <img class="btn_agregar_imagen" src="build/img/agrega.png" alt="">
            </a>
        </div>

    </div>
    <?php date_default_timezone_set("America/Mexico_City"); ?>

    <div class="contenedor">
<?php if(count($datos) === 0){ ?>
        <p class="no-proyectos">No hay Eventos</p>
    <?php } else {?>
        <div class="grid_agenda_barra">El dia de Hoy</div>
            <div class="agenda_evento">
                <?php foreach($datos as $d): ?>
                    <?php
                        $fecha = $d->fecha1;
                        list($anio, $mes, $dia) = explode("-", $fecha);
                    
                        $hoy= date('d');
                        $month = date('m');
                        $year = date('Y');
                    ?>

                        <?php if($dia == $hoy && $mes == $month && $anio == $year): ?>
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

                        <?php endif;?>   
                          
                    
                <?php endforeach; ?>
            </div>
            <div class="grid_agenda_barra martop">Este Mes</div>
            <div class="agenda_evento">
            <?php foreach($datos as $d): ?>
                <?php
                        $fecha = $d->fecha1;
                        list($anio, $mes, $dia) = explode("-", $fecha);
                    
                        $hoy= date('d');
                        $month = date('m');
                        $year = date('Y');
                    ?>

                        <?php if($mes == $month && $anio == $year): ?>
                            <div class="campo_agenda">
                                <div class="campo_agenda_header">
                                    <p class="eve_heading"><?php echo $d->evento; ?></p>
                                    <p><?php echo $d->nombre; ?></p>
                                </div>

                               
                                <div class="campo_agenda_dia">
                                <a  href="/ver-evento?url=<?php echo$d->id; ?>"><?php
                                    if($dia == $hoy){
                                       echo "<div class='caja_dia hoy'>".$dia."</div>";  
                                    }else{
                                        echo "<div class='caja_dia normal'>".$dia."</div>";  
                                    }
                                 
                                 ?></a>
                                </div>
                                <div class="campo_agenda_hora">
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
                                
                                 <?php if($d->creador == $_SESSION['nombre'] ): ?>
                                    <div class="btn_agenda">
                                       <a href="/editar-evento?url=<?php echo $d->id; ?>"><img src="build/img/lapiz.png"></a>
                                    </div>
                                <?php endif;?>
                                
                            </div>

                        <?php endif;?>   
                          
                    
                <?php endforeach; ?>
            </div>
            <div class="grid_agenda_barra martop">Todos</div>
            <div class="scroll-todos">
               <div class="agenda_evento">
            <?php foreach($datos as $d): ?>
                <?php
                        $fecha = $d->fecha1;
                        list($anio, $mes, $dia) = explode("-", $fecha);
                    
                        $hoy= date('d');
                        $month = date('m');
                        $mon = date('M',strtotime($fecha));
                        $year = date('Y');
                        
                    ?>

                            <div class="campo_agenda">
                                <div class="campo_agenda_header">
                                    <p class="eve_heading"><?php echo $d->evento; ?></p>
                                    <p><?php echo $d->nombre; ?></p>
                                </div>

                                <?php ?>

                                <?php ?>
                                <div class="campo_agenda_dia">
                                <a class="caja_dia" href="/ver-evento?url=<?php echo$d->id; ?>"><?php echo $dia;?></a>
                                <p class="diames"><?php echo $mon," - ", $anio;?></p>
                                </div>

                           
                            </div>


                          
                    
                <?php endforeach; ?>
            </div>

     
     <?php } ?> 
            </div>
            
    </div>

        
    

<?php include_once __DIR__ . '/footer-dashboard.php'; ?>

