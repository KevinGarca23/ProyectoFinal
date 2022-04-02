<div class="mt-3">
    <div class="Jumbotron Example">
        <h3 class="display-4">Actualizar Produco</h3>
</div>
<?php
    foreach ($ventas as $ven) {

?>
<form action="<?php echo getUrl("ventas","ventas","postUpdate"); ?>" method="post">
    <div class="row">
        <div class="col-md-4 form-group">
            <label>Id Venta</label>
            <input type="number" name="IdVenta" value="<?php echo $ven['IdVenta'] ?>" class="form-control" placeholder="Cambiar ID">
            <label>Fecha Venta </label>
            <input type="date" name="FechaVenta" value="<?php echo $ven['FechaVenta'] ?>" class="form-control" placeholder="Cambiar Fecha">
            <label>Valor total</label>
            <input type="number" name="ValorTotal" value="<?php echo $ven['ValorTotal'] ?>" class="form-control" placeholder="Cambiar Valor">
            <label>Id Estado Venta</label>
            <input type="number" name="IdEstadoVenta" value="<?php echo $ven['IdEstadoVenta'] ?>" class="form-control" placeholder="Cambiar ID">
            <label>Id Cliente </label>
            <input type="number" name="IdCliente" value="<?php echo $ven['IdCliente'] ?>" class="form-control" placeholder="Cambiar ID">


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
