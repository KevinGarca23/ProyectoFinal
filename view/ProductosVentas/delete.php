<div class="mt-3">
    <div class="Jumbotron Example">
        <h3 class="display-4">Eliminar Producto Ventas</h3>
</div>
<?php
    foreach ($productosventas as $proven) {

?>
<form action="<?php echo getUrl("productosventas","productosventas","postDelete"); ?>" method="post">
    <div class="row">
        <div class="col-md-4 form-group">
            <label>Productos Ventas</label>
            <input type="number" name="IdProductosVentas" readonly value="<?php echo $proven['IdProductosVentas'] ?>" class="form-control" placeholder="Cambiar Id">
            <input type="number" name="Precio" readonly value="<?php echo $proven['Precio'] ?>" class="form-control" placeholder="Cambiar Referencia">
            <input type="number" name="Cantidad" readonly value="<?php echo $proven['Cantidad'] ?>" class="form-control" placeholder="Cambiar Cantidad">
            <input type="number" name="IdVenta" readonly value="<?php echo $proven['IdVenta'] ?>" class="form-control" placeholder="Cambiar IdVenta">
            <input type="number" name="IdProducto" readonly value="<?php echo $proven['IdProducto'] ?>" class="form-control" placeholder="Cambiar IdProducto">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <input type="submit" value="Eliminar" class="btn btn-danger">
        </div>
    </div>
</form>
<?php
    }
?>
</div>