<section class="fondo">
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
                  <a href="/admin/salida.php?placa=<?php echo $vehiculo->placa; ?>" class="botonaccion salida">salida</a>
                  <a href="/admin/actualizar.php?placa=<?php echo $vehiculo->placa; ?>" class="botonaccion">Editar</a>
              </td>
          </tr>
          <?php endforeach;?>
      </tbody>
  </table>
</section>