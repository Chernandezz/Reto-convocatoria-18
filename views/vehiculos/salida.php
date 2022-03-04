<?php
date_default_timezone_set('america/bogota');

?>
<main class="contenedor">
    <section class="fondo">
        <h2 class="encabezadoCRUD">Salida de Vehiculo</h2>
        <?php foreach ($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach;?>
        <form class="formulario" method="POST">
            <fieldset>
                <div class="caja">
                    <label for="placa">placa</label>
                    <input type="text" name="placa" id="placa" placeholder="Placa" value="<?php echo s($vehiculo->placa); ?>">
                </div>

                <div class="caja">
                    <label for="tipoCliente">Cliente</label>
                    <select name="tipoCliente" id="tipoCliente">
                        <option value="<?php echo $vehiculo->tipoCliente ?>" selected><?php echo $vehiculo->tipoCliente ?></option>
                    </select>
                </div>

                <div class="caja">
                    <label for="ingreso">ingreso</label>
                    <input type="time" name="ingreso" id="ingreso" value="<?php echo $vehiculo->ingreso ?>">
                </div>
                <div class="caja">
                    <label for="salida">salida</label>
                    <input type="time" name="salida" id="salida" value="<?php echo date('H:i'); ?>" min= "<?php echo date('Y-m-d', $time) . 'T' . date('H:i', $time); ?>">
                </div>
            </fieldset>
            <div class="lista-botones">
                <input type="submit" value="Confirmar Salida" class="btn">
                <a class="btn" href="/" >regresar</a>
            </div>
        </form>

    </section>
</main>
