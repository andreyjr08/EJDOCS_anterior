<?php
 use clases_pdo\funciones;
    if (isset($_POST) && !empty($_POST)) {
        require_once('../clases/funciones.php');
        $resu = array();
        $cedula = $_POST['cedula2'];
        $nombres =  $_POST['nombres'];
        $apellidos=  $_POST['apellidos']; 
        $departamento = $_POST['departamento'];

        $ins = new funciones();
        $result = $ins->anadirUsuario($cedula, $nombres, $apellidos, $departamento);
        if($result) {
              	$resu["res"] = "si";
            	$resu["msj"] = "Agregado con exito";
            } else {
                $resu["res"] = "no";
            	$resu["msj"] = "Error al intentar insertar ";
            }
            echo json_encode($resu);
        }
?>
