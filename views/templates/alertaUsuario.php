<?php
    foreach($alertas as $key => $alerta):
        foreach ($alerta as $mensaje ):
            
        
?>

    <div id="mensaje" class="alerta <?php echo $key; ?> "><?php echo $mensaje; ?></div>

<?php
        endforeach;
    endforeach;
?>

<script>
    
    if(document.getElementById("mensaje")){

        setTimeout(function(){
         document.getElementById("mensaje").style.display = "none";
        }, 3000);
        setTimeout(function(){
            window.location.href = '/usuarios';
        },1000);
    }

</script>