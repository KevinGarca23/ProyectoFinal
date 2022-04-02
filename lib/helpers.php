<?php
session_start();
function redirect($url){
    echo "<script type='text/javascript'>"
            ."window.location.href='$url'"
            ."</script>";
    }



function dd($var){
    echo"<pre>";
    die(print_r($var));
}

function getUrl($modulo,$controlador,$funcion,$parametro=false){
    $url="index.php?modulo=$modulo&controlador=$controlador&funcion=$funcion";

if ($parametro!=false) {
        foreach ($parametro as $indice => $valor){
            $url.="&$indice=$valor";
        }
    }
    return $url;

}

function resolve(){

    $modulo=ucwords($_GET['modulo']);
    $controlador=ucwords($_GET['controlador']);
    $funcion=$_GET['funcion'];


    if (is_dir("../controller/$modulo")) {
    

        if (is_file("../controller/$modulo/".$controlador."controller.php")) {
            include_once "../controller/$modulo/".$controlador."controller.php";
                
            $nombreClase=$controlador."controller";
            $objeto=new $nombreClase;

            $objeto=new $nombreClase;

        if (method_exists($objeto,$funcion)) {

            $objeto->$funcion();

        }else {
            echo "La funcion especificada no existe";
            }
        }else{
        echo "El controlador especificado no existado";
         }
    }else {
    echo "El modulo especifico no existe";

    }
}


?>