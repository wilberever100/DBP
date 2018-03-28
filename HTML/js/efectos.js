var jugadores = jugadores || {};

/* Aplicar el efecto de Hover (cuando el mouse pasa por encima) */
jugadores.aplicarHover = function(elemento){
	elemento.hover(function () {
		var width = ($(this).width())*1.25;
		var height = ($(this).height())*1.25;
		
		$(this).width(width);
		$(this).height(height)
		
	},
	function () {
		var width = ($(this).width())*0.8;
		var height = ($(this).height())*0.8;
		
		$(this).width(width);
		$(this).height(height)
	}
	);
}
jugadores.fades = function(elemento){
	
	$(".btn1").click(function(){
        $(elemento).fadeOut();
    });
    $(".btn2").click(function(){
        $(elemento).fadeIn();
    });
	
}


/* Enlaza los elementos a sus respectivos efectos*/
jugadores.init = function() {
	
	jugadores.aplicarHover($("#cabecera img"));
	jugadores.fades($("#cabecera img"));
	/*TODO: aplicar el efecto Hover a los superamigos*/
	

   /*TODO: Colocar los siguientes efectos de click fuera del init, usando namespace */ 	
	
	$( "button[name='invitacion']" ).click(function () {
		alert("Solicitación enviada");
	});
	
	$( "button[name='enviarPalabras']" ).click(function () {
		var texto = $( "textarea[name='palabras']" ).val();
		alert("Enviando: "+texto);
	});
	
    
}


/* Cuando el documento carga, se llama la función init*/
$( document ).ready(function() {
	jugadores.init();
});