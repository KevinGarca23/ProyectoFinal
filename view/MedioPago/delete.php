<div class="mt-3">
<div class="mt-4 p-5 bg-primary text-white rounded">
  <h3 class="display-4">Eliminar Medio de Pago</h3>
</div>
<?php

foreach ($mediopago as $dep) {

?>
<form action="<?php echo getUrl("MedioPago","MedioPago","postDelete"); ?>" method="post">

    <div class="row">
            <div class="col-md-4 form-group">
                <label>Nombre</label>
                <input type="hidden" name="IdMedioPago" value="<?php echo $dep['IdMedioPago'] ?>">
                <input type="text" name="Descripcion" readonly value="<?php echo $dep['Descripcion'] ?>"class="form-control" placeholder="Nombre MedioPago">
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