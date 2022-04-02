<div class="mt-3">
<div class="mt-4 p-5 bg-primary text-white rounded">
  <h3 class="display-4">Actualizar Usuario</h3>
</div>
<?php

foreach ($Usuario as $dep) {

?>
<form action="<?php echo getUrl("Usuario","Usuario","postUpdate"); ?>" method="post">

    <div class="row">
            <div class="col-md-4 form-group">
                <label>Nombre</label>
                <input type="hidden" name="IdUsuario" value="<?php echo $dep['IdUsuario'] ?>">
                <input type="text" name="Nombre" value="<?php echo $dep['Nombre'] ?>"class="form-control" placeholder="Nombre Usuario">

                <label>Correo</label>
                <input type="hidden" name="IdUsuario" value="<?php echo $dep['IdUsuario'] ?>">
                <input type="email" name="Correo" value="<?php echo $dep['Correo'] ?>"class="form-control" placeholder="Correo Usuario">

                <label>Contraseña</label>
                <input type="hidden" name="IdUsuario" value="<?php echo $dep['IdUsuario'] ?>">
                <input type="password" name="Contrasena" value="<?php echo $dep['Contrasena'] ?>"class="form-control" placeholder="Contrasena Usuario">
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