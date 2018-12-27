<?php 
require_once('../clases/funciones.php');
use clases_pdo\funciones;
$usuario = new funciones();
$result= array();
if (isset ($_POST) && !empty($_POST['id'])) {
  $id = $_POST['id'];
   $para = $_POST['para'];
   $cedula = $_POST['cedula'];
   $de = $_POST['de'];
   $asunto = $_POST['asunto'];
   
   $usuario->infoActualiza($id,$para,$cedula,$de,$asunto);
        if($usuario) {
              	$result["res"] = "si";
            	$result["msj"] = "Registro actualizado";

        } else {
                $result["res"] = "no";
            	$result["msj"] = "Error al intentar actualizar ";
        }
        echo json_encode($result);
}
?>