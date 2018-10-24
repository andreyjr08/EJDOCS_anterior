<?php
require_once '../clases/funciones.php';
use clases_pdo\funciones;
$usuarios = new funciones();



   $id = $_GET['id'];
   
   $Result = $usuarios ->select_All($id);
   echo json_encode($Result);


?>