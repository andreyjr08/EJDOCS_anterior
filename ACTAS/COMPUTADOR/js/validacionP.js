$(document).ready(function(e) {
	
	$("#btnEnviarP").click(function() {
		
		if( $("#para").val().length == 0 ) {
			alert("Debes ingresar quien recibe");
			 document.frmDatosP.para.focus();
		} else if( $("#cedula").val().length == 0 ) {
			alert("Debes ingresar un documento");
			document.frmDatosP.cedula.focus();

		} else if( $("#de").val().length == 0 ) {
			alert("Debes ingresar quien envia la acta");
			document.frmDatosP.de.focus();

		} else if( $("#asunto").val().length == 0 ) {
			alert("Debes ingresar el asunto de la acta");
			document.frmDatosP.asunto.focus();
			
		}else {
			$.ajax({
			  url: "procesos/insertarP.php",
			  type: 'post',
			  data: $("#frmDatosP").serialize(),
			  dataType: 'json',
			  success: function(dataType) {
				if (dataType.res == "si") {
					alert(dataType.msj);
					  $("#cargaDeDatos").load('computador/lista.php');
				} else {
					alert(dataType.msj);
				}
			  },
			  error: function() {
				alert( "Registro no guardadooooo" );
			  }
			});
		}
		return false;
	});
});
