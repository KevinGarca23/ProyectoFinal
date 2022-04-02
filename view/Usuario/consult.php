<div class="mt-4 p-5 bg-primary text-white rounded">
    <h3 class="display-4">Consultar Usuarios</h3>
</div>
<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Contraseña</th>
            <th colspan="2">Acciones</th>

        </tr>
    </thead>
    <tbody>
        <?php

            foreach ($Usuarios as $dep) {
                echo "<tr>";    
                    echo "<td>".$dep['IdUsuario']."</td>";
                    echo "<td>".$dep['Nombre']."</td>"; 
                    echo "<td>".$dep['Correo']."</td>"; 
                    echo "<td>".$dep['Contrasena']."</td>"; 
                    echo "<td>"
                        ."<a href='".getUrl("Usuario","Usuario","getUpdate",array("IdUsuario"=>$dep['IdUsuario']))."'><button class='btn btn-primary'>Editar</button></a>".
                        "</td>";

                        echo "<td>"
                        ."<a href='".getUrl("Usuario","Usuario","getDelete",array("IdUsuario"=>$dep['IdUsuario']))."'><button class='btn btn-danger'>Eliminar</button></a>".
                        "</td>";
                
                    echo "<td></td>";
                echo "</tr>";    
            }
        ?>
    </tbody>
</table>