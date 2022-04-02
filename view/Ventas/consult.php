<div class="Jumbotron Example">
    <h3 class="display-4">Consultar Ventas</h3>
</div>
<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>Id Venta</th>
            <th> FechaVenta</th>
            <th>ValorTotal</th>
            <th>IdEstadoVenta</th>
            <th>IdMedioPago</th>
            <th>IdCliente</th>
        </tr>
</thead>
<tbody>
    <?php
        foreach ($ventas as $ven) {
            echo "<tr>";
                echo "<td>".$ven['IdVenta']."</td>";
                echo "<td>".$ven['FechaVenta']."</td>";
                echo "<td>".$ven['ValorTotal']."</td>";
                echo "<td>".$ven['IdEstadoVenta']."</td>";
                echo "<td>".$ven['IdMedioPago']."</td>";
                echo "<td>".$ven['IdCliente']."</td>";
                echo "<td>"
    ."<a href='".getUrl("ventas","ventas","getUpdate",array("IdVenta"=>$ven['IdVenta']))."'><button class='btn btn-primary'>Editar</button></a>"
                ."</td>";
                echo "<td>"
                ."<a href='".getUrl("ventas","ventas","getDelete",array("IdVenta"=>$ven['IdVenta']))."'><button class='btn btn-danger'>Eliminar</button></a>"     
                ."</td>";
             echo "</tr>";
            }
        ?>
    </tbody>
</table>