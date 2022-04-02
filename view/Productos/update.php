<div class="mt-3">
    <div class="mt-4 p-5 bg-primary text-white rounded">
        <h3 class="display-4">Actualizar Produco</h3>
</div>
<?php
    foreach ($productos as $pro) {

?>
<form action="<?php echo getUrl("Productos","Productos","postUpdate"); ?>" method="post">
    <div class="row">
        <div class="col-md-4 form-group">
            <label>Id</label>
            <input type="number" name="IdProducto" value="<?php echo $pro['IdProducto'] ?>" class="form-control" placeholder="Cambiar Id">
            <label>Referencia Producto</label>
            <input type="text" name="ReferenciaProducto" value="<?php echo $pro['ReferenciaProducto'] ?>" class="form-control" placeholder="Cambiar Referencia">
            <label>Precio</label>
            <input type="number" name="Precio" value="<?php echo $pro['Precio'] ?>" class="form-control" placeholder="Cambiar precio">
            <label>Cantidad</label>
            <input type="number" name="Cantidad" value="<?php echo $pro['Cantidad'] ?>" class="form-control" placeholder="Cambiar cantidad">
            <label>Cantidad Descargada</label>
            <input type="number" name="CantidadDescargada" value="<?php echo $pro['CantidadDescargada'] ?>" class="form-control" placeholder="Cambiar CantidadDescargada">


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
