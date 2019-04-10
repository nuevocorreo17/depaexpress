<?php
	include('header.php');
?>
	<section class="banner-interna">
		<picture>
			<source media="(max-width: 767px)" srcset="assets/img/banner-desarrollo.jpg">
			<img src="assets/img/banner-desarrollo.jpg" alt="banner" class="interna-imagen-banner" >
		</picture>
		<div class="container">
			<div class="row">
				<div class="col-12 col-xl-6 offset-xl-3 text-center">
					<h1>Desarrollos Inmobiliarios</h1>
					<a href="#" class="boton boton-small">PUBLICA TU INMUEBLE</a>
				</div>
			</div>
		</div>
	</section>
	<a href="#" class="abrir-busqueda"><i class="fas fa-filter"></i></a>	
	<section class="seccion">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-3 columna-buscador">
					<a href="#" class="cerrar-busqueda"><i class="fas fa-times"></i></a>
					<div class="seleccion-busqueda"></div>
					<div class="acordion-busqueda">
						<h3 class="activo">tipo de operación <i class="fas fa-caret-down"></i></h3>
						<div class="conjunto-fila-acordion activo">
							<div class="fila-acordion">
								<div class="fila-acordion-titulo">
									<a href="#">Venta</a>
								</div>
								<div class="fila-acordion-cantidad">
									<a href="#">(3485)</a>
								</div>
							</div>
							<div class="fila-acordion">
								<div class="fila-acordion-titulo">
									<a href="#">Alquiler</a>
								</div>
								<div class="fila-acordion-cantidad">
									<a href="#">(389)</a>
								</div>
							</div>
							<div class="fila-acordion">
								<div class="fila-acordion-titulo">
									<a href="#">Alquiler tempora</a>
								</div>
								<div class="fila-acordion-cantidad">
									<a href="#">(75)</a>
								</div>
							</div>
						</div>
					</div>
					<div class="acordion-busqueda ">
						<h3 class="activo">tipo de inmueble <i class="fas fa-caret-down"></i></h3>
						<div class="conjunto-fila-acordion activo">
							<div class="fila-acordion">
								<div class="fila-acordion-titulo">
									<a href="#">Venta</a>
								</div>
								<div class="fila-acordion-cantidad">
									<a href="#">(3485)</a>
								</div>
							</div>
							<div class="fila-acordion">
								<div class="fila-acordion-titulo">
									<a href="#">Alquiler</a>
								</div>
								<div class="fila-acordion-cantidad">
									<a href="#">(389)</a>
								</div>
							</div>
							<div class="fila-acordion">
								<div class="fila-acordion-titulo">
									<a href="#">Terrenos</a>
								</div>
								<div class="fila-acordion-cantidad">
									<a href="#">(75)</a>
								</div>
							</div>
							<div class="fila-acordion">
								<div class="fila-acordion-titulo">
									<a href="#">Oficinas</a>
								</div>
								<div class="fila-acordion-cantidad">
									<a href="#">(3485)</a>
								</div>
							</div>
							<div class="fila-acordion">
								<div class="fila-acordion-titulo">
									<a href="#">Local Comercial</a>
								</div>
								<div class="fila-acordion-cantidad">
									<a href="#">(389)</a>
								</div>
							</div>
							<div class="fila-acordion">
								<div class="fila-acordion-titulo">
									<a href="#">Otros</a>
								</div>
								<div class="fila-acordion-cantidad">
									<a href="#">(75)</a>
								</div>
							</div>
						</div>
					</div>	
					<div class="acordion-busqueda ">
						<h3 class="activo">Distritos <i class="fas fa-caret-down"></i></h3>
						<div class="conjunto-fila-acordion activo">
							<div class="fila-acordion">
								<div class="fila-acordion-titulo">
									<a href="#">San Miguel</a>
								</div>
								<div class="fila-acordion-cantidad">
									<a href="#">(3485)</a>
								</div>
							</div>
							<div class="fila-acordion">
								<div class="fila-acordion-titulo">
									<a href="#">Los Olivos</a>
								</div>
								<div class="fila-acordion-cantidad">
									<a href="#">(389)</a>
								</div>
							</div>
							<div class="fila-acordion">
								<div class="fila-acordion-titulo">
									<a href="#">Ate</a>
								</div>
								<div class="fila-acordion-cantidad">
									<a href="#">(75)</a>
								</div>
							</div>	
							<a href="#" class="acordion-vermas">Ver más</a>	
						</div>		
					</div>
					<div class="acordion-busqueda">
						<h3 class="activo">precio <i class="fas fa-caret-down"></i></h3>
						<div class="conjunto-fila-acordion activo">
							<div class="form-group form-check form-check-inline">
							  <input class="form-check-input" type="radio" name="precio" id="preciosoles" value="soles" checked>
							  <label class="form-check-label" for="preciosoles">Soles</label>
							</div>
							<div class="form-group form-check form-check-inline">
							  <input class="form-check-input" type="radio" name="precio" id="preciodolares" value="dolares">
							  <label class="form-check-label" for="preciodolares">Dólares</label>
							</div>
							<div class="form-row">
								<div class="col-6">
									<input type="text" class="form-control" name="minprecio" id="minprecio" placeholder="S/ Min">
									</div>
								<div class="col-6">
									<input type="text" class="form-control" name="maxprecio" id="maxprecio" placeholder="S/ Max">
								</div>
							</div>
						</div>
					</div>
					<div class="acordion-busqueda ">
						<h3 class="activo">Distritos <i class="fas fa-caret-down"></i></h3>
						<div class="conjunto-fila-acordion activo">
							<div class="fila-acordion">
								<div class="fila-acordion-titulo">
									<a href="#">San Miguel</a>
								</div>
								<div class="fila-acordion-cantidad">
									<a href="#">(3485)</a>
								</div>
							</div>
							<div class="fila-acordion">
								<div class="fila-acordion-titulo">
									<a href="#">Los Olivos</a>
								</div>
								<div class="fila-acordion-cantidad">
									<a href="#">(389)</a>
								</div>
							</div>
							<div class="fila-acordion">
								<div class="fila-acordion-titulo">
									<a href="#">Ate</a>
								</div>
								<div class="fila-acordion-cantidad">
									<a href="#">(75)</a>
								</div>
							</div>	
							<a href="#" class="acordion-vermas">Ver más</a>	
						</div>		
					</div>
					<div class="acordion-busqueda ">
						<h3 class="activo">Distritos <i class="fas fa-caret-down"></i></h3>
						<div class="conjunto-fila-acordion activo">
							<div class="fila-acordion">
								<div class="fila-acordion-titulo">
									<a href="#">San Miguel</a>
								</div>
								<div class="fila-acordion-cantidad">
									<a href="#">(3485)</a>
								</div>
							</div>
							<div class="fila-acordion">
								<div class="fila-acordion-titulo">
									<a href="#">Los Olivos</a>
								</div>
								<div class="fila-acordion-cantidad">
									<a href="#">(389)</a>
								</div>
							</div>
							<div class="fila-acordion">
								<div class="fila-acordion-titulo">
									<a href="#">Ate</a>
								</div>
								<div class="fila-acordion-cantidad">
									<a href="#">(75)</a>
								</div>
							</div>	
							<a href="#" class="acordion-vermas">Ver más</a>	
						</div>		
					</div>										
				</div>
				<div class="col-12 col-lg-9">
					<div class="row fila-inmueble">
						<div class="col-12 col-lg-4 col-xl-4 columna-imagen">
							<img src="assets/img/foto-inmueble-previo.jpg" class="imagen-previo">
							<span class="label label-desarrollo">DESARROLLO</span>
						</div>
						<div class="col-12 col-lg-8 col-xl-8 columna-detalle">
							<div class="row">
								<div class="col-12">
									<div class="row">
										<div class="col-12 col-sm-6 col-xl-8 bloque-informacion">
											<h2 class="nombre-proyecto">Proyecto Edificio Foresta</h2>
											<p class="direccion"><i class="fas fa-map-marker-alt"></i> Calle Calderón de la Barca 177 - ATE</p>
											<ul class="caracteristica">
												<li><i class="fas fa-bed"></i><span class="dato">0 a 0 Dorm.</span></li>
												<li><i class="fas fa-shower"></i><span class="dato">0 a 0</span></li>
												<li>50.48 - 78.21 m2</li>
											</ul>
										</div>
										<div class="col-12 col-sm-6 col-xl-4 bloque-azul">
											<p>(US$ 204,671)</p>
											<p>Desde</p>
											<h2 class="precio-inmueble">S/ 689,742</h2>
										</div>
									</div>
									<div class="row">
										<div class="col-12 col-sm-6 col-xl-6 columna-descripcion">
											<p class="descripcion">Arquitectura de vanguardia a una cuadra del parque Pershing y el parque Junin, a 4 cuadras de Plaza San Miguel, una zona tranquila y céntrica ideal para empezar una nueva vida en armonía.</p>
										</div>
										<div class="col-12 col-sm-6 col-xl-6 columna-lista-logos">
											<ul class="lista-logos">
												<li><img src="assets/img/inmobiliaria1.png" class="log"></li>
												<li><img src="assets/img/inmobiliaria1.png" class="log"></li>
											</ul>
										</div>
									</div>
									<div class="row align-items-center file-botones">
										<div class="col-6  col-sm-4 col-xl-4">
											<a href="#" class="link">ver planos</a>
										</div>
										<div class="col-6  col-sm-4  offset-sm-4 col-xl-4 offset-xl-4">
											<a href="#" class="boton boton-small">VER ANUNCIO</a>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
					<div class="row fila-inmueble">
						<div class="col-12 col-lg-4 col-xl-4 columna-imagen">
							<img src="assets/img/foto-inmueble-previo.jpg" class="imagen-previo">
							<span class="label label-desarrollo">DESARROLLO</span>
						</div>
						<div class="col-12 col-lg-8 col-xl-8 columna-detalle">
							<div class="row">
								<div class="col-12">
									<div class="row">
										<div class="col-12 col-sm-6 col-xl-8 bloque-informacion">
											<h2 class="nombre-proyecto">Proyecto Edificio Foresta</h2>
											<p class="direccion"><i class="fas fa-map-marker-alt"></i> Calle Calderón de la Barca 177 - ATE</p>
											<ul class="caracteristica">
												<li><i class="fas fa-bed"></i><span class="dato">0 a 0 Dorm.</span></li>
												<li><i class="fas fa-shower"></i><span class="dato">0 a 0</span></li>
												<li>50.48 - 78.21 m2</li>
											</ul>
										</div>
										<div class="col-12 col-sm-6 col-xl-4 bloque-azul">
											<p>(US$ 204,671)</p>
											<p>Desde</p>
											<h2 class="precio-inmueble">S/ 689,742</h2>
										</div>
									</div>
									<div class="row">
										<div class="col-12 col-sm-6 col-xl-6 columna-descripcion">
											<p class="descripcion">Arquitectura de vanguardia a una cuadra del parque Pershing y el parque Junin, a 4 cuadras de Plaza San Miguel, una zona tranquila y céntrica ideal para empezar una nueva vida en armonía.</p>
										</div>
										<div class="col-12 col-sm-6 col-xl-6 columna-lista-logos">
											<ul class="lista-logos">
												<li><img src="assets/img/inmobiliaria1.png" class="log"></li>
												<li><img src="assets/img/inmobiliaria1.png" class="log"></li>
											</ul>
										</div>
									</div>
									<div class="row align-items-center file-botones">
										<div class="col-6  col-sm-4 col-xl-4">
											<a href="#" class="link">ver planos</a>
										</div>
										<div class="col-6  col-sm-4  offset-sm-4 col-xl-4 offset-xl-4">
											<a href="#" class="boton boton-small">VER ANUNCIO</a>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
					<div class="row fila-inmueble">
						<div class="col-12 col-lg-4 col-xl-4 columna-imagen">
							<img src="assets/img/foto-inmueble-previo.jpg" class="imagen-previo">
							<span class="label label-desarrollo">DESARROLLO</span>
						</div>
						<div class="col-12 col-lg-8 col-xl-8 columna-detalle">
							<div class="row">
								<div class="col-12">
									<div class="row">
										<div class="col-12 col-sm-6 col-xl-8 bloque-informacion">
											<h2 class="nombre-proyecto">Proyecto Edificio Foresta</h2>
											<p class="direccion"><i class="fas fa-map-marker-alt"></i> Calle Calderón de la Barca 177 - ATE</p>
											<ul class="caracteristica">
												<li><i class="fas fa-bed"></i><span class="dato">0 a 0 Dorm.</span></li>
												<li><i class="fas fa-shower"></i><span class="dato">0 a 0</span></li>
												<li>50.48 - 78.21 m2</li>
											</ul>
										</div>
										<div class="col-12 col-sm-6 col-xl-4 bloque-azul">
											<p>(US$ 204,671)</p>
											<p>Desde</p>
											<h2 class="precio-inmueble">S/ 689,742</h2>
										</div>
									</div>
									<div class="row">
										<div class="col-12 col-sm-6 col-xl-6 columna-descripcion">
											<p class="descripcion">Arquitectura de vanguardia a una cuadra del parque Pershing y el parque Junin, a 4 cuadras de Plaza San Miguel, una zona tranquila y céntrica ideal para empezar una nueva vida en armonía.</p>
										</div>
										<div class="col-12 col-sm-6 col-xl-6 columna-lista-logos">
											<ul class="lista-logos">
												<li><img src="assets/img/inmobiliaria1.png" class="log"></li>
												<li><img src="assets/img/inmobiliaria1.png" class="log"></li>
											</ul>
										</div>
									</div>
									<div class="row align-items-center file-botones">
										<div class="col-6  col-sm-4 col-xl-4">
											<a href="#" class="link">ver planos</a>
										</div>
										<div class="col-6  col-sm-4  offset-sm-4 col-xl-4 offset-xl-4">
											<a href="#" class="boton boton-small">VER ANUNCIO</a>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
					<div class="row fila-inmueble">
						<div class="col-12 col-lg-4 col-xl-4 columna-imagen">
							<img src="assets/img/foto-inmueble-previo.jpg" class="imagen-previo">
							<span class="label label-desarrollo">DESARROLLO</span>
						</div>
						<div class="col-12 col-lg-8 col-xl-8 columna-detalle">
							<div class="row">
								<div class="col-12">
									<div class="row">
										<div class="col-12 col-sm-6 col-xl-8 bloque-informacion">
											<h2 class="nombre-proyecto">Proyecto Edificio Foresta</h2>
											<p class="direccion"><i class="fas fa-map-marker-alt"></i> Calle Calderón de la Barca 177 - ATE</p>
											<ul class="caracteristica">
												<li><i class="fas fa-bed"></i><span class="dato">0 a 0 Dorm.</span></li>
												<li><i class="fas fa-shower"></i><span class="dato">0 a 0</span></li>
												<li>50.48 - 78.21 m2</li>
											</ul>
										</div>
										<div class="col-12 col-sm-6 col-xl-4 bloque-azul">
											<p>(US$ 204,671)</p>
											<p>Desde</p>
											<h2 class="precio-inmueble">S/ 689,742</h2>
										</div>
									</div>
									<div class="row">
										<div class="col-12 col-sm-6 col-xl-6 columna-descripcion">
											<p class="descripcion">Arquitectura de vanguardia a una cuadra del parque Pershing y el parque Junin, a 4 cuadras de Plaza San Miguel, una zona tranquila y céntrica ideal para empezar una nueva vida en armonía.</p>
										</div>
										<div class="col-12 col-sm-6 col-xl-6 columna-lista-logos">
											<ul class="lista-logos">
												<li><img src="assets/img/inmobiliaria1.png" class="log"></li>
												<li><img src="assets/img/inmobiliaria1.png" class="log"></li>
											</ul>
										</div>
									</div>
									<div class="row align-items-center file-botones">
										<div class="col-6  col-sm-4 col-xl-4">
											<a href="#" class="link">ver planos</a>
										</div>
										<div class="col-6  col-sm-4  offset-sm-4 col-xl-4 offset-xl-4">
											<a href="#" class="boton boton-small">VER ANUNCIO</a>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>															
				</div>
			</div>
		</div>
	</section>
<?php
	include('footer.php');
?>	