<div class="mt-3">
<div class="mt-4 p-5 bg-primary text-white rounded">
  <h3 class="display-4">Eliminar Usuario</h3>
</div>
<?php

foreach ($usuario as $dep) {

?>
<form action="<?php echo getUrl("Usuario","Usuario","postDelete"); ?>" method="post">

    <div class="row">
            <div class="col-md-4 form-group">
                <label>Nombre</label>
                <input type="hidden" name="IdUsuario" value="<?php echo $dep['IdUsuario'] ?>">
                <input type="text" name="Nombre" readonly value="<?php echo $dep['Nombre'] ?>"class="form-control" placeholder="Nombre Usuario">
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