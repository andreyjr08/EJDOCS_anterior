<?php
 use clases_pdo\funcionLog;
    if (isset($_POST) && !empty($_POST)) {
        require_once('../funcion_log.php');
        $resu = array();
        $usuario = $_POST['usuario'];
        $contra =  $_POST['contra'];
        $ins = new funcionLog();
        $result = $ins->log($usuario,$contra);
        if($result) {
                $code = json_encode($result);
                $decode=json_decode($code, true);
                $nombre= $decode['NOMBRE'];
                $departa= $decode['NOMBRE_DEPAR'];
                $rol= $decode['ROL_ID'];
                session_start();
                $usuario= $request['usuario'];
                $_SESSION['usuario'] =$nombre;
                $departamento= $request['departamento'];
                $_SESSION['departamento'] =$departa;
                
                if ($rol==1) {
                    $resu["res"] = "si";
                    $resu["msj"] = header('Location: ../../aplicativo/index.php');
                }
            } else {
                $resu["res"] = "no";
                $resu["msj"] = header('Location: index.html');
            }

            echo json_encode($resu);
        }
?>