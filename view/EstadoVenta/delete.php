
<div class="mt-3">
    <div class="mt-4 p-5 bg-primary text-white rounded">
        <h3 class="display-4">Eliminar Descripción</h3>
</div>
<?php
    foreach ($estadoventa as $est) {

?>
<form action="<?php echo getUrl("EstadoVenta","EstadoVenta","postDelete"); ?>" method="post">
    <div class="row">
        <div class="col-md-4 form-group">
            <label>Descripción</label>
            <input type="hidden" name="IdEstadoVenta" value="<?php echo $est['IdEstadoVenta'] ?>">
            <input type="text" name="Descripcion" readonly value="<?php echo $est['Descripcion'] ?>" class="form-control" placeholder="Descripcion">
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