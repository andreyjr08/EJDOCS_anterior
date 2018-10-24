$(document).ready(function(e) {
	
	$("#btnEnviar").click(function() {
		
		if( $("#computador").val().length == 0 ) {
			alert("Debes ingresar la marca de un computador");
			 document.frmDatos.computador.focus();
		} else if( $("#activo_fijo").val().length == 0 ) {
			alert("Debes ingresar un activo fijo");
			document.frmDatos.activo_fijo.focus();
		} else if( $("#serial").val().length == 0 ) {
			alert("Debes ingresar el serial del computador");
			document.frmDatos.serial.focus();
		} else if( $("#procesador").val().length == 0 ) {
			alert("Debes ingresar el tipo de procesador");
			document.frmDatos.procesador.focus();
		} else if( $("#memoria_ram").val().length == 0 ) {
			alert("Debes ingresar la cantidad de memoria ram");
			document.frmDatos.memoria_ram.focus();
		} else if( $("#serial_cargador").val().length == 0 ) {
			alert("Debes ingresar el serial del cargador");
			document.frmDatos.serial_cargador.focus();
		}else {
		
			$.ajax({
			  url: "procesos/insertarC.php",
			  type: 'post',
			  data: $("#frmDatos").serialize(),
			  dataType: 'json',
			  success: function(dataType) {
				if (dataType.res == "si") {
					alert(dataType.msj);
					  $("#cargaDeDatos").load('computador/persona.php');
				} else {
					alert(dataType.msj);
				}
			  },
			  error: function() {
				alert( "Registro no guardado" );
			  }
			});
		}
		return false;
	});
});
