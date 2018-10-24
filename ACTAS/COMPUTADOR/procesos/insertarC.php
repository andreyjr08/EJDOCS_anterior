<?php
 use clases_pdo\funciones;
    if (isset($_POST) && !empty($_POST)) {
        require_once('../clases/funciones.php');
        $resu = array();
        $computador = $_POST['computador'];
        $activo_fijo =  $_POST['activo_fijo'];
        $serial=  $_POST['serial']; 
        $procesador = $_POST['procesador'];
        $memoria_ram = $_POST['memoria_ram'];
        $serial_cargador = $_POST['serial_cargador'];
        $ins = new funciones();
        $result = $ins->addComp($computador, $activo_fijo, $serial, $procesador, $memoria_ram, 
            $serial_cargador);
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
