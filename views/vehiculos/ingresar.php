<main class="contenedor">
    <section class="fondo">
        <h2 class="encabezadoCRUD">Ingreso Vehiculo</h2>
        <?php foreach ($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach;?>
        <form class="formulario" method="POST">
            <?php include __DIR__ . '/formulario.php'?>
            </fieldset>
            <div class="lista-botones">
                <input type="submit" value="Registrar ingreso" class="btn">
                <a class="btn" href="/" >regresar</a>
            </div>
        </form>

    </section>
</main>
