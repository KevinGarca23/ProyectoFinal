
<div class="mt-3">
    <div class="mt-4 p-5 bg-primary text-white rounded">
        <h3 class="display-4">Eliminar Producto</h3>
</div>
<?php
    foreach ($productos as $pro) {

?>
<form action="<?php echo getUrl("Productos","Productos","postDelete"); ?>" method="post">
    <div class="row">
        <div class="col-md-4 form-group">
            <label>Producto</label>
            <input type="number" name="IdProducto" readonly value="<?php echo $pro['IdProducto'] ?>" class="form-control" placeholder="Cambiar Id">
            <input type="text" name="ReferenciaProducto" readonly value="<?php echo $pro['ReferenciaProducto'] ?>" class="form-control" placeholder="Cambiar Referencia">
            <input type="number" name="Precio" readonly value="<?php echo $pro['Precio'] ?>" class="form-control" placeholder="Cambiar precio">
            <input type="number" name="Cantidad" readonly value="<?php echo $pro['Cantidad'] ?>" class="form-control" placeholder="Cambiar cantidad">
            <input type="number" name="CantidadDescargada" readonly value="<?php echo $pro['CantidadDescargada'] ?>" class="form-control" placeholder="Cambiar CantidadDescargada">
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