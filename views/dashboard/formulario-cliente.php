
        <div class="fondo_blanco_cliente">

            <div class="campo">
                <label for="nombre">
                <div class="iconosClientes"><img src="build/img/nombre.png">Nombre</div>
                </label>
                <input type="text" autocomplete="nope"   name="nombre" id="nombre"
                value="<?php echo $c->nombre; ?>">
            </div>
            <div class="campo">
                <label for="nombre2">
                <div class="iconosClientes"><img src="build/img/nombre.png">Nombre Comercial</div>
                </label>
                <input type="text" autocomplete="nope"  name="nombre_comercial" id="nombre2"
                value="<?php echo $c->nombre_comercial; ?>">
            </div>
            <div class="campo">
                <label for="email">
                <div class="iconosClientes"><img src="build/img/sobre.png">Email</div>
                </label>
                <input type="email" autocomplete="nope"  name="email" id="email"
                value="<?php echo $c->email; ?>">
            </div>
            <div class="campo">
                <label for="email2">
                <div class="iconosClientes"><img src="build/img/sobre.png">Email 2</div>
                </label>
                <input type="email" autocomplete="nope"  name="email2" id="email2"
                value="<?php echo $c->email2; ?>">
            </div>
            <div class="campo">
                <label for="telefono1">
                <div class="iconosClientes"><img src="build/img/tel1.png">Tel. Empresa</div>
                </label>
                <input type="number" autocomplete="nope"  name="tel1" id="tel1"
                value="<?php echo $c->tel1; ?>">
            </div>
            <div class="campo">
                <label for="telefono2">
                <div class="iconosClientes"><img src="build/img/tel2.png">Tel. Contacto</div>
                </label>
                <input type="number" autocomplete="nope"  name="tel2" id="tel2"
                value="<?php echo $c->tel2; ?>">
            </div>
            <div class="campo">
                <label for="direccion">
                <div class="iconosClientes"><img src="build/img/oficina.png">Dirección</div>
                </label>
                <input type="text" autocomplete="nope"  name="direccion" id="direccion"
                value="<?php echo $c->direccion; ?>">
                <!-- <a target="_blank" href="https://goo.gl/maps/dBccFKac4wAgHqGF7">ubicacion</a> -->
            </div>
            <div class="campo">
                <label for="ubi">
                <div class="iconosClientes"><img src="build/img/ubica.png">Ubicación</div>
                </label>
                <input type="text" autocomplete="nope"  name="ubicacion" id="ubicacion"
                value="<?php echo $c->ubicacion; ?>">
                <!-- <a target="_blank" href="https://goo.gl/maps/dBccFKac4wAgHqGF7">ubicacion</a> -->
            </div>

        </div>

           