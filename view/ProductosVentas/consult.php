<div class="Jumbotron Example">
    <h3 class="display-4">Consultar Productos Ventas</h3>
</div>
<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>Id Productos Ventas</th>
            <th>Precio Final</th>
            <th>Cantidad</th>
            <th>Id Venta</th>
            <th> Id Producto</th>
        </tr>
</thead>
<tbody>
    <?php
        foreach ($productosventas as $proven) {
            echo "<tr>";
                echo "<td>".$proven['IdProductoVentas']."</td>";
                echo "<td>".$proven['PrecioFinal']."</td>";
                echo "<td>".$proven['Cantidad']."</td>";
                echo "<td>".$proven['IdVenta']."</td>";
                echo "<td>".$proven['IdProducto']."</td>";
                echo "<td>"
    ."<a href='".getUrl("Productosventas","Productosventas","getUpdate",array("IdProductoVentas"=>$proven['IdProductoVentas']))."'><button class='btn btn-primary'>Editar</button></a>"
                ."</td>";
                echo "<td>"
                ."<a href='".getUrl("Productosventas","Productosventas","getDelete",array("IdProductoVentas"=>$proven['IdProductoVentas']))."'><button class='btn btn-danger'>Eliminar</button></a>"     
                ."</td>";
             echo "</tr>";
            }
        ?>
    </tbody>
</table>