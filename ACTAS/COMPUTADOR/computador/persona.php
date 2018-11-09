<?php
use clases_pdo\funciones;
use clases_pdo\funcionLog;
require '../clases/funciones.php';
require '../../../LOG/funcion_log.php';
$usuarios = new funciones();
$result = $usuarios ->usuarios();
$departamento = new funcionLog();
$resultDepart = $departamento ->log();
?>

<script type="text/javascript" language="javascript" src="js/validacionP.js" ></script>
<div class="box-header">
</div>
<form id="frmDatosP" name="frmDatosP" method="post" action="procesos/insertarP.php">
	<dir class="col-ms-12" id="cargaDeDatos">
		<div class="jumbotron">
			<div class="row">
				<div class="col-lg-12">
					<label>#CEDULA</label>
					<div class="input-group mb-3">
  						<input type="number" name="cedula" id="cedula" class="form-control" placeholder="Cedula" aria-label="Username" aria-describedby="basic-addon1">
					</div>
				</div>
				
				<div class="col-lg-11">
					<label>PARA</label>
						<div class="input-group mb-3">
						  <select class="form-control dimension" id="inputGroupSelect01">
						  	<option selected>Choose...</option>
							<option value="<?php foreach($result as $usuarios)echo $usuarios['CEDULA']?>"><?php foreach($result as $usuarios)echo $usuarios['NOMBRES']." ".$usuarios['APELLIDOS']?></option>
						  </select>
						</div>
				</div>
				<div class="col-lg-1 h my-auto btn btn-primary">
					<i class="fas fa-user-plus fa-1x"></i>
				</div>
				<div class="col-lg-12">
					<label>DE</label>
					<div class="input-group mb-2">
  						<input type="text" name="de" id="de" class="form-control" placeholder="De" aria-label="Username" aria-describedby="basic-addon1">
					</div>
				</div>
				<div class="col-lg-12">
					<label>ASUNTO</label>
					<div class="input-group mb-3">
  						<input type="text" name="asunto" id="asunto" class="form-control" placeholder="Asunto" aria-label="Username" aria-describedby="basic-addon1">
					</div>
					
				</div>
				<!--<div class="col-ms-12">
					<div class="input-group mb-3">
  						<input type="text" name="computadorPK" id="computadorPK" value="<?php foreach($result as $usuarios)echo $usuarios['cp']?>" class="form-control" placeholder="Computador" aria-label="Username" aria-describedby="basic-addon1"  readonly="readonly" >
					</div>
				</div>
				<div class="col-ms-12">
					<div class="input-group mb-3">
  						<input type="text" name="celularPK" id="celularPK" value="<?php foreach($result2 as $usuarios)echo $usuarios['cl']?>"" class="form-control" placeholder="Celular" aria-label="Username" aria-describedby="basic-addon1"  readonly="readonly">
					</div>
				</div>-->

				<div class="col-lg-12">
					<input type="submit" id="btnEnviarP" name="">
					<!--<a class="btn btn-primary fas fa-check-square fa-3x btn-responsive" 
					type="submit" id="btnEnviarP"></a>-->
				</div>
		</div>
		</div>
		</dir>
			</form>
		</div>