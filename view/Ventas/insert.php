<div class="mt-3">
    <div class="Jumbotron Example">
        <h3 class="display-4">Registrar Venta</h3>
</div>
<form action="<?php echo getUrl("ventas","ventas","postInsert"); ?>" method="post">
    <div class="row">
        <div class="col-md-4 form-group">
            <label>Id venta</label>
            <input type="number" name="IdVenta" class="form-control" placeholder="Por favor escribe una ID">
            <label> fecha venta</label>
            <input type="date" name="FechaVenta" class="form-control" placeholder="Ingrese referencia Fecha">
            <label>valor total</label>
            <input type="number" name="ValorTotal" class="form-control" placeholder="Ingrese precio del Valor">
            <label>id medio pago</label>
            <input type="number" name="IdMedioPago" class="form-control" placeholder="Por favor ingrese ID">
            <label> id cliente</label>
            <input type="number" name="IdCliente" class="form-control" placeholder="Por favor ingrese ID">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <input type="submit" value="Enviar" class="btn btn-success">
        </div>
    </div>
</form>