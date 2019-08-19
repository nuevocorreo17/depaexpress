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
	        		html+=data.usuario.nombre;
	        		html+='</a></li>';

	        		html+= '<li class="nav-item">';
	        		html+= '<a class="nav-link" href="'+URL+'logout">';
	        		html+="Cerrar Sessión";
	        		html+='</a></li>';

	        		jQuery(".fila-registro-login").html(html);

	        	}else if(data.rpta == 2)
	        	{
	        		jQuery(".accesos-login .contenedor-mensaje").html(mnesajeerror("alerta-login","<p>"+data.mensaje+"</p>"));
	        	}else if(data.rpta == 3)
	        	{
	        		jQuery(".accesos-login .contenedor-mensaje").html(mnesajeerror("alerta-login",data.mensaje));
	        	}else{
	        		window.location.href = URL;
	        	}
	        }
	    });
	});

	jQuery("#frmregistro .boton").click(function(){

		jQuery.ajax({
	        url : URL+"registro",
    		dataType: 'json',
	        type: 'POST',
	        data : jQuery("#frmregistro").serialize(),
	        success: function(data) {
	        	console.log(data.rpta);

	        	if(data.rpta == 1)
	        	{
	        		window.location.href = URL+"perfil";
	        	}else if(data.rpta == 3)
	        	{
	        		jQuery(".accesos-registro .contenedor-mensaje").html(mnesajeerror("alerta-login",data.mensaje));
	        	}else{
	        		window.location.href = URL;
	        	}
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

	jQuery("#telefono,#nid").keypress(function(e) {
        var r = e.keyCode || e.which;
        return r > 45 && r < 65 || 8 == r
    });


	jQuery("#frmperfil").validate({
		errorClass: 'text-danger',
		rules: {
			nombre: {
				required: true,
				minlength: 5
			},
			email:{
				required: true,
				email: true,
			},
			telefono: {
				number: true,
				maxlength: 12
			},
		},
		messages: {
			firstname: "Please enter your firstname",
			lastname: "Please enter your lastname",
			username: {
				required: "Please enter a username",
				minlength: "Your username must consist of at least 2 characters"
			},
			password: {
				required: "Please provide a password",
				minlength: "Your password must be at least 5 characters long"
			},
			confirm_password: {
				required: "Please provide a password",
				minlength: "Your password must be at least 5 characters long",
				equalTo: "Please enter the same password as above"
			},
			email: "Please enter a valid email address",
			agree: "Please accept our policy",
			topic: "Please select at least 2 topics"
		}
	});
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