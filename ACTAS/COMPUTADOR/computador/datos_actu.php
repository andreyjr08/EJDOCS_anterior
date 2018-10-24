<?php
use clases_pdo\funciones;
    if(isset($_GET) && !empty($_GET['id'])){
        require_once('../clases/funciones.php');
        $user = new funciones();
        $id = $_GET['id'];
        $result = $user->select_person($id);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/css.css" type="text/css" />
    <script type="text/javascript" language="javascript" src="../js/jquery-1.11.2.js" ></script>
    <script type="text/javascript" language="javascript" src="../js/actualizar.js" ></script>
</head>
<body>
    <div class="container" id="cargaDeDatos"> 
        <div class="p-3 C a bg-primary text-white text-center ">
            <span class="far fa-edit fa-3x"></span>
        </div>
        <div class="jumbotron">
            <form id="frmDatos" name="frmDatos" method="post" action="../procesos/actualizar.php">
            <div class="row center">
                <div class="col-xs-12 col-md-6 col-lg-6 mx-auto">
                    <label>ID</label>
                    <div class="input-group mb-3">
                        <input type="text" name="id" value="<?php echo $result['ID'] ?>" id="id" class="form-control" placeholder="Para" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>
            <div class="row center">
                <div class="col-xs-12 col-md-6 col-lg-6 mx-auto">
                    <label>PARA</label>
                    <div class="input-group mb-3">
                        <input type="text" name="para" value="<?php echo $result['PARA'] ?>" id="para" class="form-control" placeholder="Para" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-6 col-lg-6 mx-auto">
                    <label>#CEDULA</label>
                    <div class="input-group mb-3">
                        <input type="number" name="cedula" value="<?php echo $result['CEDULA'] ?>" id="cedula" class="form-control" placeholder="Cedula" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-6 col-lg-6 mx-auto">
                    <label>DE</label>
                    <div class="input-group mb-3">
                        <input type="text" name="de" value="<?php echo $result['DE'] ?>" id="de" class="form-control" placeholder="De" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-6 col-lg-6 mx-auto">
                    <label>ASUNTO</label>
                    <div class="input-group mb-3">
                        <input type="text" name="asunto" value="<?php echo $result['ASUNTO'] ?>" id="asunto" class="form-control" placeholder="Asunto" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <a href="#" class="btn btn-info fas fa-edit fa-2x" type="submit" id="btnEnviarP"></a>
                </div>
            </div>
            </form>
        </div>
    </div>    
    </div>
</body>
</html>