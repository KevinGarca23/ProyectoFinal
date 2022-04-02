<div class="mt-4 p-5 bg-primary text-white rounded">
    <h3 class="display-4">Carrito</h3>
</div>
<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Eliminar</th>
        </tr>
</thead>
<tbody>
    <?php
    //dd($_SESSION['carrito']);
        for ($i=0; $i<count($_SESSION['carrito']['IdProducto']) ; $i++) { 
            echo "<tr>";
                echo "<td>".$_SESSION['carrito']['IdProducto'][$i]."</td>";
                echo "<td>".$_SESSION['carrito']['ReferenciaProducto'][$i]."</td>";
                echo "<td>".$_SESSION['carrito']['pro_cant'][$i]."</td>";
                echo "<td>". "<a href='".getUrl("Carrito","Carrito","restarProducto",array("IdProducto"=>$pro['IdProducto'],"ReferenciaProducto"=>$pro['ReferenciaProducto']),"ajax")."'><button class='btn btn-secondary'>Restar cantidad</button></a>"."</td>";
                echo "</tr>";  
        }    
        
     
     

    ?>
    </tbody>
</table>


    






