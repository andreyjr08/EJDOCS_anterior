$(document).ready(function(e) {
	//alert("Debes ingresar la marca de un computador");
	$("#btnEnviar").click(function() {
		 if( $("#serial").val().length == 0 ) {
			alert("Debes ingresar el serial del computador");
			document.frmDatos.serial.focus();
		}else {
			$.ajax({
			  url: "../ACTAS/COMPUTADOR/procesos/insertar_pantalla.php",
			  type: 'post',
			  data: $("#frmDatos").serialize(),
			  dataType: 'json',
			  success: function(dataType) {
				if (dataType.res == "si") {
					alert(dataType.msj);
					  $("#cargaDeDatos").load('../ACTAS/COMPUTADOR/pantalla/lista_pantalla.php');
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
