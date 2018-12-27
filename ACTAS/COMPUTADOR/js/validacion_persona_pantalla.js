$(document).ready(function(e) {
	
	$("#btnEnviarP").click(function() {
		
		 if( $("#de").val().length == 0 ) {
			alert("Debes ingresar quien envia la acta");
			document.frmDatosP.de.focus();
			return false;
		}
		if( $("#asunto").val().length == 0 ) {
			alert("Debes ingresar el asunto de la acta");
			document.frmDatosP.asunto.focus();
			return false;
		} else {
			$.ajax({
			  url: "../ACTAS/COMPUTADOR/procesos/insertarP.php",
			  type: 'post',
			  data: $("#frmDatosP").serialize(),
			  dataType: 'json',
			  success: function(dataType) {
				if (dataType.res == "si") {
					alert(dataType.msj);
					  $("#cargaDeDatos").load('../ACTAS/COMPUTADOR/pantalla/pantalla.php');
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
