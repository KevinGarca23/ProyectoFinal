
<div class="mt-3">
    <div class="mt-4 p-5 bg-primary text-white rounded">
        <h3 class="display-4">Actualizar EstadoVenta</h3>
</div>
<?php
    foreach ($estadoventa as $est) {

?>
<form action="<?php echo getUrl("EstadoVenta","EstadoVenta","postUpdate"); ?>" method="post">
    <div class="row">
        <div class="col-md-4 form-group">
            <label>Cambiar descripción</label>
            <input type="hidden" name="IdEstadoVenta" value="<?php echo $est['IdEstadoVenta'] ?>">
            <input type="text" name="Descripcion" value="<?php echo $est['Descripcion'] ?>" class="form-control" placeholder="Cambiar descripción">
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
