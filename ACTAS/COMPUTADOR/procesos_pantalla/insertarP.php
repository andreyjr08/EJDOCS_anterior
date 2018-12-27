<?php
 use clases_pdo\funciones;
    if (isset($_POST) && !empty($_POST)) {
        require_once('../clases/funciones.php');
        $resu = array();
        $para = $_POST['para'];
        $de=  $_POST['de']; 
        $asunto = $_POST['asunto'];
        $creador =  $_POST['creador'];
        $ins = new funciones();
        $result = $ins->addUser($para,$de, $asunto,$creador);
        if($result) {
              	$resu["res"] = "si";
            	$resu["msj"] = "Guardado con exito";

            } else {
                $resu["res"] = "no";
            	$resu["msj"] = "Error al intentar insertar ";
            }
            echo json_encode($resu);
        }
?>

