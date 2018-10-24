<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
    <script type="text/javascript" language="javascript" src="js/jquery-1.11.2.js" ></script>
    <script type="text/javascript" language="javascript" src="js/ajax_lista.js" ></script>
    <link rel="stylesheet" href="../CSS/bootstrap/font-awesome.min.css">
    <link rel="stylesheet" href="js/jquery.min.js">
    <link rel="stylesheet" href="../ACTAS/CSS/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../ACTAS/CSS/style.css">
    <link rel="stylesheet" href="../ACTAS/CSS/css.css" type="text/css">

  <title>Actas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
   <div class="jumbotron hed text-white">
    <div class="row">
        <div class="col-sm-12 text-right sesion">
             <span><?php  if(isset($_SESSION['usuario'])) echo $_SESSION['usuario'];?></span>
             <i class="fas fa-power-off" title="Cerrar sesion"></i>                
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-xs-12">
            <h1 class="display-5">EJDOCS</h1>            
        </div>
    </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Actas
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Computador</a>
                <a class="dropdown-item" href="#">Celular</a>
                <a class="dropdown-item" href="#">pantalla</a>
                <a class="dropdown-item" href="#">Disco Duro</a>
                <a class="dropdown-item" href="#">Impresora</a>
              </div>
            </div>
        
        
            <span>Tickets</span>
       
        
            <span>Tareas</span>
        </div>
    </div>
<div class="container">
    <div class="row">
        <div class="panel-group col-sm-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Menú</div>
                    <div class="panel-body">
                            <div class="form-group" id="opciones">
                                <div class="col-sm-2">
                                    <a class="btn btn-primary" href="computador/lista.php" role="button">
                                        <i class="fas fa-desktop fa-2x"></i></a>
                                    <a class="btn btn-primary"  href="php/empresas/index.php" role="button">
                                        <i class="fas fa-mobile-alt fa-2x"></i>
                                    </a>
                                </div>
                            </div>
                    </div>
            </div>
         </div>

<!-- Muestra la pagina o llama la otra pagina por ajax para no redireccionar por url-->
    <div id='oculto' style='display:none;' class="col-sm-10">
        <div class="panel-group show col-sm-12" id="contenedor">
            <div class="panel panel-primary">
                <div class="panel-heading" id="titulo">Panel Principal</div>
                <div class="panel-body">
                    <div class="form-group" id="contenido">
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

    <!-- Funciones JS para traer el menú de computador -->
    <script src="js/computador.js"></script>
    <script>
        $(document).ready(Inicio);
    </script>
</body>
</html>
    