<div class="mt-4 p-5 bg-primary text-white rounded">
    <h3 class="display-4">Consultar Productos</h3>
</div>
<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Referencia Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Cantidad Descargada</th>
            <th>Imagen</th>
        </tr>
</thead>
<tbody>
    <?php
        foreach ($productos as $pro) {
            echo "<tr>";
                echo "<td>".$pro['IdProducto']."</td>";
                echo "<td>".$pro['ReferenciaProducto']."</td>";
                echo "<td>".$pro['Precio']."</td>";
                echo "<td>".$pro['Cantidad']."</td>";
                echo "<td>".$pro['CantidadDescargada']."</td>";
                echo "<td><img src='".$pro['ProImagen']."' width='100px'></td>"; 
                echo "<td>"
    ."<a href='".getUrl("Productos","Productos","getUpdate",array("IdProducto"=>$pro['IdProducto']))."'><button class='btn btn-primary'>Editar</button></a>"
                ."</td>";
                echo "<td>"
                ."<a href='".getUrl("Productos","Productos","getDelete",array("IdProducto"=>$pro['IdProducto']))."'><button class='btn btn-danger'>Eliminar</button></a>"     
                ."</td>";
                echo "<td>". "<a href='".getUrl("Carrito","Carrito","agregarProducto",array("IdProducto"=>$pro['IdProducto'],"ReferenciaProducto"=>$pro['ReferenciaProducto']),"ajax")."'><button class='btn btn-success'>Agregar al Carrito</button></a>"."</td>";
                echo "</tr>";    

                
            }
        ?>
    </tbody>
</table>