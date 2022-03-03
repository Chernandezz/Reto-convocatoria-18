<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Closet Del Programador</title>
    <!-- Link Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Link Css -->
    <link rel="stylesheet" href="../style/style.css">
  </head>
<body>
    <!-- Inicio Header -->

    <div class="header">
      <a href="/" class="logo"> <i class="fa-solid fa-car"></i> Parqueadero </a>

      <div class="iconos">
        <a href="/ingresar" class="boton"> <i class="fa-solid fa-plus"></i> Ingresar Vehiculo </a>
        <div id="btn-buscar" class="fas fa-search"></div>
      </div>
    </div>
    <!-- Fin Header -->
    <!-- Inicio Buscar -->
    <div class="buscador">
      <div id="cerrar-buscador" class="fas fa-times"></div>

      <form action="">
        <input
          type="search"
          name=""
          placeholder="Buscar..."
          id="caja-buscador"
        />
        <label for="caja-buscador" class="fas fa-search"></label>
      </form>
    </div>
    <!-- Fin Buscar -->


    <?php echo $contenido; ?>

</body>
</html>