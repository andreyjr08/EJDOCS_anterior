<?php
use clases_pdo\funciones;
require '../clases/funciones.php';
$usuarios = new funciones();
$result = $usuarios ->usuarios();
$result2 = $usuarios ->departamentos();

session_start();

?>

<script type="text/javascript" language="javascript" src="../ACTAS/COMPUTADOR/js/validacion_persona_pantalla.js" ></script>
<script type="text/javascript" language="javascript" src="../ACTAS/COMPUTADOR/js/validacion_ingreso_usuario.js" ></script>
<div class="box-header">
   <div class="pull-right box-tools">
       <button class="btn btn-danger btn-sm btncerrar_nueva_acta_computador2" data-toggle="tooltip" title="Cerrar nueva acta"><i class="fas fa-times"></i></button>
   </div>
</div>
<form id="frmDatosP" name="frmDatosP" method="post" action="../ACTAS/COMPUTADOR/procesos_pantalla/insertarP.php">
	<div class="col-ms-12" id="cargaDeDatos">
		<div class="jumbotron">
			<div class="row">
				<div class="col-lg-12">
					<label>#CEDULA</label>
					<div class="input-group mb-3">
  						<input type="number" name="cedulaP" id="cedula" class="form-control" placeholder="Cedula" aria-label="Username" aria-describedby="basic-addon1">
					</div>
				</div>
				
				<div class="col-lg-11">
					<label>PARA</label>
						<div class="input-group mb-3">
						  <select class="form-control dimension" id="inputGroupSelect01" name="para" id="para">
						  	<option selected>Seleccionar</option>
						  	<?php foreach($result as $usuarios){ ?>
                    			<option value="<?php echo $usuarios['CEDULA']; ?>"><?php echo $usuarios['NOMBRES']." ".$usuarios['APELLIDOS']; ?></option> 
    						<?php } ?>
						  </select>
						</div>
				</div>
				<!--<div class="col-lg-1 h my-auto btn btn-primary modal">
					
				</div>-->
				
				<!---------BOTON DE MODAL-->
<button type="button" class="btn btn-primary col-lg-1 h my-auto" data-toggle="modal" data-target="#myModal">
  <i class="fas fa-user-plus fa-1x"></i>
</button>
				<div class="col-lg-12">
					<label>DE</label>
					<div class="input-group mb-2">
  						<input type="text" name="deP" id="deP" value="<?php  if(isset($_SESSION['departamento'])) echo $_SESSION['departamento'];?>" class="form-control" placeholder="De" aria-label="Username" aria-describedby="basic-addon1">
					</div>
				</div>
				<div class="col-lg-12">
					<label>ASUNTO</label>
					<div class="input-group mb-3">
  						<input type="text" name="asuntoP" id="asuntoP" class="form-control" placeholder="Asunto" aria-label="Username" aria-describedby="basic-addon1">
					</div>
					
				</div>
				<input type="text" id="creador" name="creador"  value="<?php  if(isset($_SESSION['id'])) echo $_SESSION['id'];?>"  style="visibility:hidden">

				<div class="col-lg-12">
					<input  type="submit" id="btnEnviarP" name="">
					<!--<a class="btn btn-primary fas fa-check-square fa-3x btn-responsive" 
					type="submit" id="btnEnviarP"></a>-->
				</div>
		</div>
		</div>
		</dir>
	</form>
<form id="frmModal" name="frmModal" method="post" action="../ACTAS/COMPUTADOR/procesos/ingreso_usuario.php">
	<!---------INICIO DE MODAL -->
<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Crear Nuevo Usuario</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <div class="col-lg-12">
			<label>#CEDULA</label>
				<div class="input-group mb-3">
  					<input type="number" name="cedula2" id="cedula2" class="form-control" placeholder="Cedula" aria-label="Username" aria-describedby="basic-addon1">
				</div>
		</div>
      </div>
      <div class="modal-body">
        <div class="col-lg-12">
			<label>NOMBRES</label>
				<div class="input-group mb-3">
  					<input type="text" name="nombres" id="nombresP" class="form-control" placeholder="nombres" aria-label="Username" aria-describedby="basic-addon1">
				</div>
		</div>
      </div>
      <div class="modal-body">
        <div class="col-lg-12">
			<label>APELLIDOS</label>
				<div class="input-group mb-3">
  					<input type="text" name="apellidos" id="apellidosP" class="form-control" placeholder="Apellidos" aria-label="Username" aria-describedby="basic-addon1">
				</div>
		</div>
      </div>
      <div class="modal-body">
		<div class="col-lg-12">
					<label>DEPARTAMENTO</label>
						<div class="input-group mb-3">
						  <select class="form-control dimension" id="inputGroupSelect01" name="departamento" id="para">
						  	<option selected>Seleccionar</option>
						  	<?php foreach($result2 as $departamento){ ?>
                    			<option value="<?php echo $departamento['ID']; ?>"><?php echo $departamento['NOMBRE']; ?></option> 
    						<?php } ?>
						  </select>
						</div>
				</div>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <input type="submit" id="btnEnviarU" value="Crear">
      </div>

    </div>
  </div>
</div> 	
			<!-----------FIN DE MODAL-->
</form>
		</div>