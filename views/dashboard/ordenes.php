

            
<?php

use Model\Estados;

 include_once __DIR__ . '/header-dashboard.php'; ?>

<div class="contenedor-sm">
                
    <div class="busqueda">
         <input type="text" name="busqueda" id="searchbar" onkeyup="search_order()">
    </div>

    <?php  include_once __DIR__ . '/../templates/alertaOrden.php'; ?>
</div>

<?php if(count($ordenes) === 0){ ?>
        <p class="no-proyectos">No hay Ordenes de Trabajo</p>
    <?php } else {?>

    <?php foreach($ordenes as $orden) { ?>

    <div class="ordenes contenedor" id="list">
                
            <div class="ordenes_datos">
                <p class="orden_folio">Folio: <span>
                    <?php  echo $orden->folio; ?>
                </span></p>
                <p class="trabajo_empresa">
                <?php  echo $orden->empresa; ?>
                </p>
                <p class="trabajo_fecha">
                <?php      
               
                 echo $orden->fecha; ?>
                </p>
                <p class="trabajo_stat">
                <?php      
                $estado = Estados::belongsTo('folio', $orden->folio);
                    foreach($estado as $e){
                        //echo $e->estado;
                        if($e->estado == 'Pendiente'){
                            echo "<div class='bola pen'></div>";
                        }
                        if($e->estado == 'Completado'){
                            echo "<div class='bola com'></div>";
                        }
                    }
                 ?>
                </p>
                </div>
                

                <div class="ordenes_botones">
                <?php  if($_SESSION['type'] === "1" || $_SESSION['type'] === "2" ) { ?>
                    <a class="btn_elimina" href="/nuevo-pago?folio=<?php echo $orden->folio;?>">
                        <img src="build/img/factura.png" alt="">
                    </a>
                        <?php }?>
                    <a class="btn_ver" href="/orden?orden=<?php echo $orden->folio; ?>">
                        <img src="build/img/lupa.png" alt="">
                    </a>

                    <a class="btn_editar" href="/editar-orden?orden=<?php echo $orden->folio; ?>">
                        <img src="build/img/lapiz.png" alt="">
                    </a>

                    <form method="POST">

                    <?php  if($_SESSION['type'] === "4") { if(isset($e->estado)){$sta = $e->estado;} ?>
                        <input type="hidden" name="id" value="<?php
                        echo $orden->id;
                    ?>">
                        <input type="hidden" name="folio" value="<?php
                        echo $orden->folio;
                    ?>">
                        <input type="hidden" name="estado" value="0">
                        <input type="hidden" name="state" value="<?php
                        echo $sta;
                    ?>">
                       
                        <button class="btn_cliente eliminar" type="submit">
                        <img src="build/img/elimina.png" alt="">
                        </button>
                    </form>
                    <?php }?>
                    
                </div>
                
            </div>


            <?php }?>

<?php } ?>




<?php include_once __DIR__ . '/footer-dashboard.php'; ?>


<script src="build/js/busqueda.js"></script>