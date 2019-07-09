<?php
	include('header.php');
?>
<script>
	var lista = [
    ['Year', 'Sales', 'Expenses'],
    ['2013',  1000,      400],
    ['2014',  1170,      460],
    ['2015',  660,       1120],
    ['2016',  1030,      540]
  ];
</script>
<section class="seccion seccion-sinbanner activos-estadistica">
	<div class="container container-fondo-blanco">
		<div class="row">
			<div class="col-12">
				<div class="row">
					<div class="col-12 col-lg-6 offset-lg-3">
						<div class="contenedor-agente sin-fondo">
							<div class="fila-imagen-agente">
								<img src="assets/img/cara.jpg">
							</div>
							<h4>Cecilia Salas Marin</h4>
							<div class="bloque-link">
								<a href="#" >Editar cuenta</a>
							</div>
							<div class="bloque-botones">
								<a href="#" class="boton boton-azul boton-azul-activo"><i class="fas fa-edit"></i>MIS AVISOS ACTIVOS</a>
								<a href="#" class="boton boton-azul"><i class="fas fa-edit"></i>MIS AVISOS INACTIVOS</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12 offset-0 col-sm-6 offset-sm-3  col-xl-4  offset-xl-4">
						<div class="contenedor-proyecto">
							<div class="contenedor-proyecto-cabecera">
								<h4>ESPACIO DEL TÍTULO</h4>
							</div>
							<div class="contenedor-proyecto-cuerpo">
								<img src="assets/img/foto-inmueble.jpg" class="imagen-proyecto-cuerpo">
							</div>
							<div class="contenedor-proyecto-pie">
								<div class="row">
									<div class="col-7 col-xl-7 contenedor-proyecto-pie-izquierdo">
										<h4 class="distrito"><i class="fas fa-map-marker-alt"></i> DISTRITO</h4>
										<ul class="caracteristica">
											<li><i class="fas fa-bed"></i><span class="dato">0</span></li>
											<li><i class="fas fa-shower"></i><span class="dato">0</span></li>
											<li><i class="fas fa-warehouse"></i><span class="dato">0</span></li>
										</ul>
									</div>
									<div class="col-5 col-xl-5 contenedor-proyecto-pie-derecha text-right">
										<p class="metros">000.00 m2</p>
										<h4 class="precio">US$000</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row fila-grafico">
					<div class="col-12 col-xl-6 offset-xl-3">
						<h4>Cecilia Salas Marin</h4>
					</div>
					<div class="col-12 col-lg-12 bloque-contenedor-chartdiv">
						<div id="chartdiv"></div>
					</div>
				</div>				
			</div>
		</div>
	</div>
</section>
<?php
	include('footer.php');
?>