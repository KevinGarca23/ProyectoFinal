<?php
include_once '../model/Usuario/UsuarioModel.php';
class UsuarioController{

    public function getInsert(){
    include_once '../view/Usuario/insert.php';
    }


    public function postInsert(){
        $obj=new UsuarioModel();

        $Correo=$_POST['Correo'];
        $Contrasena=$_POST['Contrasena'];
        $Nombre=$_POST['Nombre'];

        $sql="INSERT INTO usuario VALUES (null,'$Correo','$Contrasena','$Nombre')";
        
      

        $ejecutar=$obj->insert($sql);
        if ($ejecutar) {
            redirect(getUrl("Usuario","Usuario","getInsert"));

        }else {
            echo "Recorcholis, hubo un error en la insercion";
        }

    }
    public function consult(){
        $obj=new UsuarioModel();

        $sql="SELECT * FROM usuario";
        $Usuarios=$obj->consult($sql);

        include_once "../view/Usuario/consult.php";
    }

    public function getUpdate(){
        $obj=new UsuarioModel ();

        $IdUsuario=$_GET['IdUsuario'];
        

        $sql="SELECT * FROM usuario WHERE IdUsuario=$IdUsuario";

        $Usuario=$obj->consult($sql);

        include_once '../view/Usuario/update.php';

    }

    public function postUpdate(){
        $obj=new UsuarioModel();

       
        
        $Correo=$_POST['Correo'];
        $Contrasena=$_POST['Contrasena'];
        $Nombre=$_POST['Nombre'];
        $IdUsuario=$_POST['IdUsuario'];

        $sql="UPDATE usuario SET  Correo='$Correo', Contrasena='$Contrasena', Nombre='$Nombre' WHERE IdUsuario='$IdUsuario' ";
     

        $ejecutar=$obj->update($sql);

        if ($ejecutar) {
            redirect(getUrl("Usuario","Usuario","consult"));

        }else {
            echo "Recorcholis, hubo un error en la insercion";
        }

    }
        public function getDelete(){
        $obj=new UsuarioModel();

        $IdUsuario=$_GET['IdUsuario'];

        $sql="SELECT * FROM usuario WHERE IdUsuario=$IdUsuario";

        $usuario=$obj->consult($sql);

        include_once "../view/Usuario/delete.php";

        }

        public function postDelete(){
            $obj=new UsuarioModel();

            $IdUsuario=$_POST['IdUsuario'];

            $sql="DELETE FROM usuario WHERE IdUsuario=$IdUsuario";

            $ejecutar=$obj->delete($sql);

            if ($ejecutar){
                redirect(getUrl("Usuario","Usuario","consult"));
    
            }else{
                echo "Recorcholis, hubo un error en la actualizacion";
            }

        }


}

?>