$(document).ready(function(e) {
	
	$("#btnEnviarP").click(function() {
		if( $("#para").val().length == 0 ) {
			alert("EDITA EL DESTINATARIO");
			document.frmDatos.para.focus();
		} else if( $("#cedula").val().length == 0 ) {
			alert("EDITA LA CEDULA");
			document.frmDatos.cedula.focus();
		} else if( $("#de").val().length == 0 ) {
			alert("EDITA QUIEN LA ENVIA");
			document.frmDatos.de.focus();
		} else if( $("#asunto").val().length == 0 ) {
			alert("EDITA EL ASUNTO");
			document.frmDatos.asunto.focus();
		} else {
		
			$.ajax({
			  url: "../procesos/actualizar.php",
			  type: 'post',
			  data: $("#frmDatos").serialize(),
			  dataType: 'json',
			  success: function(dataType) {
				if (dataType.res == "si") {
					alert(dataType.msj);
					$("#cargaDeDatos").load('../computador/lista.php');
					// window.location.href = "../computador/lista.php";
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