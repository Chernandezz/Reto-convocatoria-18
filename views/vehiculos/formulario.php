<?php
date_default_timezone_set('america/bogota');
?>
<fieldset>
        <div class="caja">
            <label for="placa">placa</label>
            <input type="text" name="placa" id="placa" placeholder="Placa" value="<?php echo s($vehiculo->placa); ?>">
        </div>

        <div class="caja">
            <label for="tipoCliente">Cliente</label>
            <select name="tipoCliente" id="tipoCliente">
                <option value="Invitado" selected>Invitado</option>
                <option value="Oficial">Oficial</option>
                <option value="Residente">Residente</option>
            </select>
        </div>

        <div class="caja">
            <label for="ingreso">ingreso</label>
            <input type="datetime-local" name="ingreso" id="ingreso" value="<?php echo date('Y-d-m') . 'T' . date('H:i'); ?>">
        </div>
</fieldset>