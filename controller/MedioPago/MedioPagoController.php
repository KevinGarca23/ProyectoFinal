<?php
include_once '../model/MedioPago/MedioPagoModel.php';
class MedioPagoController{

    public function getInsert(){
    include_once '../view/MedioPago/insert.php';
    }


    public function postInsert(){
        $obj=new MedioPagoModel();

  
        $Descripcion=$_POST['Descripcion'];

        $sql="INSERT INTO mediopago VALUES (null,'$Descripcion')";
        
      

        $ejecutar=$obj->insert($sql);
        
        if ($ejecutar) {
            redirect(getUrl("MedioPago","MedioPago","getInsert"));

        }else {
            echo "Recorcholis, hubo un error en la insercion";
        }

    }
    public function consult(){
        $obj=new MedioPagoModel();


        $sql="SELECT * FROM mediopago";
        $MedioPagos=$obj->consult($sql);

        include_once "../view/MedioPago/consult.php";
    }

    public function getUpdate(){
        $obj=new MedioPagoModel ();

        $IdMedioPago=$_GET['IdMedioPago'];
        

        $sql="SELECT * FROM mediopago WHERE IdMedioPago=$IdMedioPago";

        $MedioPago=$obj->consult($sql);

        include_once '../view/MedioPago/update.php';

    }

    public function postUpdate(){
        $obj=new MedioPagoModel();

       
        
        $IdMedioPago=$_POST['IdMedioPago'];
        $Descripcion=$_POST['Descripcion'];

        $sql="UPDATE mediopago SET  Descripcion='$Descripcion' WHERE IdMedioPago='$IdMedioPago' ";
     

        $ejecutar=$obj->update($sql);

        if ($ejecutar) {
            redirect(getUrl("MedioPago","MedioPago","consult"));

        }else {
            echo "Recorcholis, hubo un error en la insercion";
        }

    }
        public function getDelete(){
        $obj=new MedioPagoModel();

        $IdMedioPago=$_GET['IdMedioPago'];

        $sql="SELECT * FROM mediopago WHERE IdMedioPago=$IdMedioPago";

        $mediopago=$obj->consult($sql);

        include_once "../view/MedioPago/delete.php";

        }

        public function postDelete(){
            $obj=new MedioPagoModel();

            $IdMedioPago=$_POST['IdMedioPago'];

            $sql="DELETE FROM mediopago WHERE IdMedioPago=$IdMedioPago";

            $ejecutar=$obj->delete($sql);

            if ($ejecutar){
                redirect(getUrl("MedioPago","MedioPago","consult"));
    
            }else{
                echo "Recorcholis, hubo un error en la actualizacion";
            }

        }


}

?>