<form action="/agenda-agregar" method="POST">
<div class="contenedor-sm">
<?php include_once __DIR__ . '/../templates/alertas.php'; ?>
    <div class="evento">
        <div class="campo">
            <label for="tipo">Tipo</label>
            <select name="evento" id="tipo">
                <option value="0">- Selecciona -</option>
                <option value="Curso"> Curso </option>
                <option value="Visita"> Visita </option>
                <option value="Checklist"> Checklist </option>
                <option value="Reabasto"> Reabasto </option>
                <option value="Cita"> Cita </option>
                <option value="Otro"> Otro </option>
            </select>
        </div>

        <div class="campo">
            <label for="name">Nombre</label>
            <input type="text" autocomplete="nope" id="nombre" name="nombre">
        </div>

        <div class="campo">
            <label for="fecha1"><img src="build/img/fecha2.png">Fecha inicio</label>
            <input type="date" name="fecha1" id="fecha1">
        </div>
        <div class="campo">
            <label for="fecha2"><img src="build/img/fecha.png">Fecha Fin</label>
            <input type="date" name="fecha2" id="fecha2">
        </div>

        <div class="campo">
            <label for="hora1"><img src="build/img/relo.png">Hora inicio</label>
            <input type="time" id="hora1" name="hora1">
        </div>
        <div class="campo">
            <label for="hora2"><img src="build/img/relo2.png">Hora fin</label>
            <input type="time" id="hora2" name="hora2">
        </div>

        <div class="obs">
            <label for="obs">Observacion</label>
            <textarea name="obs" id="obs" cols="40" rows="5"></textarea>
        </div>

        <input type="hidden" name="creador" value="<?php echo $usuario->nombre ?>">
        <input type="hidden" name="estado" value="1">
        
    </div>


        <input type="submit" value="Crear" class="boton_agenda">
    
</div>
</form>