<div class="editar-usuario">
        <div class="campo">
                <label for="nombre">Nombre</label>
                <input autocomplete="off" type="text"  name="nombre" id="nombre">
            </div>
            <div class="campo">
                <label for="email">Email</label>
                <input autocomplete="nope" type="email" name="email" id="email">
            </div>
            <div class="campo">
                <label for="password">Password</label>
                <input autocomplete="off" type="text" name="password" id="password"><button id="random" type="button" class="btn-rand"><img src="build/img/aleatorio.png" alt=""></button>
            </div>
            <div class="campo">
                <label for="tipo">Tipo</label>
                <select name="type" id="tipo">
                    <option value="0" >- Selecciona -</option>
                    <option value="3">Empleado</option>
                    <option value="2">Administrativo</option>
                </select>
            </div>
            
            <input type="hidden" name="confirmado" value="1">
        </div>
        <script src="build/js/random.js"></script>