<div class="mt-3">
<div class="mt-4 p-5 bg-primary text-white rounded">
  <h3 class="display-4">Registrar Cliente</h3>

</div>
<form action="<?php echo getUrl("Cliente","Cliente","postinsert"); ?>" method="post">
    <div class="row">
        <div class="col-md-4 form-group">
        <label>Cliente</label>
            <input type="text" name="IdCliente" class="form-control" placeholder="Id de Cliente ">

            <label>Nombres</label>
            <input type="text" name="Nombres" class="form-control" placeholder="Nombre de Cliente ">

            <label>Apellidos</label>
            <input type="text" name="Apellidos" class="form-control" placeholder="Apellidos del Cliente ">

            <label>Fecha de Nacimiento</label>
            <input type="date" name="FechaNacimiento" class="form-control" placeholder="Fecha de Nacimiento del Cliente ">
    </div>
    </div>
<div class="col-md-4">
<input type="submit" value="Enviar" class="btn btn-success">
</div>

</form>
</div>