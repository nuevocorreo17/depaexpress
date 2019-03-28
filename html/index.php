<?php
	include('header.php');
?>
	<section class="seccion banner-home">
		<div id="baner-home" class="carousel slide" data-ride="carousel">

		  <!-- Indicators -->
		   <ol class="carousel-indicators">
		    <li data-target="#baner-home" data-slide-to="0" class="active"></li>
		    <li data-target="#baner-home" data-slide-to="1"></li>
		    <li data-target="#baner-home" data-slide-to="2"></li>
		  </ol>

		  <!-- The slideshow -->
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      	<picture>
					<source media="(max-width: 767px)" srcset="assets/img/banner1-mobile.jpg">
					<img src="assets/img/banner1.jpg" alt="banner" class="home-imagen-banner" >
				</picture>
		    </div>
		    <div class="carousel-item">
		      	<picture>
					<source media="(max-width: 767px)" srcset="assets/img/banner1-mobile.jpg">
					<img src="assets/img/banner1.jpg" alt="banner" class="home-imagen-banner" >
				</picture>
		    </div>
		    <div class="carousel-item">
		      		<picture>
					<source media="(max-width: 767px)" srcset="assets/img/banner1-mobile.jpg">
					<img src="assets/img/banner1.jpg" alt="banner" class="home-imagen-banner" >
				</picture>
		    </div>
		  </div>

		  <!-- Left and right controls -->
		<!--  <a class="carousel-control-prev" href="#demo" data-slide="prev">
		    <span class="carousel-control-prev-icon"></span>
		  </a>
		  <a class="carousel-control-next" href="#demo" data-slide="next">
		    <span class="carousel-control-next-icon"></span>
		  </a> -->

		</div>

		<div class="container contenedor-formulario">
			<div class="row">
				<div class="col-12">
					<h1>Estas a unos pasos de encontrar tu hogar soñado</h1>
				</div>
			</div>
			<form id="frmbusqueda" method="POST" action="/">			
				<div class="row">
					<div class="col-12 col-lg-3 col-xl-3 columna">
						<select name="propiedad" class="form-control">
							<option value="">Tipo de propiedad</option>
							<option value="1">Departamento</option>
							<option value="2">Casa</option>
						</select>
					</div>
					<div class="col-12 col-lg-3 col-xl-3 columna">
						<select name="oferta" class="form-control">
							<option value="">Tipo de oferta</option>
							<option value="1">Alquiler</option>
							<option value="2">Venta</option>
							<option value="3">Alquiler - Venta</option>
						</select>						
					</div>
					<div class="col-12 col-lg-3 col-xl-3 columna">
						<select name="distrito" class="form-control">
							<option value="">Seleccione su distrito</option>
							<option value="1">Ancón</option>
							<option value="2">Carabayllo</option>
						</select>						
					</div>
					<div class="col-12 col-lg-3 col-xl-3 columna">
						<a href="#" class="boton">BÚSQUEDA AVANZADA</a>
					</div>
				</div>
			</form>
		</div>
	</section>
	<section class="seccion masvistos">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<h2 class="titulo-azul">LO MÁS VISTO</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-12  col-sm-6  col-xl-4">
					<h3 class="masvistos-subtitulo">VENTAS</h3>
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
				<div class="col-12  col-sm-6  col-xl-4">
					<h3 class="masvistos-subtitulo">ALQUILER</h3>
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
				<div class="col-12  col-sm-6  col-xl-4">
					<h3 class="masvistos-subtitulo">PROYECTOS</h3>
					<div class="contenedor-proyecto">
						<div class="contenedor-proyecto-cabecera">
							<h4>ESPACIO DEL TÍTULO</h4>
						</div>
						<div class="contenedor-proyecto-cuerpo">
							<img src="assets/img/foto-inmueble.jpg" class="imagen-proyecto-cuerpo">
						</div>
						<div class="contenedor-proyecto-pie">
							<div class="row">
								<div class="col-7 col-xl-6 contenedor-proyecto-pie-izquierdo">
									<h4 class="distrito"><i class="fas fa-map-marker-alt"></i> DISTRITO</h4>
									<ul class="caracteristica">
										<li><i class="fas fa-bed"></i><span class="dato"> 0 a 0 Dorm.</span></li>
										<li><i class="fas fa-shower"></i><span class="dato">0 a 0</span></li>
									</ul>
								</div>
								<div class="col-5 col-xl-6 contenedor-proyecto-pie-derecha text-right">
									<p class="metros">00.00 - 00.00 m2</p>
									<h4 class="precio">Desde S/ 000,000</h4>
								</div>
							</div>
						</div>
					</div>	
					<div class="contenedor-proyecto">
						<div class="contenedor-proyecto-cabecera">
							<h4>ESPACIO DEL TÍTULO</h4>
						</div>
						<div class="contenedor-proyecto-cuerpo">
							<img src="assets/img/foto-inmueble.jpg" class="imagen-proyecto-cuerpo">
						</div>
						<div class="contenedor-proyecto-pie">
							<div class="row">
								<div class="col-7 col-xl-6 contenedor-proyecto-pie-izquierdo">
									<h4 class="distrito"><i class="fas fa-map-marker-alt"></i> DISTRITO</h4>
									<ul class="caracteristica">
										<li><i class="fas fa-bed"></i><span class="dato"> 0 a 0 Dorm.</span></li>
										<li><i class="fas fa-shower"></i><span class="dato">0 a 0</span></li>
									</ul>
								</div>
								<div class="col-5 col-xl-6 contenedor-proyecto-pie-derecha text-right">
									<p class="metros">00.00 - 00.00 m2</p>
									<h4 class="precio">Desde S/ 000,000</h4>
								</div>
							</div>
						</div>
					</div>	
					<div class="contenedor-proyecto">
						<div class="contenedor-proyecto-cabecera">
							<h4>ESPACIO DEL TÍTULO</h4>
						</div>
						<div class="contenedor-proyecto-cuerpo">
							<img src="assets/img/foto-inmueble.jpg" class="imagen-proyecto-cuerpo">
						</div>
						<div class="contenedor-proyecto-pie">
							<div class="row">
								<div class="col-7 col-xl-6 contenedor-proyecto-pie-izquierdo">
									<h4 class="distrito"><i class="fas fa-map-marker-alt"></i> DISTRITO</h4>
									<ul class="caracteristica">
										<li><i class="fas fa-bed"></i><span class="dato"> 0 a 0 Dorm.</span></li>
										<li><i class="fas fa-shower"></i><span class="dato">0 a 0</span></li>
									</ul>
								</div>
								<div class="col-5 col-xl-6 contenedor-proyecto-pie-derecha text-right">
									<p class="metros">00.00 - 00.00 m2</p>
									<h4 class="precio">Desde S/ 000,000</h4>
								</div>
							</div>
						</div>
					</div>											
				</div>
			</div>
		</div>
	</section>		
	<section class="asesoria">
		<div class="container">
			<div class="row">
				<div class="col-12 col-xl-8 offset-xl-2">
					<div class="row">
						<div class="col-12  col-sm-5  col-xl-5 sin-padding-izquierda d-none d-sm-none d-md-block">
							<img src="assets/img/asesora.png" class="img-fluid">
						</div>
						<div class="col-12  col-sm-7  col-xl-7 columna-asesoria">
							<h3>ASESORÍA</h3>
							<h2>SU AGENTE PERSONA 24/7</h2>
							<p>¿BUSCAS HIPOTECA? CONSULTA A UN ASESOR HIPOTECARIO AQUÍ</p>
							<a href="agentes.php" class="boton">WHATSAPP DE AGENTES</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="seccion ultimosproyectos">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="titulo-letra-azul">ÚLTIMOS PROYECTOS</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-sm-6 col-xl-6">
					<div class="bloque-ultimos-proyectos">
						<div class="col-12 col-xl-4 columna-foto-ultimos">
							<img src="assets/img/proyecto1.png" class="barra-imagen">
						</div>
						<div class="col-12 col-xl-8 columna-cuerpo-ultimos">
							<h4>PROYECTO</h4>
							<h2>SOLAR DE LA ALAMEDA</h2>
							<div class="bloque-texto-ultimos">
								<p>ALTOZANO TRAE PARA TI Y TU FAMILIA UN PROYECTO INNOVADOR: SOLAR DE LA ALAMEDA. ESTE NUEVO PROYECTO CONTARÁ CON DEPARTAMENTOS 3S: SOFISTICADO, SEGURO Y SANO. </p>
							</div>
							<ul class="logos-ultimos">
								<li><img src="assets/img/inmobiliaria1.png"></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-xl-6">
					<div class="bloque-ultimos-proyectos">
						<div class="col-12 col-xl-4 columna-foto-ultimos">
							<img src="assets/img/proyecto1.png" class="barra-imagen">
						</div>
						<div class="col-12 col-xl-8 columna-cuerpo-ultimos">
							<h4>PROYECTO</h4>
							<h2>RESIDENCIAL EL PRADO</h2>
							<div class="bloque-texto-ultimos">
								<p>RESIDENCIAL EL PRADO ES UN PROYECTO QUE CONTARÁ CON 39 DEPARTAMENTOS, DISTRIBUIDOS EN 6 PISOS Y 28 ESTACIONAMIENTOS TECHADOS Y SEMITECHADOS.</p>
							</div>
							<ul class="logos-ultimos">
								<li><img src="assets/img/inmobiliaria1.png"></li>
							</ul>
						</div>
					</div>
				</div>				
			</div>			
		</div>
	</section>		
<?php
	include('footer.php');
?>