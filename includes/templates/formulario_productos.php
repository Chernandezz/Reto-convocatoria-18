<fieldset>
    <legend>Información</legend>

    <label for="titulo">titulo</label>
    <input type="text" name="producto[titulo]" id="titulo" placeholder="Nombre producto" value="<?php echo s($producto->titulo); ?>">

    <label for="precio">precio</label>
    <input type="number" name="producto[precio]" id="precio" placeholder="Precio producto" min='1' value="<?php echo s($producto->precio); ?>">

    <label for="descripcion">descripcion</label>
    <textarea name="producto[descripcion]" id="descripcion" placeholder="Agregue una descripcion del producto.."><?php echo s($producto->descripcion); ?></textarea>

    <label for="imagen">imagen</label>
    <?php if ($producto->imagen): ?>
        <div class="admin-imagenes">
            <input type="file" name="producto[imagen]" id="imagen" accept="image/jpeg, image/png">
            <img src="../../imagenes/<?php echo $producto->imagen ?>" alt="imagen">
        </div>
    <?php else: ?>
        <input type="file" name="producto[imagen]" id="imagen" accept="image/jpeg, image/png">
    <?php endif;?>
</fieldset>