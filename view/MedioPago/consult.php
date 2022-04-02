<div class="mt-4 p-5 bg-primary text-white rounded">
    <h3 class="display-4">Consultar Medios de Pago</h3>
</div>
<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>IdMedioPago</th>
            <th>Descripcion</th>
            <th colspan="2">Acciones</th>

        </tr>
    </thead>
    <tbody>
        <?php

            foreach ($MedioPagos as $dep) {
                echo "<tr>";    
                    echo "<td>".$dep['IdMedioPago']."</td>";
                    echo "<td>".$dep['Descripcion']."</td>"; 
                    echo "<td>"
                        ."<a href='".getUrl("MedioPago","MedioPago","getUpdate",array("IdMedioPago"=>$dep['IdMedioPago']))."'><button class='btn btn-primary'>Editar</button></a>".
                        "</td>";

                        echo "<td>"
                        ."<a href='".getUrl("MedioPago","MedioPago","getDelete",array("IdMedioPago"=>$dep['IdMedioPago']))."'><button class='btn btn-danger'>Eliminar</button></a>".
                        "</td>";
                
                    echo "<td></td>";
                echo "</tr>";    
            }
        ?>
    </tbody>
</table>