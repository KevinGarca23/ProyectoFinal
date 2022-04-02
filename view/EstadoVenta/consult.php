<div class="mt-4 p-5 bg-primary text-white rounded">
    <h3 class="display-4">Consultar EstadoVenta</h3>
</div>
<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Descripción</th>
            <th colspan="2">Acciones</th>
        </tr>
</thead>
<tbody>
    <?php
        foreach ($estadoventa as $est) {
            echo "<tr>";
                echo "<td>".$est['IdEstadoVenta']."</td>";
                echo "<td>".$est['Descripcion']."</td>";
                echo "<td>"
    ."<a href='".getUrl("EstadoVenta","EstadoVenta","getUpdate",array("IdEstadoVenta"=>$est['IdEstadoVenta']))."'><button class='btn btn-primary'>Editar</button></a>"
                ."</td>";
                echo "<td>"
                ."<a href='".getUrl("EstadoVenta","EstadoVenta","getDelete",array("IdEstadoVenta"=>$est['IdEstadoVenta']))."'><button class='btn btn-danger'>Eliminar</button></a>"     
                ."</td>";
             echo "</tr>";
            }
        ?>
    </tbody>
</table>