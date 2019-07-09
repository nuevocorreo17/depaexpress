<?php
	include('header.php');
?>
	<section class="seccion-sinbanner pasos">
		<div class="container">
			<div class="row">
				<div class="col-12 col-xl-8 offset-xl-2 columna-pasos">
					<div class="circulo-paso">
						<span class="circulo" >1</span>
						<h4 class="titulo-letra-azul">Tipo de aviso</h4>
					</div>
					<div class="circulo-paso activo">
						<span class="circulo" >2</span>
						<h4 class="titulo-letra-azul">Datos del aviso</h4>				
					</div>
					<div class="circulo-paso">
						<span class="circulo" >3</span>
						<h4 class="titulo-letra-azul">tu aviso</h4>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="paso modelo">
		<div class="container">
			<div class="row">
				<form>
					<div class="col-12 col-lg-6 offset-lg-3">
						<div class="row fila-formulario-registro">
							<div class="col-12">
								<h2 class="titulo-letra-azul">Tipo de Operación</h2>
							</div>
							<div class="col-12 col-lg-6 columna-campo-registro">
								<select name="operacion" class="form-control">
									<option value="">Seleccione operación</option>
									<option value="1">Lima</option>
									<option value="2">San Borja</option>
									<option value="3">San Miguel</option>
								</select>	
							</div>
						</div>
						<div class="row fila-formulario-registro">
							<div class="col-12">
								<h2 class="titulo-letra-azul">Tipo de Inmueble</h2>
							</div>
							<div class="col-12 col-lg-6 columna-campo-registro">
								<select name="distrito" class="form-control">
									<option value="">Seleccione tipo</option>
									<option value="1">Lima</option>
									<option value="2">San Borja</option>
									<option value="3">San Miguel</option>
								</select>	
							</div>
							<div class="col-12 col-lg-6 columna-campo-registro">
								<select name="distrito" class="form-control">
									<option value="">Seleccione subtipo</option>
									<option value="1">Lima</option>
									<option value="2">San Borja</option>
									<option value="3">San Miguel</option>
								</select>
							</div>
						</div>
						<div class="row fila-formulario-registro">
							<div class="col-12">
								<h2 class="titulo-letra-azul">ubicación</h2>
							</div>
							<div class="col-12 col-lg-6 columna-campo-registro">
								<select name="distrito" class="form-control">
									<option value="">Seleccione departamento</option>
									<option value="1">Lima</option>
									<option value="2">San Borja</option>
									<option value="3">San Miguel</option>
								</select>	
							</div>
							<div class="col-12 col-lg-6 columna-campo-registro">
								<select name="distrito" class="form-control">
									<option value="">Seleccione provincia</option>
									<option value="1">Lima</option>
									<option value="2">San Borja</option>
									<option value="3">San Miguel</option>
								</select>
							</div>
							<div class="col-12 col-lg-6 columna-campo-registro">
								<select name="distrito" class="form-control">
									<option value="">Seleccione distrito</option>
									<option value="1">Lima</option>
									<option value="2">San Borja</option>
									<option value="3">San Miguel</option>
								</select>
							</div>
							<div class="col-12 columna-campo-registro">
								<input type="text" name="direccion" placeholder="Dirección:" class="form-control">
							</div>
							<div class="col-12 col-lg-6 columna-campo-registro">
								<input type="text" name="piso" placeholder="Piso:" class="form-control">
							</div>
							<div class="col-12 col-lg-6 columna-campo-registro">
								<input type="text" name="referencia" placeholder="Referencia:" class="form-control">
							</div>
						</div>
						<div class="row fila-formulario-registro">
							<div class="col-12">
								<h2 class="titulo-letra-azul">ubicar en el mapa</h2>
							</div>
							<div class="col-12 columna-campo-registro" id="bloque-mapagoogle-maps">
							</div>
						</div>
						<div class="row fila-formulario-registro">
							<div class="col-12">
								<h2 class="titulo-letra-azul">fotos</h2>
							</div>
							<div class="col-12 columna-campo-registro" id="bloque-lista-fotos">
							</div>
							<div class="col-12 columna-campo-registro">
								<p>Formatos permitidos: JPG, JPEG, PNG (Tamaño máximo: 5Mb). Tamaño de imagen de referencia (800x600 px)</p>
							</div>
						</div>
						<div class="row fila-formulario-registro">
							<div class="col-12">
								<h2 class="titulo-letra-azul">precio</h2>
							</div>
							<div class="col-12 columna-campo-registro columna-precios">
								<div class="form-check form-check-inline">
									<label class="radio-inline"><input type="radio" class="form-check-input" name="precio" value="dolar">US$</label>
								</div>
								<div class="form-check form-check-inline">
									<label class="radio-inline"><input type="radio" class="form-check-input" name="precio" value="sol">S/</label>
								</div>
								<div class="form-check form-check-inline">
									<label class="radio-inline"><input type="radio" class="form-check-input" name="precio" value="consultar">A consultar</label>
								</div>
							</div>
							<div class="col-12 col-lg-6 columna-campo-registro">
								<input type="text" name="monto" placeholder="Precio:" class="form-control">
							</div>
						</div>
						<div class="row fila-formulario-registro">
							<div class="col-12">
								<h2 class="titulo-letra-azul">Datos del inmueble</h2>
							</div>
							<div class="col-12 col-lg-6 columna-campo-registro">
								<input type="text" name="areatotal" placeholder="Área total:" class="form-control">
							</div>
							<div class="col-12 col-lg-6 columna-campo-registro">
								<input type="text" name="areaconstruida" placeholder="Área construida:" class="form-control">
							</div>
							<div class="col-12 col-lg-6 columna-campo-registro">
								<input type="text" name="antiguedad" placeholder="Antiguedad:" class="form-control">
							</div>
							<div class="col-12 col-lg-6 columna-campo-registro">
								<select name="dormitorios" class="form-control">
									<option value="">Dormitorios</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select>
							</div>
							<div class="col-12 col-lg-6 columna-campo-registro">
								<select name="cocheras" class="form-control">
									<option value="">Cochera</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select>
							</div>
							<div class="col-12 col-lg-6 columna-campo-registro">
								<select name="tipocochera" class="form-control">
									<option value="">Tipo de cochera</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select>
							</div>
							<div class="col-12 col-lg-6 columna-campo-registro">
								<select name="portoncochera" class="form-control">
									<option value="">Porton cochera</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select>
							</div>
							<div class="col-12 col-lg-6 columna-campo-registro">
								<select name="portoncochera" class="form-control">
									<option value="">Disposición del inmueble</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select>
							</div>
							<div class="col-12 col-lg-6 columna-campo-registro">
								<select name="estadoinmueble" class="form-control">
									<option value="">Estado del inmueble</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select>
							</div>
							<div class="col-12 col-lg-6 columna-campo-registro">
								<select name="luminosidad" class="form-control">
									<option value="">Luminosidad</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select>
							</div>
							<div class="col-12 col-lg-6 columna-campo-registro">
								<select name="pisostotales" class="form-control">
									<option value="">Pisos totales</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select>
							</div>
							<div class="col-12 col-lg-6 columna-campo-registro">
								<select name="departamentospis" class="form-control">
									<option value="">Departamentos por piso</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select>
							</div>
							<div class="col-12 col-lg-6 columna-campo-registro">
								<select name="asensores" class="form-control">
									<option value="">Asensores</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select>
							</div>
							<div class="col-12 col-lg-6 columna-campo-registro">
								<input type="text" name="mantenimiento" placeholder="Mantenimiento" class="form-control">
							</div>
							<div class="col-12 col-lg-6 columna-campo-registro">
								<select name="usoprofesional" class="form-control">
									<option value="">Uso profesional</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select>
							</div>
							<div class="col-12 col-lg-6 columna-campo-registro">
								<select name="usocomercial" class="form-control">
									<option value="">Uso comercial</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select>
							</div>
							<div class="col-12 col-lg-6 columna-campo-registro">
								<select name="usocomercial" class="form-control">
									<option value="">Permite mascotas</option>
									<option value="1">1</option>
									<option value="2">2</option>
								</select>
							</div>
						</div>
						<div class="row fila-formulario-registro">
							<div class="col-12">
								<h2 class="titulo-letra-azul">servicios</h2>
							</div>
							<div class="col-12 col-lg-4 columna-campo-registro">
								<div class="form-check form-check-inline">
									<label class="form-check-label"><input type="checkbox" class="form-check-input" name="servicios" value="agua">Agua</label>
								</div>
							</div>
							<div class="col-12 col-lg-4 columna-campo-registro">
								<div class="form-check form-check-inline">
									<label class="form-check-label"><input type="checkbox" class="form-check-input" name="servicios" value="luz">Luz</label>
								</div>
							</div>
							<div class="col-12 col-lg-4 columna-campo-registro">
								<div class="form-check form-check-inline">
									<label class="form-check-label"><input type="checkbox" class="form-check-input" name="servicios" value="gas">Conexión a gas</label>
								</div>
							</div>
							<div class="col-12 col-lg-4 columna-campo-registro">
								<div class="form-check form-check-inline">
									<label class="form-check-label"><input type="checkbox" class="form-check-input" name="servicios" value="cable">Cable</label>
								</div>
							</div>
							<div class="col-12 col-lg-4 columna-campo-registro">
								<div class="form-check form-check-inline">
									<label class="form-check-label"><input type="checkbox" class="form-check-input" name="servicios" value="internet">Internet</label>
								</div>
							</div>
							<div class="col-12 col-lg-4 columna-campo-registro">
								<div class="form-check form-check-inline">
									<label class="form-check-label"><input type="checkbox" class="form-check-input" name="servicios" value="limpieza">Limpieza</label>
								</div>
							</div>
							<div class="col-12 col-lg-4 columna-campo-registro">
								<div class="form-check form-check-inline">
									<label class="form-check-label"><input type="checkbox" class="form-check-input" name="servicios" value="seguridad">Sistema de seguridad</label>
								</div>
							</div>
						</div>
						<div class="row fila-formulario-registro">
							<div class="col-12">
								<h2 class="titulo-letra-azul">servicios</h2>
							</div>
							<div class="col-12 col-lg-4 columna-campo-registro">
								<div class="form-check form-check-inline">
									<label class="form-check-label"><input type="checkbox" class="form-check-input" name="servicios" value="agua">Agua</label>
								</div>
							</div>
							<div class="col-12 col-lg-4 columna-campo-registro">
								<div class="form-check form-check-inline">
									<label class="form-check-label"><input type="checkbox" class="form-check-input" name="servicios" value="luz">Luz</label>
								</div>
							</div>
							<div class="col-12 col-lg-4 columna-campo-registro">
								<div class="form-check form-check-inline">
									<label class="form-check-label"><input type="checkbox" class="form-check-input" name="servicios" value="gas">Conexión a gas</label>
								</div>
							</div>
							<div class="col-12 col-lg-4 columna-campo-registro">
								<div class="form-check form-check-inline">
									<label class="form-check-label"><input type="checkbox" class="form-check-input" name="servicios" value="cable">Cable</label>
								</div>
							</div>
							<div class="col-12 col-lg-4 columna-campo-registro">
								<div class="form-check form-check-inline">
									<label class="form-check-label"><input type="checkbox" class="form-check-input" name="servicios" value="internet">Internet</label>
								</div>
							</div>
							<div class="col-12 col-lg-4 columna-campo-registro">
								<div class="form-check form-check-inline">
									<label class="form-check-label"><input type="checkbox" class="form-check-input" name="servicios" value="limpieza">Limpieza</label>
								</div>
							</div>
							<div class="col-12 col-lg-4 columna-campo-registro">
								<div class="form-check form-check-inline">
									<label class="form-check-label"><input type="checkbox" class="form-check-input" name="servicios" value="seguridad">Sistema de seguridad</label>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
<?php
	include('footer.php');
?>