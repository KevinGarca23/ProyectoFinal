<div class="mt-3">
<div class="mt-4 p-5 bg-primary text-white rounded">
  <h3 class="display-4">Registrar Medio de Pago</h3>

</div>
<form action="<?php echo getUrl("MedioPago","MedioPago","postinsert"); ?>" method="post">
    <div class="row">
        <div class="col-md-4 form-group">
            <label>Id Medio de Pago</label>
            <input type="text" name="IdMedioPago" class="form-control" placeholder="IdMedioPago">

            <label>Descripcion</label>
            <input type="text" name="Descripcion" class="form-control" placeholder="Descripcion">

          
    </div>
    </div>
<div class="col-md-4">
<input type="submit" value="Enviar" class="btn btn-success">
</div>

</form>
</div>