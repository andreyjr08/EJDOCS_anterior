<!DOCTYPE html>
<html>
<head>
	<title>INGRESAR</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="ACTAS/CSS/log.css">
</head>
<body>
<form action="LOG/PROCESOS/ingresar.php" method="post">
	<div class="container">
		<div class="col-sm-6 mx-auto">
		<div class="formulario">
			<div class="col-sm-12 ">
				<label>USUARIO</label>
				<div class="input-group mb-3">
  					<input type="text" name="usuario" class="form-control" placeholder="Usuario" aria-label="Username" aria-describedby="basic-addon1">
				</div>
			</div>
			<div class="col-sm-12 ">
				<label>CONTRASEÑA</label>
				<div class="input-group mb-3">
  					<input type="password" name="contra" class="form-control" placeholder="Contraseña" aria-label="Username" aria-describedby="basic-addon1">
				</div>
				<input class="btn btn-primary col-sm-12 py-3" type="submit" >
			</div>
		</div>
		</div>
	</div>
</form>
</body>
</html>