<?php
    include_once '../model/EstadoVenta/EstadoVentaModel.php';
    class EstadoVentaController{
        public function getInsert(){
            $obj=new ProductosModel();
            include_once '../view/EstadoVenta/insert.php';
        }
        public function postInsert(){
            $obj=new EstadoVentaModel();
    
            $descripcion=$_POST['Descripcion'];
    
            $sql="INSERT INTO estadoventa VALUES(null,'$descripcion')";
    
            $ejecutar=$obj->insert($sql);
    
            if ($ejecutar){
                redirect(getUrl("EstadoVenta","EstadoVenta","consult"));
            }else{
                echo "Recorcholis, hubo un error en la inserción";
            }
        }
        public function consult(){
            $obj= new EstadoVentaModel();
    
            $sql="SELECT * FROM estadoventa";
            $estadoventa=$obj->consult($sql);
    
            include_once '../view/EstadoVenta/consult.php';
        }
        public function getUpdate(){
            $obj=new EstadoVentaModel();
    
            $estadoventaid=$_GET['IdEstadoVenta'];
    
            $sql="SELECT * FROM estadoventa WHERE IdEstadoVenta=$estadoventaid";
    
            $estadoventa=$obj->consult($sql);
    
            include_once '../view/EstadoVenta/update.php';
    
        }
        public function postUpdate(){
        $obj=new EstadoVentaModel();
    
        $descripcion=$_POST['Descripcion'];
        $estadoventaid=$_POST['IdEstadoVenta'];
    
        $sql="UPDATE estadoventa SET Descripcion='$descripcion' WHERE IdEstadoVenta=$estadoventaid";
    
        $ejecutar=$obj->update($sql);
    
        if ($ejecutar) {
            redirect(getUrl("EstadoVenta","EstadoVenta","consult"));
        }else{
            echo "Recorcholis, hubo un error en la inserción";
             }
        }
        public function getDelete(){
            $obj=new EstadoVentaModel();
    
            $estadoventaid=$_GET['IdEstadoVenta'];
    
            $sql="SELECT * FROM estadoventa WHERE IdEstadoVenta=$estadoventaid";
    
            $estadoventa=$obj->consult($sql);
    
            include_once '../view/EstadoVenta/delete.php';
        }

        public function postDelete(){
            $obj=new EstadoVentaModel();
        
            $estadoventaid=$_POST['IdEstadoVenta'];
        
            $sql="DELETE FROM estadoventa WHERE IdEstadoVenta=$estadoventaid";
        
            $ejecutar=$obj->delete($sql);
        
            if ($ejecutar) {
                redirect(getUrl("EstadoVenta","EstadoVenta","consult"));
            }else{
                echo "Recorcholis, hubo un error en la eliminacion";
                 }
       
        }

    }



?>