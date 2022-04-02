<div class="mt-3">
    <div class="Jumbotron Example">
        <h3 class="display-4">Actualizar Produco Ventas</h3>
</div>
<?php
    foreach ($productosventas as $proven) {

?>
<form action="<?php echo getUrl("productosventas","productosventas","postUpdate"); ?>" method="post">
    <div class="row">
        <div class="col-md-4 form-group">
            <label>Id Productos Ventas</label>
            <input type="number" name="IdProductoVentas" value="<?php echo $ven['IdProductoVentas'] ?>" class="form-control" placeholder="Cambiar ID">
            <label>Precio Final</label>
            <input type="text" name="Precio" value="<?php echo $proven['Precio'] ?>" class="form-control" placeholder="Cambiar Precio">
            <label>Cantidad</label>
            <input type="number" name="Cantidad" value="<?php echo $proven['Cantidad'] ?>" class="form-control" placeholder="Cambiar Cantidad">
            <label>Id venta</label>
            <input type="number" name="IdVenta" value="<?php echo $proven['IdVenta'] ?>" class="form-control" placeholder="Cambiar ID">
            <label>Id producto</label>
            <input type="number" name="IdPorducto" value="<?php echo $proven['IdProducto'] ?>" class="form-control" placeholder="Cambiar ID">


        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <input type="submit" value="Enviar" class="btn btn-success">
        </div>
    </div>
</form>
<?php
    }
?>
