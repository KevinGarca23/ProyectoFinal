<div class="mt-4 p-5 bg-primary text-white rounded">
    <h3 class="display-4">Consultar Clientes</h3>
</div>
<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>FechaNacimiento</th>
            <th colspan="2">Acciones</th>

        </tr>
    </thead>
    <tbody>
        <?php

            foreach ($Clientes as $dep) {
                echo "<tr>";    
                    echo "<td>".$dep['IdCliente']."</td>";
                    echo "<td>".$dep['Nombres']."</td>"; 
                    echo "<td>".$dep['Apellidos']."</td>"; 
                    echo "<td>".$dep['FechaNacimiento']."</td>"; 
                    echo "<td>"
                        ."<a href='".getUrl("Cliente","Cliente","getUpdate",array("IdCliente"=>$dep['IdCliente']))."'><button class='btn btn-primary'>Editar</button></a>".
                        "</td>";

                        echo "<td>"
                        ."<a href='".getUrl("Cliente","Cliente","getDelete",array("IdCliente"=>$dep['IdCliente']))."'><button class='btn btn-danger'>Eliminar</button></a>".
                        "</td>";
                
                    echo "<td></td>";
                echo "</tr>";    
            }
        ?>
    </tbody>
</table>