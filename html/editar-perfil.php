<?php
	include('header.php');
?>
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
							<div class="bloque-botones">
								<a href="#" class="boton boton-azul"><i class="fas fa-edit"></i>MIS AVISOS ACTIVOS</a>
								<a href="#" class="boton boton-azul"><i class="fas fa-edit"></i>MIS AVISOS INACTIVOS</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12  col-md-6 offset-md-3 col-lg-4 offset-lg-4">
						<form>
							<div class="form-group">
								<input type="text" name="nombres" placeholder="Nombres:" class="form-control">
							</div>
							<div class="form-group">
								<input type="email" name="email" placeholder="Email:" class="form-control">
							</div>
							<div class="form-group">
								<input type="tel" name="telefono" placeholder="Teléfono:" class="form-control">
							</div>	
							<div class="form-group">
								<input type="text" name="direccion" placeholder="Dirección:" class="form-control">
							</div>	
							<div class="form-group">
								<input type="text" name="empresa" placeholder="Empresa:" class="form-control">
							</div>	
							<div class="form-group">
								<select name="distrito" class="form-control">
									<option value="">Distrito</option>
									<option value="1">Lima</option>
									<option value="2">San Borja</option>
									<option value="3">San Miguel</option>
								</select>	
							</div>	
							<div class="form-group">
								<input type="submit" name="btn-ingresar" class="boton boton-naranja" value="GUARDAR">
							</div>
						</form>
					</div>
				</div>		
			</div>
		</div>
	</div>
</section>
<?php
	include('footer.php');
?>