$(document).ready(function(e) {
	
	$("#btnEnviarP").click(function() {
		
		/*if( $("#para").val().equals("Seleccionar") == true ) {
			alert("Debes ingresar quien recibe");
			 document.frmDatosP.para.focus();
			 return false;
		}*/
		
		 if( $("#de").val().length == 0 ) {
			alert("Debes ingresar quien envia la acta");
			document.frmDatosP.de.focus();
			if( $("#asunto").val().length == 0 ) {
			alert("Debes ingresar el asunto de la acta");
			document.frmDatosP.asunto.focus();
			return false;
		}return false;
		} else {
			$.ajax({
			  url: "../ACTAS/COMPUTADOR/procesos/insertarP.php",
			  type: 'post',
			  data: $("#frmDatosP").serialize(),
			  dataType: 'json',
			  success: function(dataType) {
				if (dataType.res == "si") {
					alert(dataType.msj);
					  $("#cargaDeDatos").load('../ACTAS/COMPUTADOR/computador/computador.php');
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
