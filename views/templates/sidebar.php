<aside class="sidebar">
    <div class="contenedor-sidebar">
         <h2 >SG<span class="heading_sidebar">México</span></h2>
    
        <div class="cerrar-menu">
            <img src="build/img/cerrar.png" id="cerrar-menu" alt="imagen cerrar">
        </div>
    </div>
   

    <nav class="sidebar-nav">


        <?php 
            if($_SESSION['type'] === "1"){ ?>
               <a  class="<?php echo($titulo === 'Inicio') ? 'activo' : ''; ?>"
         href="/dashboard">Inicio</a>
        <a class="<?php echo($titulo === 'Clientes') ? 'activo' : ''; ?>"
         href="/clientes">Clientes</a>
        <a class="<?php echo($titulo === 'Orden de trabajo') ? 'activo' : ''; ?>"
         href="/ordenes">Orden Trabajo</a>
        <a class="<?php echo($titulo === 'Agenda') ? 'activo' : ''; ?>"
         href="/agenda">Agenda</a>
        <a class="<?php echo($titulo === 'Pagos') ? 'activo' : ''; ?>"
         href="/pagos">Pagos</a>
        <a class="<?php echo($titulo === 'Usuarios') ? 'activo' : ''; ?>"
         href="/usuarios">Usuarios</a>
        <a class="<?php echo($titulo === 'Perfil') ? 'activo' : ''; ?>"
         href="/perfil">Perfil</a>
   
        <?php } if($_SESSION['type'] === "2") { ?>
            <a  class="<?php echo($titulo === 'Inicio') ? 'activo' : ''; ?>"
         href="/dashboard">Inicio</a>
        <a class="<?php echo($titulo === 'Clientes') ? 'activo' : ''; ?>"
         href="/clientes">Clientes</a>
        <a class="<?php echo($titulo === 'Orden de trabajo') ? 'activo' : ''; ?>"
         href="/ordenes">Orden Trabajo</a>
        <a class="<?php echo($titulo === 'Agenda') ? 'activo' : ''; ?>"
         href="/agenda">Agenda</a>
        <a class="<?php echo($titulo === 'Pagos') ? 'activo' : ''; ?>"
         href="/pagos">Pagos</a>
        <a class="<?php echo($titulo === 'Usuarios') ? 'activo' : ''; ?>"
         href="/perfil">Perfil</a>
    </nav>
            <?php } if($_SESSION['type'] == "3") {?>
        <a  class="<?php echo($titulo === 'Inicio') ? 'activo' : ''; ?>"
         href="/dashboard">Inicio</a>
        <a class="<?php echo($titulo === 'Clientes') ? 'activo' : ''; ?>"
         href="/clientes">Clientes</a>
        <a class="<?php echo($titulo === 'Orden de trabajo') ? 'activo' : ''; ?>"
         href="/ordenes">Orden Trabajo</a>
         <a class="<?php echo($titulo === 'Agenda') ? 'activo' : ''; ?>"
         href="/agenda">Agenda</a>
            <?php }?>

       </nav>   

    <div class="cerrar-sesion-mobile">
        <a href="/logout" class="cerrar-sesion">Cerrar Sesión</a>
    </div>
</aside>