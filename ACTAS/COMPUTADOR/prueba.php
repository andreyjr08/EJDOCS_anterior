<?php
 use clases_pdo\funciones;
 $id = $_GET['id'];
        require_once('clases/funciones.php');
        $resu = array();
        $ins = new funciones();
        $result = $ins->select_person($id);
            echo json_encode($result);

        
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1>hola</h1>
</body>
</html>