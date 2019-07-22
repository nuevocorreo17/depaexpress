jQuery(document).ready(function(){

	jQuery("")

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

	jQuery(".acordion-busqueda h3").click(function(){
		jQuery(this).toggleClass("activo");
		jQuery(this).next(".conjunto-fila-acordion").toggleClass("activo");
	});

	jQuery(".abrir-busqueda").click(function(){
		jQuery(".columna-buscador").addClass("abierto");
	});

	jQuery(".cerrar-busqueda").click(function(){
		jQuery(".columna-buscador").removeClass("abierto");
	});	

	if(jQuery("#chartdiv").length > 0)
	{
		cargadocharts();
	}
});

jQuery(window).resize(function(){
	if(jQuery("#chartdiv").length > 0)
	{
		cargadocharts();
	}
});

function cargadocharts()
{
	google.charts.load("visualization", "1", {'packages':['corechart']});
	google.charts.setOnLoadCallback(function(){
    var data = new google.visualization.arrayToDataTable(lista);

    var options = {//'title':'How Much Pizza I Ate Last Night',
                   //'width':'100%',
                  // 'height':'100%'
                  series: {
					    0: {
					        // set options for the first data series
					        color: '#95d000'
					    },
					    1: {
					        // set options for the second data series
					        color: '#ff008b'
					    },
					}
               };

    var chart = new google.visualization.AreaChart(document.getElementById('chartdiv'));
    chart.draw(data, options);
  });
}