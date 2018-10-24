<?php
 use clases_pdo\funciones;
    if (isset($_POST) && !empty($_POST)) {
        require_once('../clases/funciones.php');
        $resu = array();
        $para = $_POST['para'];
        $cedula =  $_POST['cedula'];
        $de=  $_POST['de']; 
        $asunto = $_POST['asunto'];
        $computadorPK = $_POST['computadorPK'];
        $celularPK = $_POST['celularPK'];
        $ins = new funciones();
        $result = $ins->addUser($para, $cedula, $de, $asunto, $computadorPK, $celularPK);
        if($result) {
              	$resu["res"] = "si";
            	$resu["msj"] = "Registro insertado";

            } else {
                $resu["res"] = "no";
            	$resu["msj"] = "Error al intentar insertar ";
            }
            echo json_encode($resu);
        }
?>

