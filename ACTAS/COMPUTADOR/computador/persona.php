<?php
require_once '../clases/funciones.php';
use clases_pdo\funciones;
$usuarios = new funciones();
$result = $usuarios ->select_comp();
$result2 = $usuarios ->select_cel();
?>

<script type="text/javascript" language="javascript" src="js/validacionP.js" ></script>
<div class="box-header">
</div>
<form id="frmDatosP" name="frmDatosP" method="post" action="procesos/insertarP.php">
	<dir class="col-ms-12" id="cargaDeDatos">
		<div class="p-3 C bg-primary2 text-white text-center">
			<span class="far fa-user fa-3x"></span>
		</div>

		<div class="jumbotron">
				<div class="col-ms-12">
					<label>PARA</label>
					<div class="input-group mb-3">
  						<input type="text" name="para" id="para" class="form-control" placeholder="Para" aria-label="Username" aria-describedby="basic-addon1">
					</div>
				</div>
				<div class="col-ms-12">
					<label>#CEDULA</label>
					<div class="input-group mb-3">
  						<input type="number" name="cedula" id="cedula" class="form-control" placeholder="Cedula" aria-label="Username" aria-describedby="basic-addon1">
					</div>
				</div>
				<div class="col-ms-12">
					<label>DE</label>
					<div class="input-group mb-3">
  						<input type="text" name="de" id="de" class="form-control" placeholder="De" aria-label="Username" aria-describedby="basic-addon1">
					</div>
				</div>
				<div class="col-ms-12">
					<label>ASUNTO</label>
					<div class="input-group mb-3">
  						<input type="text" name="asunto" id="asunto" class="form-control" placeholder="Asunto" aria-label="Username" aria-describedby="basic-addon1">
					</div>
					
				</div>
				<div class="col-ms-12">
					<div class="input-group mb-3">
  						<input type="text" name="computadorPK" id="computadorPK" value="<?php foreach($result as $usuarios)echo $usuarios['cp']?>" class="form-control" placeholder="Computador" aria-label="Username" aria-describedby="basic-addon1"  readonly="readonly" >
					</div>
				</div>
				<div class="col-ms-12">
					<div class="input-group mb-3">
  						<input type="text" name="celularPK" id="celularPK" value="<?php foreach($result2 as $usuarios)echo $usuarios['cl']?>"" class="form-control" placeholder="Celular" aria-label="Username" aria-describedby="basic-addon1"  readonly="readonly">
					</div>
				</div>

				<div class="col-ms-12">
					<input type="submit" id="btnEnviarP" name="">
					<!--<a class="btn btn-primary fas fa-check-square fa-3x btn-responsive" 
					type="submit" id="btnEnviarP"></a>-->
				</div>
		</div>
		</dir>
			</form>
		</div>