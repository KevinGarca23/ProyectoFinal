<?php
include_once '../model/Cliente/ClienteModel.php';
class ClienteController{

    public function getInsert(){
    include_once '../view/Cliente/insert.php';
    }


    public function postInsert(){
        $obj=new ClienteModel();

        $IdCliente=$_POST['IdCliente'];
        $Nombres=$_POST['Nombres'];
        $Apellidos=$_POST['Apellidos'];
        $FechaNacimiento=$_POST['FechaNacimiento'];
        

        $sql="INSERT INTO cliente VALUES ( '$IdCliente','$Nombres','$Apellidos','$FechaNacimiento')";
        
      

        $ejecutar=$obj->insert($sql);
        if ($ejecutar) {
            redirect(getUrl("Cliente","Cliente","getInsert"));

        }else {
            echo "Recorcholis, hubo un error en la insercion";
        }

    }
    public function consult(){
        $obj=new ClienteModel();

        $sql="SELECT * FROM cliente";
        $Clientes=$obj->consult($sql);

        include_once "../view/Cliente/consult.php";
    }

    public function getUpdate(){
        $obj=new ClienteModel ();

        $IdCliente=$_GET['IdCliente'];
        

        $sql="SELECT * FROM cliente WHERE IdCliente=$IdCliente";

        $Cliente=$obj->consult($sql);

        include_once '../view/Cliente/update.php';

    }

    public function postUpdate(){
        $obj=new ClienteModel();

       
        $IdCliente=$_POST['IdCliente'];
        $Nombres=$_POST['Nombres'];
        $Apellidos=$_POST['Apellidos'];
        $FechaNacimiento=$_POST['FechaNacimiento'];

        $sql="UPDATE cliente SET  Nombres='$Nombres', Apellidos='$Apellidos', FechaNacimiento='$FechaNacimiento' WHERE IdCliente='$IdCliente' ";
     

        $ejecutar=$obj->update($sql);

        if ($ejecutar) {
            redirect(getUrl("Cliente","Cliente","consult"));

        }else {
            echo "Recorcholis, hubo un error en la insercion";
        }

    }
        public function getDelete(){
        $obj=new ClienteModel();

        $IdCliente=$_GET['IdCliente'];

        $sql="SELECT * FROM cliente WHERE IdCliente=$IdCliente";

        $cliente=$obj->consult($sql);

        include_once "../view/Cliente/delete.php";

        }

        public function postDelete(){
            $obj=new ClienteModel();

            $IdCliente=$_POST['IdCliente'];

            $sql="DELETE FROM cliente WHERE IdCliente=$IdCliente";

            $ejecutar=$obj->delete($sql);

            if ($ejecutar){
                redirect(getUrl("Cliente","Cliente","consult"));
    
            }else{
                echo "Recorcholis, hubo un error en la actualizacion";
            }

        }


}

?>