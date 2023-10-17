<div class="contenedor">
    

<?php foreach($ord as $datos) { ?>
    
        
    <div class="listado_servicios">
    <?php if($datos->servicio == 1){  ?>

        <div class="caja_listado">
            <div class="listado_salto">
                <p class="caja_listado_servicio c1">Programa Interno</p>
                <button
                 id="btn1status" 
                 class="btn_estados <?php if(isset($estado))  echo $estado->estado;  ?>">
                 <?php if(isset($estado)) echo $estado->estado;  ?></button>
            
            </div>

            <div class="listado_salto2">
                <p> <span>Descripcion</span><?php echo $datos->datos5; ?></p>
                <p><span>Firma</span><?php echo $datos->datos7; ?></p>
                <p><span>Elabora</span><?php echo $datos->datos4; ?></p>
                <p><span>Fecha Inicio</span><?php echo $datos->datos1; ?></p>
                <p><span>Fecha Termino</span><?php echo $datos->datos2; ?></p>
                <p class="caja_listado_obs"><span>Observacion</span><?php echo $datos->datos6; ?></p>
            </div>
        </div>
        
    <?php     }elseif($datos->servicio == 2){  ?>

        <div class="caja_listado">
            <div class="listado_salto">
                <p class="caja_listado_servicio c2">Capacitación</p>
                <button
                 id="btn2status" 
                 class="btn_estados <?php if(isset($estado2))  echo $estado2->estado; ?>">
                 <?php if(isset($estado2)) echo $estado2->estado;  ?>
                </button>
            </div>

            <div class="listado_salto2">
                <p><span>Curso</span><?php echo $datos->datos8; ?></p>
                <p><span>Lugar</span><?php echo $datos->datos7; ?></p>
                <p><span>Instructor</span><?php echo $datos->datos5; ?></p>
                <p><span>Dias Programados</span><?php echo $datos->datos4; ?></p>
                <p class="caja_listado_obs"><span>Observación</span><?php echo $datos->datos6; ?></p>
            </div>
        </div>

    <?php     }elseif($datos->servicio == 3){  ?>

        <div class="caja_listado">
            <div class="listado_salto">
                <p class="caja_listado_servicio c3">Simulacro</p>
                <button
                 id="btn3status" 
                 class="btn_estados <?php if(isset($estado3))  echo $estado3->estado; ?>">
                 <?php if(isset($estado3)) echo $estado3->estado;  ?>
                </button>
            </div>

            <div class="listado_salto2">
                <p><span>Fecha</span><?php echo $datos->datos1; ?></p>
                <p><span>Evalúa</span><?php echo $datos->datos5; ?></p>
                <p class="caja_listado_obs"><span>Observación</span><?php echo $datos->datos6; ?></p>
            </div>
        </div>

    <?php     }elseif($datos->servicio == 4){  ?>

        <div class="caja_listado">
            <div class="listado_salto">
                <p class="caja_listado_servicio c4">Plan de Emergencia</p>
                <button
                 id="btn4status" 
                 class="btn_estados <?php if(isset($estado4))  echo $estado4->estado; ?>">
                 <?php if(isset($estado4)) echo $estado4->estado;  ?>
                </button>
            </div>

            <div class="listado_salto2">
                <p><span>Elabora</span><?php echo $datos->datos5; ?></p>
                <p><span>Fecha Termino</span><?php echo $datos->datos1; ?></p>
                <p><span>Fecha Entrega</span><?php echo $datos->datos2; ?></p>
                <p class="caja_listado_obs"><span>Observación</span><?php echo $datos->datos6; ?></p>
            </div>
        </div>

    <?php     }elseif($datos->servicio == 5){  ?>

        <div class="caja_listado">
            <div class="listado_salto">
                <p class="caja_listado_servicio c5">Dictamenes</p>
                <button
                 id="btn5status" 
                 class="btn_estados <?php if(isset($estado5))  echo $estado5->estado; ?>">
                 <?php if(isset($estado5)) echo $estado5->estado;  ?>
                </button>
            </div>

            <div class="listado_salto2">
                <p class="caja_listado_cursos"><span>Contenido</span><?php echo $datos->datos4; ?></p>
                <p class="caja_listado_obs"><span>Observación</span><?php echo $datos->datos6; ?></p>
            </div>
        </div>

    <?php    }elseif($datos->servicio == 6){  ?>
        
        <div class="caja_listado">
            <div class="listado_salto">
                <p class="caja_listado_servicio c6">Gestion de Visto Bueno</p>
                <button
                 id="btn6status" 
                 class="btn_estados <?php if(isset($estado6))  echo $estado6->estado; ?>">
                 <?php if(isset($estado6)) echo $estado6->estado;  ?>
                </button>
            </div>

            <div class="listado_salto2">
                <p><span>Fecha Ingreso</span><?php echo $datos->datos1; ?></p>
                <p><span>Fecha Entrega SG</span><?php echo $datos->datos2; ?></p>
                <p><span>Fecha Entrega Cliente</span><?php echo $datos->datos3; ?></p>
                <p class="caja_listado_obs"><span>Observación</span><?php echo $datos->datos6; ?></p>
            </div>
        </div>

    <?php  }elseif($datos->servicio == 7){  ?>
        <div class="caja_listado">
            <div class="listado_salto">
                <p class="caja_listado_servicio c7">Gestion de Licencia</p>
                <button
                 id="btn7status" 
                 class="btn_estados <?php if(isset($estado7))  echo $estado7->estado; ?>">
                 <?php if(isset($estado7)) echo $estado7->estado;  ?>
                </button>
            </div>

            <div class="listado_salto2">
                <p><span>Fecha Ingreso</span><?php echo $datos->datos1; ?></p>
                <p><span>Fecha Entrega SG</span><?php echo $datos->datos2; ?></p>
                <p><span>Fecha Entrega Cliente</span><?php echo $datos->datos3; ?></p>
                <p class="caja_listado_obs"><span>Observación</span><?php echo $datos->datos6; ?></p>
            </div>
        </div>
   


    <?php }elseif($datos->servicio == 8){ ?>

        <div class="caja_listado">
            <div class="listado_salto">
                <p class="caja_listado_servicio c8">Factibilidad de Giro</p>
                <button
                 id="btn8status" 
                 class="btn_estados <?php if(isset($estado8))  echo $estado8->estado; ?>">
                 <?php if(isset($estado8)) echo $estado8->estado;  ?>
                </button>
            </div>

            <div class="listado_salto2">
                <p><span>Fecha Ingreso</span><?php echo $datos->datos1; ?></p>
                <p><span>Fecha Entrega SG</span><?php echo $datos->datos2; ?></p>
                <p><span>Fecha Entrega Cliente</span><?php echo $datos->datos3; ?></p>
                <p class="caja_listado_obs"><span>Observación</span><?php echo $datos->datos6; ?></p>
            </div>
        </div>

    <?php }elseif($datos->servicio == 9){  ?>

        <div class="caja_listado">
            <div class="listado_salto">
                <p class="caja_listado_servicio c9">Opinión Técnica</p>
                <button
                 id="btn9status" 
                 class="btn_estados <?php if(isset($estado9))  echo $estado9->estado; ?>">
                 <?php if(isset($estado9)) echo $estado9->estado;  ?>
                </button>
            </div>

            <div class="listado_salto2">
                <p><span>Fecha Ingreso</span><?php echo $datos->datos1; ?></p>
                <p><span>Fecha Termino</span><?php echo $datos->datos2; ?></p>
                <p><span>Evaluación</span><?php echo $datos->datos4; ?></p>
                <p class="caja_listado_obs"><span>Observación</span><?php echo $datos->datos6; ?></p>
            </div>
        </div>
                
    <?php }elseif($datos->servicio == 10){ ?>
        <div class="caja_listado">
            <div class="listado_salto">
                <p class="caja_listado_servicio c10">Trámite</p>
                <button
                 id="btn10status" 
                 class="btn_estados <?php if(isset($estado10))  echo $estado10->estado; ?>">
                 <?php if(isset($estado10)) echo $estado10->estado;  ?>
                </button>
            </div>

            <div class="listado_salto2">
                <p><span>Nombre</span><?php echo $datos->datos4; ?></p>
                <p><span>Fecha Ingreso</span><?php echo $datos->datos1; ?></p>
                <p><span>Fecha Entrega SG</span><?php echo $datos->datos2; ?></p>
                <p><span>Fecha Entrega Cliente</span><?php echo $datos->datos3; ?></p>
                <p class="caja_listado_obs"><span>Observación</span><?php echo $datos->datos6; ?></p>
            </div>
        </div>

    <?php }?>
    </div>
    


<?php }?>



</div>

<script src="build/js/estados.js"></script>