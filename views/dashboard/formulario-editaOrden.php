<div class="contenedor">
    

<?php foreach($orden as $datos) { ?>
    
        
    <div class="listado_servicios">
    <?php if($datos->servicio == 1){  ?>

        <div class="caja_listado">
            <div class="listado_salto">
                <p class="caja_listado_servicio c1">Programa Interno</p>   
            </div>

            <div class="listado_salto2">
                <p> <span>Descripcion</span>
                <input type="text" id="descrip" value="<?php echo $datos->datos5; ?>"> </p>
                <p><span>Firma</span>
                <input type="text" id="carta" value="<?php echo $datos->datos7; ?>"> </p>
                <p><span>Elabora</span>
                <input type="text" id="elaborapro" value="<?php echo $datos->datos4; ?>"> </p>
                <p><span>Fecha Inicio</span>
                <input type="date" id="fechapro1" value="<?php echo $datos->datos1; ?>"> </p>
                <p><span>Fecha Termino</span>
                <input type="date" id="fechapro2" value="<?php echo $datos->datos2; ?>"> </p>
                <p class="caja_listado_obs"><span>Observacion</span>
                <input type="text" class="editob"  id="obspro" value="<?php echo $datos->datos6; ?>"> </p>
                <input type="hidden" name="servicio1" id="servicio1" value="1">
                <input type="hidden" id="id1" value="<?php echo $datos->id; ?>">
            </div>
        </div>
        
    <?php     }elseif($datos->servicio == 2){  ?>

        <div class="caja_listado">
            <div class="listado_salto">
                <p class="caja_listado_servicio c2">Capacitación</p>
            </div>

            <div class="listado_salto2">
                <p><span>Curso</span>
                <input type="text" id="curso" value="<?php echo $datos->datos8; ?>"> </p>
                <p><span>Lugar</span>
                <input type="text" id="lugar" value="<?php echo $datos->datos7; ?>"> </p>
                <p><span>Instructor</span>
                <input type="text" id="elaboracap" value="<?php echo $datos->datos5; ?>"> </p>
                <p><span>Dias Programados</span>
                <input type="text" id="diascap" value="<?php echo $datos->datos4; ?>"> </p>
                <p class="caja_listado_obs"><span>Observación</span>
                <input type="text" class="editob"  id="obscap" value="<?php echo $datos->datos6; ?>"> </p>
                <input type="hidden" name="servicio2" id="servicio2" value="2">
                <input type="hidden" id="id2" value="<?php echo $datos->id; ?>">
            </div>
        </div>

    <?php     }elseif($datos->servicio == 3){  ?>

        <div class="caja_listado">
            <div class="listado_salto">
                <p class="caja_listado_servicio c3">Simulacro</p>
            </div>

            <div class="listado_salto2">
                <p><span>Fecha</span>
                <input type="date" id="fechasim" value="<?php echo $datos->datos1; ?>"> </p>
                <p><span>Evalúa</span>
                <input type="text" id="evaluasim" value="<?php echo $datos->datos5; ?>"> </p>
                <p class="caja_listado_obs"><span>Observación</span>
                <input type="text" class="editob"  id="obssim" value="<?php echo $datos->datos6; ?>"> </p>
                <input type="hidden" name="servicio3" id="servicio3" value="3">
                <input type="hidden" id="id3" value="<?php echo $datos->id; ?>">
            </div>
        </div>

    <?php     }elseif($datos->servicio == 4){  ?>

        <div class="caja_listado">
            <div class="listado_salto">
                <p class="caja_listado_servicio c4">Plan de Emergencia</p>
            </div>

            <div class="listado_salto2">
                <p><span>Elabora</span>
                <input type="text" id="elaboraplan" value="<?php echo $datos->datos5; ?>"> </p>
                <p><span>Fecha Termino</span>
                <input type="date" id="fechaplan1" value="<?php echo $datos->datos1; ?>"> </p>
                <p><span>Fecha Entrega</span>
                <input type="date" id="fechaplan2" value="<?php echo $datos->datos2; ?>"> </p>
                <p class="caja_listado_obs"><span>Observación</span>
                <input type="text" class="editob"  id="obsplan" value="<?php echo $datos->datos6; ?>"> </p>
                <input type="hidden" name="servicio4" id="servicio4" value="4">
                <input type="hidden" id="id4" value="<?php echo $datos->id; ?>">
            </div>
        </div>

    <?php     }elseif($datos->servicio == 5){  ?>

        <div class="caja_listado">
            <div class="listado_salto">
                <p class="caja_listado_servicio c5">Dictamenes</p>
            </div>

            <div class="listado_salto2">
                <p class="caja_listado_cursos"><span>Contenido</span>
                <input type="text" id="dictamen" value="<?php echo $datos->datos4; ?>"> </p>
                <p class="caja_listado_obs"><span>Observación</span>
                <input type="text" class="editob" id="obsdic" value="<?php echo $datos->datos6; ?>"> </p>
                <input type="hidden" name="servicio5" id="servicio5" value="5">
                <input type="hidden" id="id5" value="<?php echo $datos->id; ?>">
            </div>
        </div>

    <?php    }elseif($datos->servicio == 6){  ?>
        
        <div class="caja_listado">
            <div class="listado_salto">
                <p class="caja_listado_servicio c6">Gestion de Visto Bueno</p>
            </div>

            <div class="listado_salto2">
                <p><span>Fecha Ingreso</span>
                <input type="date" id="fechagvb" value="<?php echo $datos->datos1; ?>"> </p>
                <p><span>Fecha Entrega SG</span>
                <input type="date" id="fechagvb2" value="<?php echo $datos->datos2; ?>"> </p>
                <p><span>Fecha Entrega Cliente</span>
                <input type="date" id="fechagvb3" value="<?php echo $datos->datos3; ?>"> </p>
                <p class="caja_listado_obs"><span>Observación</span>
                <input type="text" class="editob"  id="obsgvb" value="<?php echo $datos->datos6; ?>"> </p>
                <input type="hidden" name="servicio6" id="servicio6" value="6">
                <input type="hidden" id="id6" value="<?php echo $datos->id; ?>">
            </div>
        </div>

    <?php  }elseif($datos->servicio == 7){  ?>
        <div class="caja_listado">
            <div class="listado_salto">
                <p class="caja_listado_servicio c7">Gestion de Licencia</p>
            </div>

            <div class="listado_salto2">
                <p><span>Fecha Ingreso</span>
                <input type="date" id="fechagl" value="<?php echo $datos->datos1; ?>"> </p>
                <p><span>Fecha Entrega SG</span>
                <input type="date" id="fechagl2" value="<?php echo $datos->datos2; ?>"> </p>
                <p><span>Fecha Entrega Cliente</span>
                <input type="date" id="fechagl3" value="<?php echo $datos->datos3; ?>"> </p>
                <p class="caja_listado_obs"><span>Observación</span>
                <input type="text" class="editob"  id="obsgl" value="<?php echo $datos->datos6; ?>"> </p>
                <input type="hidden" name="servicio7" id="servicio7" value="7">
                <input type="hidden" id="id7" value="<?php echo $datos->id; ?>">
            </div>
        </div>
   


    <?php }elseif($datos->servicio == 8){ ?>

        <div class="caja_listado">
            <div class="listado_salto">
                <p class="caja_listado_servicio c8">Factibilidad de Giro</p>
            </div>

            <div class="listado_salto2">
                <p><span>Fecha Ingreso</span>
                <input type="date" id="fechafg" value="<?php echo $datos->datos1; ?>"> </p>
                <p><span>Fecha Entrega SG</span>
                <input type="date" id="fechafg2" value="<?php echo $datos->datos2; ?>"> </p>
                <p><span>Fecha Entrega Cliente</span>
                <input type="date" id="fechafg3" value="<?php echo $datos->datos3; ?>"> </p>
                <p class="caja_listado_obs"><span>Observación</span>
                <input type="text" class="editob" id="obsfg" value="<?php echo $datos->datos6; ?>"> </p>
                <input type="hidden" name="servicio8" id="servicio8" value="8">
                <input type="hidden" id="id8" value="<?php echo $datos->id; ?>">
            </div>
        </div>

    <?php }elseif($datos->servicio == 9){  ?>

        <div class="caja_listado">
            <div class="listado_salto">
                <p class="caja_listado_servicio c9">Opinión Técnica</p>
            </div>

            <div class="listado_salto2">
                <p><span>Fecha Ingreso</span>
                <input type="date" id="fechaopt" value="<?php echo $datos->datos1; ?>"> </p>
                <p><span>Fecha Termino</span>
                <input type="date" id="fechaopt2" value="<?php echo $datos->datos2; ?>"> </p>
                <p><span>Evaluación</span>
                <input type="text" id="statopt" value="<?php echo $datos->datos4; ?>"> </p>
                <p class="caja_listado_obs"><span>Observación</span>
                <input type="text" class="editob"  id="obsopt" value="<?php echo $datos->datos6; ?>"> </p>
                <input type="hidden" name="servicio9" id="servicio9" value="9">
                <input type="hidden" id="id9" value="<?php echo $datos->id; ?>">
            </div>
        </div>
                
    <?php }elseif($datos->servicio == 10){?>
        <div class="caja_listado">
            <div class="listado_salto">
                <p class="caja_listado_servicio c8">Trámite</p>
            </div>

            <div class="listado_salto2">
                <p><span>Nombre</span>
                <input type="text" id="nombreftr" value="<?php echo $datos->datos4; ?>"> </p>
                <p><span>Fecha Ingreso</span>
                <input type="date" id="fechaftr" value="<?php echo $datos->datos1; ?>"> </p>
                <p><span>Fecha Entrega SG</span>
                <input type="date" id="fechaftr2" value="<?php echo $datos->datos2; ?>"> </p>
                <p><span>Fecha Entrega Cliente</span>
                <input type="date" id="fechaftr3" value="<?php echo $datos->datos3; ?>"> </p>
                <p class="caja_listado_obs"><span>Observación</span>
                <input type="text" class="editob" id="obstr" value="<?php echo $datos->datos6; ?>"> </p>
                <input type="hidden" name="servicio10" id="servicio10" value="10">
                <input type="hidden" id="id10" value="<?php echo $datos->id; ?>">
            </div>
        </div>
    
    <?php }?>

    
    </div>
    


<?php }?>



</div>

