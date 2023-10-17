
<?php include_once __DIR__ . '/header-dashboard.php'; ?>

<div class="contenedor">
           
                
     
                    <div class="informacion">
                        <p class="informacion_razon">
                        <?php
                                echo $cliente->nombre_comercial; 
                            ?>
                        </p>

                        <div class="informacion_emails">
                             <p class="informacion_email"><img src="build/img/sobre.png"> 
                        <?php
                                echo $cliente->email; 
                            ?>
                        </p>
                        <p class="informacion_email"><img src="build/img/sobre.png"> 
                        <?php
                                echo $cliente->email2; 
                            ?>
                        </p>
                        
                        </div>

                        <div class="informacion_contacto">
                            <p class="informacion_tel separa"><img src="build/img/tel1.png"> 
                            <?php
                                    echo $cliente->tel1; 
                                ?>
                            </p>
                            <p class="informacion_tel"><img src="build/img/tel2.png"> 
                            <?php
                                    echo $cliente->tel2; 
                                ?>
                            </p>
                            
                        </div>
                       
                        <div class="informacion_ubicacion">
                        <p class="informacion_ubicacion_ubi"> 
                            <?php
                                    echo $cliente->direccion; 
                                ?>
                            </p>
                            <a  target="_blank" class="informacion_ubicacion_ubica" href="<?php echo $cliente->ubicacion; ?>">
                                <img src="build/img/ubica.png" > 
                            </a>
                        </div>
                       

                    </div>

       
</div>


<?php include_once __DIR__ . '/footer-dashboard.php'; ?>