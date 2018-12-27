<?php
 use clases_pdo\funciones;
    if (isset($_POST) && !empty($_POST)) {
        require_once('../clases/funciones.php');
        $resu = array();
        $pantalla = $_POST['pantalla'];
        $serialP=  $_POST['serial']; 
        $actaP = $_POST['acta'];
        $ins = new funciones();
        $result = $ins->anadirPantalla($serialP, $pantalla,$actaP);
        if($result) {
              	$resu["res"] = "si";
            	$resu["msj"] = "El documento se a creado con exito";
            } else {
                $resu["res"] = "no";
            	$resu["msj"] = "Error al intentar insertar ";
            }
            echo json_encode($resu);
        }
?>
