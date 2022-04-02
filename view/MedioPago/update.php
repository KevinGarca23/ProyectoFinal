<div class="mt-3">
<div class="mt-4 p-5 bg-primary text-white rounded">
  <h3 class="display-4">Actualizar Medio de Pago</h3>
</div>
<?php

foreach ($MedioPago as $dep) {

?>
<form action="<?php echo getUrl("MedioPago","MedioPago","postUpdate"); ?>" method="post">

    <div class="row">
            <div class="col-md-4 form-group">
                <label>Medio de Pago</label>
                <input type="hidden" name="IdMedioPago" value="<?php echo $dep['IdMedioPago'] ?>">
                <input type="text" name="Descripcion" value="<?php echo $dep['Descripcion'] ?>"class="form-control" placeholder="Nombre Usuario">

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
</div>