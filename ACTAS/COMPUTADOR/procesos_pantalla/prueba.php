<?php  
if  (isset($_POST) && !empty($_POST)) {
	$cedula = $_POST['cedula'];
    $nombres=  $_POST['nombres']; 
    $apellidos = $_POST['apellidos'];
    $departamento =  $_POST['departamento'];

    echo " cedula= ".$cedula." apellidos= ".$apellidos." departamento= ".$departamento;
}else{

echo "No llego nada wey";

}


?>