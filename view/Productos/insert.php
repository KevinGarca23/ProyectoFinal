<div class="mt-3">
    <div class="mt-4 p-5 bg-primary text-white rounded">
        <h3 class="display-4">Registrar Producto</h3>
</div>
<form action="<?php echo getUrl("Productos","Productos","postInsert"); ?>" method="post" enctype ="multipart/form-data">
    <div class="row">
        <div class="col-md-4 form-group">
            <label>Id</label>
            <input type="number" name="IdProducto" class="form-control" placeholder="Por favor escribe una ID">
            <label>Referencia Producto</label>
            <input type="text" name="ReferenciaProducto" class="form-control" placeholder="Ingrese referencia producto">
            <label>Precio</label>
            <input type="number" name="Precio" class="form-control" placeholder="Ingrese precio del producto">
            <label>Cantidad</label>
            <input type="number" name="Cantidad" class="form-control" placeholder="Por favor ingrese una cantidad">
            <label>Cantidad Descargada</label>
            <input type="number" name="CantidadDescargada" class="form-control" placeholder="Por favor ingrese cantidad descargada">


            <div class="col-md-4 form-group">
                                    <label>Imagen</label>
                                    <input type="file" name="ProImagen">
                </div>

        </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <input type="submit" value="Enviar" class="btn btn-success">
            </div>
        </div>
</form>

