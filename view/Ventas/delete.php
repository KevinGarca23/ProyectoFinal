
<div class="mt-3">
    <div class="Jumbotron Example">
        <h3 class="display-4">Eliminar Ventas</h3>
</div>
<?php
    foreach ($ventas as $ven) {

?>
<form action="<?php echo getUrl("ventas","ventas","postDelete"); ?>" method="post">
    <div class="row">
        <div class="col-md-4 form-group">
            <label>Producto</label>
            <input type="number" name="IdVenta" readonly value="<?php echo $ven['IdVenta'] ?>" class="form-control" placeholder="Cambiar ID">
            <input type="date" name="FechaVenta" readonly value="<?php echo $ven['FechaVenta'] ?>" class="form-control" placeholder="Cambiar fecha ">
            <input type="number" name="ValorTotal" readonly value="<?php echo $ven['ValorTotal'] ?>" class="form-control" placeholder="Cambiar valor">
            <input type="number" name="IdMedioPago" readonly value="<?php echo $ven['IdMedioPago'] ?>" class="form-control" placeholder="Cambiar ID">
            <input type="number" name="IdCliente" readonly value="<?php echo $ven['IdCliente'] ?>" class="form-control" placeholder="Cambiar ID">
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