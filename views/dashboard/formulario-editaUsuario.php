
        <div class="editar-usuario">
            <div class="campo">
                <label for="nombre">Nombre</label>
                <input type="text"  name="nombre" id="nombre"
                value="<?php echo $usuario->nombre; ?>" autocomplete="nope">
            </div>
            <div class="campo">
                <label for="email">Email</label>
                <input type="email" name="email" id="email"
                value="<?php echo $usuario->email; ?>" autocomplete="nope">
            </div>
            <div class="campo">
                <label for="password">Password</label>
                <input type="text" name="password" id="password" autocomplete="nope">
                <button id="random" type="button" class="btn-rand"><img src="build/img/aleatorio.png" alt=""></button>
            </div>
            <div class="campo">
                <label for="tipo">Tipo</label>
                <select name="type" id="tipo">
                    <option value="<?php echo $usuario->type; ?>" >
                    <?php if($usuario->type == 2){echo "Administrativo"; }elseif($usuario->type == 3){echo"Base";} ?> </option>
                    <option value="3">Base</option>
                    <option value="2">Administrativo</option>
                </select>
            </div>
            <input type="hidden" name="confirmado" value="1">
            <input type="hidden" name="id" value="<?php echo $usuario->id; ?>">
        </div>
            
        <script src="build/js/random.js"></script>