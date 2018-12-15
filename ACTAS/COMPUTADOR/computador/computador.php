<?php
use clases_pdo\funciones;
require '../clases/funciones.php';
$computador = new funciones();
$result = $computador ->marcas_pc();
$result2 = $computador ->select_acta();

session_start();

?>
<script type="text/javascript" language="javascript" src="../ACTAS/COMPUTADOR/js/validacion.js" ></script>
<div class="panel-body">
<form class="form-horizontal" id="frmDatos" name="frmDatos" method="post" action="../ACTAS/COMPUTADOR/procesos/insertarC.php">
	<div id="cargaDeDatos">
		<div class="jumbotron">
			<div class="col-ms-12">
					<label>NUMERO</label>
					<div class="input-group mb-3">
  						<input type="text" name="acta" id="acta" class="form-control" aria-label="Username" aria-describedby="basic-addon1" value="<?php foreach($result2 as $acta){echo $acta['acta'];}?>">
					</div>
			</div>
			<div class="col-lg-12">
					<label>COMPUTADOR</label>
						<div class="input-group mb-3">
						  <select class="form-control dimension" id="inputGroupSelect01" name="computador" id="computador">
						  	<option selected>Seleccionar</option>
						  	<?php foreach($result as $computador){ ?>
                    			<option value="<?php echo $computador['ID']; ?>"><?php echo $computador['MARCA']; ?></option> 
    						<?php } ?>
						  </select>
						</div>
				</div>
		
				<div class="col-ms-12">
					<label>ACTIVO FIJO</label>
					<div class="input-group mb-3">
  						<input type="text" name="activo_fijo" id="activo_fijo" class="form-control" placeholder="Activo Fijo" aria-label="Username" aria-describedby="basic-addon1">
					</div>
				</div>
			
			
				<div class="col-ms-12">
					<label>SERIAL</label>
					<div class="input-group mb-3">
  						<input type="text" name="serial" id="serial" class="form-control" placeholder="Serial" aria-label="Username" aria-describedby="basic-addon1">
					</div>
				</div>
			
			
				<div class="col-ms-12">
					<label>PROCESADOR</label>
					<div class="input-group mb-3">
  						<input type="text" name="procesador" id="procesador" class="form-control" placeholder="Procesador" aria-label="Username" aria-describedby="basic-addon1">
					</div>
				</div>
			
			
				<div class="col-ms-12">
					<label>MEMORIA RAM</label>
					<div class="input-group mb-3">
  						<input type="text" name="memoria_ram" id="memoria_ram" class="form-control" placeholder="Memoria Ram" aria-label="Username" aria-describedby="basic-addon1">
					</div>
				</div>
				<div class="col-ms-12">
					<label>SERIAL CARGADOR</label>
					<div class="input-group mb-3">
  						<input type="text" name="serial_cargador" id="serial_cargador" class="form-control" placeholder="Serial Cargador" aria-label="Username" aria-describedby="basic-addon1">
					</div>
				</div>
			
				<!--<div class="col-ms-12">
					<a href="../ACTAS/COMPUTADOR/procesos/prueba.php" class="btn btn-primary fas fa-angle-double-right fa-2x" type="submit" id="btnEnviar" value="SIGUIENTE"></a>
				</div>-->
				<div class="col-lg-12">
					<input  type="submit" id="btnEnviar" name="">
					<!--<a class="btn btn-primary fas fa-check-square fa-3x btn-responsive" 
					type="submit" id="btnEnviarP"></a>-->
				</div>		
		</div>		
		
	</div>
	
</form>
</div>