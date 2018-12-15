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
        $acta = $_POST['acta'];
        $ins = new funciones();
        $result = $ins->anadirComputador($serial, $activo_fijo, $procesador, $memoria_ram, $serial_cargador, 
            $computador,$acta);
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
