<div class="mt-3">
<div class="mt-4 p-5 bg-primary text-white rounded">
  <h3 class="display-4">Registrar Usuario</h3>

</div>
<form action="<?php echo getUrl("Usuario","Usuario","postinsert"); ?>" method="post">
    <div class="row">
        <div class="col-md-4 form-group">
            <label>Correo</label>
            <input type="text" name="Correo" class="form-control" placeholder="Correo Usuario">

            <label>Contrasena</label>
            <input type="password" name="Contrasena" class="form-control" placeholder="Contraseña Usuario">

            <label>Nombre</label>
            <input type="text" name="Nombre" class="form-control" placeholder="Nombre Usuario">
    </div>
    </div>
<div class="col-md-4">
<input type="submit" value="Enviar" class="btn btn-success">
</div>

</form>
</div>