$(obtener_registros());

function obtener_registros(alumnos)
{
	$.ajax({
		url : '../PHP/consulta.php',
		type : 'POST',
		dataType : 'html',
		data : { alumnos: alumnos },
		})

	.done(function(resultado){
		$("#select_resultado").html(resultado);
	})
}

$(document).on('keyup', '#cedula', function()
{
	var valorBusqueda=$(this).val();
	if (valorBusqueda!="")
	{
		obtener_registros(valorBusqueda);
	}
	else
		{
			obtener_registros();
		}
});
