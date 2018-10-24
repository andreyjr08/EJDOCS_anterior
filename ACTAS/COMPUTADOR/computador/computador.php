
<script type="text/javascript" language="javascript" src="js/validacion.js" ></script>
<div class="panel-body">
	
<div class="box-header">
   <div class="pull-right box-tools">
       <button class="btn btn-danger btn-sm btncerrar_nueva_acta_computador2" data-toggle="tooltip" title="Cerrar nueva acta"><i class="fas fa-times"></i></button>
   </div>
</div>

<form class="form-horizontal" id="frmDatos" name="frmDatos" method="post" action="procesos/insertarC.php">
	<div id="cargaDeDatos">

		<div class="col-ms-12">
			<div class="p-3 C bg-primary2 text-white text-center col-ms-12">
				<span class="fas fa-desktop fa-3x"></span>
			</div>
		
		<div class="jumbotron">
				<div class="col-ms-12">
					<label>COMPUTADOR</label>
					<div class="input-group mb-3">
  						<input type="text" name="computador" id="computador" class="form-control" placeholder="Computador" aria-label="Username" aria-describedby="basic-addon1">
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
			
		
				<div class="col-ms-12">
					<a href="#" class="btn btn-primary fas fa-angle-double-right fa-2x" type="submit" id="btnEnviar" value="SIGUIENTE"></a>
				</div>		
		</div>		
		
		</div>
	</div>
	
</form>
</div>
