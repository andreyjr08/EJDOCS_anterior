$(document).ready(function(e) {
	//alert("Debes ingresar la marca de un computador");
	$("#btnEnviar").click(function() {
		alert("Debes ingresar la marca de un computador");
		/*if( $("#computador").val().length == 0 ) {
			alert("Debes ingresar la marca de un computador");
			 document.frmDatos.computador.focus();
			 return false;
		}*/

		 if( $("#activo_fijo").val().length == 0 ) {
			alert("Debes ingresar un activo fijo");
			document.frmDatos.activo_fijo.focus();
		return false;
		}  if( $("#serial").val().length == 0 ) {
			alert("Debes ingresar el serial del computador");
			document.frmDatos.serial.focus();
			return false;
		}  if( $("#procesador").val().length == 0 ) {
			alert("Debes ingresar el tipo de procesador");
			document.frmDatos.procesador.focus();
			return false;
		}  if( $("#memoria_ram").val().length == 0 ) {
			alert("Debes ingresar la cantidad de memoria ram");
			document.frmDatos.memoria_ram.focus();
			return false;
		}  if( $("#serial_cargador").val().length == 0 ) {
			alert("Debes ingresar el serial del cargador");
			document.frmDatos.serial_cargador.focus();
			return false;
		}else {
			$.ajax({
			  url: "../ACTAS/COMPUTADOR/procesos/insertarC.php",
			  type: 'post',
			  data: $("#frmDatos").serialize(),
			  dataType: 'json',
			  success: function(dataType) {
				if (dataType.res == "si") {
					alert(dataType.msj);
					  $("#cargaDeDatos").load('../ACTAS/COMPUTADOR/computador/lista.php');
				} else {
					alert(dataType.msj);
				}
			  },
			  error: function() {
				alert( "Los datos ingresados son incorrectos" );
			  }
			});
		}
		return false;
	});
});
