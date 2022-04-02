<?php

include_once '../lib/helpers.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

    <div class="container mt-5">
        <div class="card col-md-4 m-auto">
            <h3 class="card col-md-4 m-auto">Inicio Sesion</h3>
            <form action="<?php echo getUrl("Acceso","Acceso","login",false,"ajax"); ?>"method="post">
        <div class="form-group">
            <label>Usuario</label>
            <input type="text" name="Correo" class="form-control" placeholder="Correo o Nickname">
        </div>
        <div class="form-group">
            <label>Contraseña</label>
            <input type="password" name="Contrasena" class="form_control" placeholder="Contraseña">
        </div>
        <input type="submit" value="Ingresar" class="btn btn-succes btn-block mb-3"> 
        </form>
    
    </div>

</div>
    
</body>
</html>
