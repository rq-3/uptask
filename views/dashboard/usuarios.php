
<?php include_once __DIR__ . '/header-dashboard.php'; ?>


<div class="contenedor-sm margin_b">

    <div class="agregar_nuevo">
        <a type="submit" href="/nuevo-usuario" class="btn_agregar">
            <img class="btn_agregar_imagen" src="build/img/agrega.png" alt="">
        </a>
    </div>

    <?php  include_once __DIR__ . '/../templates/alertaUsuario.php'; ?>
                
</div>


<?php if(count($users) === 0){ ?>
        <p class="no-proyectos">No hay Usuarios</p>
    <?php } else {?>

    <?php foreach($users as $user) { ?>
    
    <div class="trabajo_grid contenedor">  
        <div class="trabajo_caja">

            <div class="trabajo_caja_datos2">
                <p class="trabajo_empresa"><img src="build/img/usr2.png"><?php echo $user->nombre; ?></p>
                <p class="trabajo_status"> <?php echo $user->email; ?></p>
                <p class="trabajo_status"> 
                    <?php if($user->estado == 1){?>
                         <div class="enlinea cajer"></div> 
                         <?php  }else{?>  <div class="offline cajer"></div><?php } ?></p>
            </div>
                    

            <div class="trabajo_caja_botones">
                <a class="btn_editauser" href="/editar-usuario?id=<?php echo $user->id; ?>">
                    <img src="build/img/lapiz.png">
                </a>

                <form method="POST">
                    <button class="btn_borrar" >
                    <img src="build/img/elimina.png">
                    </button>
                    <input type="hidden" name="id" value="<?php echo $user->id; ?>">
                </form>
            </div>
                    
        </div>
    </div>

    <?php }?>

    <?php } ?>



<?php include_once __DIR__ . '/footer-dashboard.php'; ?>