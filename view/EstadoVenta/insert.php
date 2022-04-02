<div class="mt-3">
    <div class="mt-4 p-5 bg-primary text-white rounded">
        <h3 class="display-4">Registrar EstadoVenta</h3>
</div>
<form action="<?php echo getUrl("EstadoVenta","EstadoVenta","postInsert"); ?>" method="post">
    <div class="row">
        <div class="col-md-4 form-group">
            <label>Descripcion</label>
            <input type="text" name="Descripcion" class="form-control" placeholder="Escribir una descripción">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <input type="submit" value="Enviar" class="btn btn-success">
        </div>
    </div>
</form>

