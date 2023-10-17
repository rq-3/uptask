
<?php include_once __DIR__ . '/header-dashboard.php'; ?>

<main class="work">
            <div class="work_contenido">

                <div class="work_workflow">
                    <div class="contenedor">

                        <div class="clientes">
                        <?php  if($_SESSION['type'] === "1" || $_SESSION['type'] === "2" ) { ?>
                            <div class="agregar_nuevo">
                                <a type="submit" href="/nuevo-cliente?token=1" class="btn_agregar">
                                    <img class="btn_agregar_imagen" src="build/img/agrega.png" alt="">
                                </a>
                            </div>
                            <?php }?>
                            <div class="busqueda">
                                <input type="text" name="busqueda" 
                                id="searchbar" onkeyup="search_thing()">
                                <!-- <button class="btn_filtrar"></button> -->
                            </div>
        <div class="contenedor-sm">
        <?php  include_once __DIR__ . '/../templates/alertaRemover.php'; ?>
        </div>
                            
    <?php if(count($clientes) === 0){ ?>
        <p class="no-proyectos">No hay Clientes</p>
    <?php } else {?>
     
             <?php foreach($clientes as $cliente) { ?>
                
                <div class="clientes_grid" id="list">
                
                <div class="cliente">
                    <div class="cliente_datos">
                        <p class="cliente_nombre">
                            <?php
                                echo $cliente->nombre; 
                            ?>
                        </p>
                        <p class="cliente_razon">
                        <?php
                                echo $cliente->nombre_comercial; 
                            ?>
                        </p>
                    </div>

                    <div class="cliente_botones"> 
                         <?php  if($_SESSION['type'] === "1" || $_SESSION['type'] === "2" ) { ?>
                        <a class="btn_cliente orden" href="/nueva-orden?id=<?php echo $cliente->id;  ?>">
                            <img src="build/img/doc1.png" alt="">
                        </a>
                        <?php }?>
                        <a class="btn_cliente ver" href="/ver-cliente?id=<?php
                            echo $cliente->id;
                        ?>">
                            <img src="build/img/lupa.png" alt="">
                        </a>
                        <?php  if($_SESSION['type'] === "1" || $_SESSION['type'] === "2" ) { ?>
                        <a class="btn_cliente editar" href="/editar-cliente?id=<?php
                            echo $cliente->id;
                        ?>">
                            <img src="build/img/lapiz.png" alt="">
                        </a>
                        <?php }?>
                        <form method="POST">

                        <?php  if($_SESSION['type'] === "1") { ?>
                            <input type="hidden" name="id" value="<?php
                            echo $cliente->id;
                        ?>">
                            <button class="btn_cliente eliminar" type="submit">
                            <img src="build/img/elimina.png" alt="">
                            </button>
                        </form>
                        <?php }?>

                        
                    </div>
                </div>
            </div>
            <?php }?>
     
    <?php } ?>
                
                
                            
                
                
                
                        </div>
                
                    </div>
                </div>


            </div>
        </main>

    

<?php include_once __DIR__ . '/footer-dashboard.php'; ?>

<script src="build/js/busqueda.js"></script>