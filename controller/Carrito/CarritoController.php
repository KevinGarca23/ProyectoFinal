<?php
    include_once '../model/Carrito/CarritoModel.php';
    
    class CarritoController
    {

        public function consult(){
            $obj= new CarritoModel();
    
            $sql="SELECT * FROM productos";
            $productos=$obj->consult($sql);
    
            include_once '../view/Productos/consult.php';
        }

        public function verCarrito(){
           //unset($_SESSION['carrito']);
            include_once '../view/Carrito/consult.php';
        }
        public function agregarProducto(){

            if (isset($_GET['IdProducto'])) {
                $pro_id=$_GET['IdProducto'];
                $pro_nombre=$_GET['ReferenciaProducto'];
                if (!isset($_SESSION['carrito'])){
                    $_SESSION['carrito']['IdProducto'][0]=$pro_id;
                    $_SESSION['carrito']['ReferenciaProducto'][0]=$pro_nombre;
                    $_SESSION['carrito']['pro_cant'][0]=1;
                }else{
                    if (in_array($pro_id,$_SESSION['carrito']['IdProducto'])==true){
                        $pos=array_search($pro_id,$_SESSION['carrito']['IdProducto']);
                        $_SESSION['carrito']['pro_cant'][$pos]++;
                    }else{ 
                    array_push($_SESSION['carrito']['IdProducto'],$pro_id);
                    array_push($_SESSION['carrito']['ReferenciaProducto'],$pro_nombre);
                    array_push($_SESSION['carrito']['pro_cant'],1);
                    }
                }
                redirect(getURL('Carrito','Carrito','consult'));      
               
            }
        }

         public function restarProducto(){

            if  (isset($_GET['IdProducto'])) {
                $pro_id=$_GET['IdProducto'];
                $pro_nombre=$_GET['ReferenciaProducto'];
                      
                    }else{ 
                        $_SESSION['carrito']['pro_cant'][0]=$resta;
                        $resta=$resta-1;
                    }
                    redirect(getURL('Carrito','Carrito','verCarrito'));    
                }
                   
               
    }
        
    


?>