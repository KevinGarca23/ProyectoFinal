<div class="mt-4 p-5 bg-primary text-white rounded">
    <h3 class="display-4">Catalogo</h3>
</div>
<div class="row"> 
<?php foreach ($productos as $pro) { ?>
    <div class="col-3">
        <div class="card">
            <img
            title="<?php echo $pro['ReferenciaProducto'] ?>"
            alt="<?php echo $pro['ReferenciaProducto'] ?>"
            class="card-img-top"
            src="<?php echo $pro['ProImagen'] ?>"
            >
            <div class="card-body">
                <span><?php echo $pro['ReferenciaProducto'] ?></span>
                <h5 class="card-title"><?php echo $pro['Precio'] ?></h5>
                <a href="<?php echo getUrl("Carrito","Carrito","agregarProducto",array
                ("IdProducto"=>$pro['IdProducto'],"ReferenciaProducto"=>$pro['ReferenciaProducto']),"ajax")?>"><button class="btn btn-primary"
                name="btnAccion"
                value="Agregar";
                type="submit"
                >Agregar al carrito
                </button></a>
            </div>
        </div>
    </div>
<?php } ?>
</div>
