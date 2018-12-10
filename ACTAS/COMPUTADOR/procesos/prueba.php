<?php  
if  (isset($_POST) && !empty($_POST)) {
	$comput = $_POST['computador'];
    $act_fij=  $_POST['activo_fijo']; 
    $serial = $_POST['serial'];
    $procesador =  $_POST['procesador'];
    $memo_ram =  $_POST['memoria_ram'];
    $seri_car =  $_POST['serial_cargador'];
    $acta =  $_POST['acta'];

    echo " serial= ".$serial." Actvo fijo= ".$act_fij." procesador= ".$procesador." memoria ram= ".$memo_ram." serial cargador= ".$seri_car."Computador= ".$comput." acta= ".$acta;
}else{

echo "No llego nada wey";

}


?>