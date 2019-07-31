jQuery(document).ready(function(){
	jQuery("#frmlogin .boton").click(function(){

		jQuery.ajax({
	        url : URL+"login",
    		dataType: 'json',
	        type: 'POST',
	        data : jQuery("#frmlogin").serialize(),
	        success: function(data) {
	        	console.log(data.rpta);

	        	if(data.rpta == 1)
	        	{
	        		cerraraccesos();
	        		jQuery(".fila-registro-login").html("");
	        		var html = '<li class="nav-item">';
	        		html+= '<a class="nav-link" href="'+URL+'perfil">';
	        		html+=data.usuario.nombre+' '+data.usuario.ape_pat;
	        		html+='</a></li>';
	        		jQuery(".fila-registro-login").html(html);

	        	}else if(data.rpta == 2)
	        	{
	        		jQuery(".contenedor-mensaje").html(mnesajeerror("alerta-login","<p>"+data.mensaje+"</p>"));
	        	}else if(data.rpta == 3)
	        	{
	        		jQuery(".contenedor-mensaje").html(mnesajeerror("alerta-login",data.mensaje));
	        	}else{
	        		window.location.href = URL;
	        	}
	        	/*
	            if (resp.status == "success")
	                window.location.href = resp.redirect_url;
	            else
	                $('#error-msg').html('<div class="alert alert-danger">' + resp.message + '</div>');*/
	        }
	    });
	});

	jQuery(".accesos-cerrar").click(function(e){
		e.preventDefault();
		cerraraccesos();	
	});

	jQuery(".btn-registro").click(function(e){
		e.preventDefault();
		abriraccesos();	
		jQuery(".container.accesos.accesos-registro").fadeIn("slow");		
	});

	jQuery(".btn-login").click(function(e){
		e.preventDefault();
		abriraccesos();
		jQuery(".container.accesos.accesos-login").fadeIn("slow");				
	});	

	jQuery(".btn-olvidar-pass").click(function(e){
		e.preventDefault();
		abriraccesos();
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

jQuery(document).on("click","#alerta-login .close",function(){
    jQuery("#alerta-login").alert('close');
});

function mnesajeerror(id,mensaje)
{
	var html = '<div id="'+id+'" class="alert alert-danger alert-dismissible fade show" role="alert">';
	html += '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
	html += '<span aria-hidden="true">&times;</span>';
	html += '</button>';
	html += '<div class="mensaje-login">'+mensaje+'</div>';
	html += '</div>';

	return html;
}

function cerraraccesos()
{
	jQuery(".trama").fadeOut("slow");
	jQuery(".container.accesos").fadeOut("slow");	
}

function abriraccesos()
{
	jQuery(".trama").fadeIn("slow");
	jQuery(".container.accesos").fadeOut("slow");	
}

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