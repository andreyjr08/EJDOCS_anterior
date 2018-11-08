<?
/////// CONEXIÓN A LA BASE DE DATOS /////////
$host = 'localhost';
$basededatos = 'actas2.1';
$usuario = 'root';
$contraseña = '';

$conexion = new mysqli($host, $usuario,$contraseña, $basededatos);
if ($conexion -> connect_errno)
{
	die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion-> mysqli_connect_error());
}

//////////////// VALORES INICIALES ///////////////////////

$select="";
$query="SELECT * FROM usuarios ORDER BY NOMBRES DESC";

///////// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA ////////////
if(isset($_POST['usuarios']))
{
	$q=$conexion->real_escape_string($_POST['usuarios']);
	$query="SELECT * FROM usuarios WHERE 
		CEDULA LIKE '%".$q."%";
}

$buscarAlumnos=$conexion->query($query);
if ($buscarAlumnos->num_rows > 0)
{
	while($filaAlumnos= $buscarAlumnos->fetch_assoc())
	{
		$select.=
		'<option selected>Choose...</option>
			<option value="'.$filaAlumnos['CEDULA']'">'.$filaAlumnos['nombre']'</option>
		';							
	}
} else
	{
		$select="No se encontraron coincidencias con sus criterios de búsqueda.";
	}


echo $select;
?>
							