<div class="mt-3">
<div class="mt-4 p-5 bg-primary text-white rounded">
  <h3 class="display-4">Actualizar Usuario</h3>
</div>
<?php

foreach ($Cliente as $dep) {

?>
<form action="<?php echo getUrl("Cliente","Cliente","postUpdate"); ?>" method="post">

    <div class="row">
            <div class="col-md-4 form-group">
                <label>Nombre</label>
                <input type="hidden" name="IdCliente" value="<?php echo $dep['IdCliente'] ?>">
                <input type="text" name="Nombres" value="<?php echo $dep['Nombres'] ?>"class="form-control" placeholder="Nombre Usuario">

                <label>Apellidos</label>
                <input type="hidden" name="IdCliente" value="<?php echo $dep['IdCliente'] ?>">
                <input type="text" name="Apellidos" value="<?php echo $dep['Apellidos'] ?>"class="form-control" placeholder="Correo Usuario">

                <label>Fecha de Nacimiento</label>
                <input type="hidden" name="IdCliente" value="<?php echo $dep['IdCliente'] ?>">
                <input type="date" name="FechaNacimiento" value="<?php echo $dep['FechaNacimiento'] ?>"class="form-control" placeholder="Fecha de nacimiento del Usuario">
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