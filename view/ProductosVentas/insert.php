<div class="mt-3">
    <div class="Jumbotron Example">
        <h3 class="display-4">Registrar Productos Ventas</h3>
</div>
<form action="<?php echo getUrl("ProductosVentas","ProductosVentas","postInsert"); ?>" method="post">
    <div class="row">
        <div class="col-md-4 form-group">
            <label>Id Productos Ventas</label>
            <input type="number" name="IdProductoVentas" class="form-control" placeholder="Por favor escribe una ID">
            <label>Precio Final</label>
            <input type="text" name="PrecioFinal" class="form-control" placeholder="Ingrese el precio final">
            <label>Cantidad</label>
            <input type="number" name="Cantidad" class="form-control" placeholder="Ingrese la cantidad">
            <label>Id Venta</label>
            <input type="number" name="IdVenta" class="form-control" placeholder="Por favor escriba el ID>
            <label>Id Producto</label>
            <input type="number" name="IdProducto" class="form-control" placeholder="Por favor escriba el ID">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <input type="submit" value="Enviar" class="btn btn-success">
        </div>
    </div>
</form>