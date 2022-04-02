<?php

include_once '../model/Productos/ProductosModel.php';
class ProductosController{
    public function getInsert(){
        include_once '../view/Productos/insert.php';
    }
    public function postInsert(){
        $obj=new ProductosModel();

        $idproducto=$_POST['IdProducto'];
        $referenciaproducto=$_POST['ReferenciaProducto'];
        $precio=$_POST['Precio'];
        $cantidad=$_POST['Cantidad'];
        $cantidaddescargada=$_POST['CantidadDescargada'];


        $ProImagen=$_FILES['ProImagen']['name'];
        $ruta="img/$ProImagen";
        move_uploaded_file($_FILES['ProImagen']['tmp_name'],$ruta);

        $sql="INSERT INTO productos VALUES('$idproducto','$referenciaproducto','$precio','$cantidad','$cantidaddescargada','$ruta')";

        $ejecutar=$obj->insert($sql);

        if ($ejecutar){
            redirect(getUrl("Productos","Productos","consult"));
        }else{
            echo "Recorcholis, hubo un error en la inserción";
        }
    }
    public function consult(){
        $obj= new ProductosModel();

        $sql="SELECT * FROM productos";
        $productos=$obj->consult($sql);

        include_once '../view/Productos/consult.php';
    }
    public function getUpdate(){
        $obj=new ProductosModel();

        $productos=$_GET['IdProducto'];

        $sql="SELECT * FROM productos WHERE IdProducto=$productos";

        $productos=$obj->consult($sql);

        include_once '../view/Productos/update.php';

    }
    public function postUpdate(){
        $obj=new ProductosModel();
    
        $idproducto=$_POST['IdProducto'];
        $referenciaproducto=$_POST['ReferenciaProducto'];
        $precio=$_POST['Precio'];
        $cantidad=$_POST['Cantidad'];
        $cantidaddescargada=$_POST['CantidadDescargada'];

        $sql="UPDATE productos SET IdProducto='$idproducto',ReferenciaProducto='$referenciaproducto',Precio='$precio',Cantidad='$cantidad',CantidadDescargada='$cantidaddescargada' WHERE IdProducto='$idproducto'";
        $ejecutar=$obj->update($sql);

        if ($ejecutar) {
            redirect(getUrl("Productos","Productos","consult"));
        }else{
            echo "Recorcholis, hubo un error en la inserción";
             }
        }
        public function getDelete(){
            $obj=new ProductosModel();
    
            $idproducto=$_GET['IdProducto'];
    
            $sql="SELECT * FROM productos WHERE IdProducto=$idproducto";
    
            $productos=$obj->consult($sql);
    
            include_once '../view/Productos/delete.php';
        }

        public function postDelete(){
            $obj=new ProductosModel();
        
            $idproducto=$_POST['IdProducto'];
        
            $sql="DELETE FROM productos WHERE IdProducto=$idproducto";
        
            $ejecutar=$obj->delete($sql);
        
            if ($ejecutar) {
                redirect(getUrl("Productos","Productos","consult"));
            }else{
                echo "Recorcholis, hubo un error en la eliminacion";
                 }
       
        }
        public function catalogo() {
            $obj= new ProductosModel();

            $sql="SELECT * FROM productos";
            $productos=$obj->consult($sql);
            include_once '../view/Productos/catalogo.php';
        }
}

?>