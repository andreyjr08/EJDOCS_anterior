<?php
require_once '../clases/funciones.php';
use clases_pdo\funciones;
$usuarios = new funciones();

$result = $usuarios ->select_persons();
?>

<link rel="stylesheet" href="css/font-awesome.min.css">

<div class="box-header">
    <i class="ion ion-clipboard"></i>
    <div class="pull-right box-tools">
        <button class="btn btn-info btn-sm" id="nuevo_computador" data-toggle="tooltip" title="Nueva acta Computador">
            <i class="fas fa-plus" aria-hidden="true"></i>
        </button>
        <button class="btn btn-danger btn-sm btncerrar_nueva_acta_computador" data-toggle="tooltip" title="Ocultar">
            <i class="fas fa-times"></i>
        </button>
    </div>
</div>

<div class="box-body">
    <table class="table table-striped table-bordered table-hover table-responsive" cellspacing="0" width="100%">
    <thead>
        <tr class="negrita">
            <td>PARA</td>
            <td>CEDULA</td>
            <td>DE</td>
            <td>ASUNTO</td>
            <td>COMPUTADOR</td>
            <td>CELULAR</td>
            <td>OPCION</td>
            <td>REPORTE</td>
        </tr>
    </thead>
    <tbody>
        
        <?php
            foreach ($result as $usuarios) {
            ?>
            <tr>
                <td><?php echo $usuarios['PARA'] ?></td>
                <td><?php echo $usuarios['CEDULA'] ?></td>
                <td><?php echo $usuarios['DE'] ?></td>
                <td><?php echo $usuarios['ASUNTO'] ?></td>
                <td><?php echo $usuarios['COMPUTADOR'] ?></td>
                <td><?php echo $usuarios['CELULAR_ID'] ?></td>
                <!-- BOTON EDITAR-->
                <td><a href="computador/datos_actu.php?id=<?php echo $usuarios['ID']?>" class="btn btn-primary" id="btnActualizar"><i class="fas fa-pencil-alt fa-1x" aria-hidden="false"></i></a></td>
                <!--BOTON REPORTE-->
                <td><a href="reporte/plantilla.php?id=<?php echo $usuarios['ID']?>" target="_Blank" class= "btn btn-danger fas fa-file-pdf fa-1x"></a></td>
            </tr>
            <?php
            }
        ?>
    </tbody>
    </table>
</div>
</div>
<script>
    $(document).ready(function(){
        $("#tabla").DataTable();
    });
</script>