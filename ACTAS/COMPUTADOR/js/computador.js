	
    $("#opciones a").click(function(e){
        document.getElementById('oculto').style.display = 'block';
     	e.preventDefault();
        url = $(this).attr("href");
        $.post( url, function(data) {
        		if(url!="#")
        			$("#contenedor").removeClass("hide");
        			$("#contenedor").addClass("show");
        			$("#titulo").html("Panel Principal");
                	$("#contenido" ).html(data);
        });
     });
// cierra y nos envia a la pagina principal INDEX.HTML
    $("#contenido").on("click","button.btncerrar_nueva_acta_computador2",function(){
        $("#titulo").html("Listado de actas");
        $( "#contenido" ).load("../ACTAS/COMPUTADOR/computador/lista.php");
    })
    // redirecciona a la pagina principal
    $("#contenido").on("click","button.btn_inicio",function(){
        $("#titulo").html("Nueva acta computador");
        $( "#none" ).style.display='block';
        //location.href= "index.php";
    })

// adicionar nuevo elemento a nuestra base de datos
    $("#contenido").on("click","button#nuevo_computador",function(){
        $("#titulo").html("Nueva acta computador");
        $( "#contenido" ).load("../ACTAS/COMPUTADOR/computador/persona.php");
    })
      $("#contenido").on("click","button#nueva_pantalla",function(){
        $("#titulo").html("Nueva acta pantalla");
        $( "#contenido" ).load("../ACTAS/COMPUTADOR/pantalla/persona.php");
    })


