<section class="fondo">
    <?php if (intval($accion) === 1): ?>
            <div class="alerta exito">
                <?php echo 'Vehiculo Ingresado correctamente'; ?>
            </div>
        <?php elseif (intval($accion) === 2): ?>
            <div class="alerta exito">
                <?php echo 'Tiempo Residente Almacenado correctamente'; ?>
            </div>
        <?php elseif (intval($accion) === 4): ?>
            <div class="alerta exito">
                <?php echo 'Total a pagar:' . $total; ?>
            </div>
        <?php endif;?>
  <table class="tabla-productos">
      <thead>
          <tr>
              <th>Placa</th>
              <th>Tipo Cliente</th>
              <th>Ingreso</th>
              <th>Acciones</th>
          </tr>
      </thead>
      <tbody> <!-- Mostrar Los Resultados -->
      <?php foreach ($vehiculos as $vehiculo): ?>

	          <tr>
	              <td><?php echo $vehiculo->placa; ?></td>
	              <td><?php echo $vehiculo->tipoCliente; ?></td>
	              <td><?php echo $vehiculo->ingreso; ?></td>

	              <td class="acciones-crud">
	                  <a href="/salida?placa=<?php echo $vehiculo->placa; ?>" class="botonaccion salida">salida</a>
	              </td>
	          </tr>
	          <?php endforeach;?>
      </tbody>
  </table>
</section>

