$(document).ready(function(e) {
	
	$("#btnEnviarU").click(function() {
		 if( $("#cedula2").val().length == 0 ) {
			alert("Debes ingresar una cedula");
			document.frmModal.cedula2.focus();
			return false;
		} else if( $("#nombres").val().length == 0 ) {
			alert("Debes ingresar nombres validos");
			document.frmModal.nombres.focus();
			return false;
		}else if( $("#apellidos").val().length == 0 ) {
			alert("Debes ingresar apellidos validos");
			document.frmModal.apellidos.focus();
			return false;
		}else {
			$.ajax({
			  url: "../ACTAS/COMPUTADOR/procesos/ingreso_usuario.php",
			  type: 'post',
			  data: $("#frmModal").serialize(),
			  dataType: 'json',
			  success: function(dataType) {
				if (dataType.res == "si") {
					alert(dataType.msj);
					 $('.modal-backdrop').remove();
					 $("#cargaDeDatos").load('../ACTAS/COMPUTADOR/computador/persona.php');
					 $('.btncerrar_nueva_acta_computador2').remove();
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
