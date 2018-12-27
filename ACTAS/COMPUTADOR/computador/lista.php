<?php
require_once '../clases/funciones.php';
use clases_pdo\funciones;
$usuarios = new funciones();

$result = $usuarios ->select_persons();
?>

<link rel="stylesheet" href="../../CSS/bootstrap/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../ACTAS/CSS/css_list_actas.css">
<div id="none">
<div class="box-header">
    <i class="ion ion-clipboard"></i>
    <div class="pull-right box-tools col-md-1 col-lg-1 col-xs-1">
        <button class="btn btn-primary btn-sm" id="nuevo_computador" data-toggle="tooltip" title="Nueva acta Computador">
            <i class="fas fa-plus" aria-hidden="true"></i>
        </button>
    </div>
    <div class="pull-right box-tools col-md-11 col-lg-11 col-xs-11">
        <button class="btn btn-primary btn-sm" id="nuevo_computador" data-toggle="tooltip" title="Acta computador">
           <i class="fas fa-desktop"></i>
        </button>
        <button class="btn btn-primary btn-sm" id="nueva_pantalla" data-toggle="tooltip" title="Acta pantalla">
            <i class="fas fa-tv"></i>
        </button>
        <button class="btn btn-primary btn-sm" id="nuevo_celular" data-toggle="tooltip" title="Acta celular">
            <i class="fas fa-mobile-alt"></i>
        </button>
        <button class="btn btn-primary btn-sm" id="nueva_impresora" data-toggle="tooltip" title="Acta impresora">
            <i class="fas fa-print"></i>
        </button>

    </div>
</div>

<div class="box-body">
    <table class="table table-striped table-bordered table-hover table-responsive" cellspacing="0" width="100%">
    <thead>
        <tr class="negrita">
            <td>NUMERO</td>
            <td>PARA</td>
            <td>DE</td>
            <td>ASUNTO</td>
            <td>COMPUTADOR</td>
            <td>OPCION</td>
            <td>REPORTE</td>
        </tr>
    </thead>
    <tbody>
        
        <?php
            foreach ($result as $usuarios) {
            ?>
            <tr>
                <td><?php echo $usuarios['ID']?></td>
                <td><?php echo $usuarios['NOMBRES'], $usuarios['APELLIDOS'] ?></td>
                <td><?php echo $usuarios['DE'] ?></td>
                <td><?php echo $usuarios['ASUNTO'] ?></td>
                <td><?php echo $usuarios['marca'] ?></td>
                <!-- BOTON EDITAR-->
                <td><a href="computador/datos_actu.php?id=<?php echo $usuarios['ID']?>" class="btn btn-primary" id="btnActualizar"><i class="fas fa-pencil-alt fa-1x" aria-hidden="false"></i></a></td>
                <!--BOTON REPORTE-->
                <td><a href="../ACTAS/COMPUTADOR/reporte/plantilla.php?id=<?php echo $usuarios['ID']?>" target="_Blank" class= "btn btn-danger fas fa-file-pdf fa-1x"></a></td>
            </tr>
            <?php
            }
        ?>
    </tbody>
    </table>
</div>
</div>
</div>
<script>
    $(document).ready(function(){
        $("#tabla").DataTable();
    });
</script>