	
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
        $("#titulo").html("Nueva acta computador");
        $( "#contenido" ).load("./computador/computador.php");
    })

// adicionar nuevo elemento a nuestra base de datos
    $("#contenido").on("click","button#nuevo_computador",function(){
        $("#titulo").html("Nueva acta computador");
        $( "#contenido" ).load("./computador/computador.php");
    })


