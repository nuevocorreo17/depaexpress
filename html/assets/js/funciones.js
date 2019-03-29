jQuery(document).ready(function(){

	jQuery(".accesos-cerrar").click(function(e){
		e.preventDefault();
		jQuery(".trama").fadeOut("slow");
		jQuery(".container.accesos").fadeOut("slow");		
	});

	jQuery(".btn-registro").click(function(e){
		e.preventDefault();
		jQuery(".trama").fadeIn("slow");
		jQuery(".container.accesos").fadeOut("slow");			
		jQuery(".container.accesos.accesos-registro").fadeIn("slow");		
	});

	jQuery(".btn-login").click(function(e){
		e.preventDefault();
		jQuery(".trama").fadeIn("slow");
		jQuery(".container.accesos").fadeOut("slow");	
		jQuery(".container.accesos.accesos-login").fadeIn("slow");				
	});	

	jQuery(".btn-olvidar-pass").click(function(e){
		e.preventDefault();
		jQuery(".trama").fadeIn("slow");
		jQuery(".container.accesos").fadeOut("slow");	
		jQuery(".container.accesos.accesos-recuperar").fadeIn("slow");				
	});	

});