	</main>
		<footer class="piesdepagina">
			<div class="fondo-azul">
				<div class="container">
					<div class="row">
						<div class="col-12 col-lg-3 col-xl-3 widget">
							<a href="<?php echo base_url();?>" class="logo-inferior">
								<img src="<?php echo base_url();?>assets/img/logo.svg" class="logo">
							</a>
							<a href="tel:+51900-0007">(01) 900-0007 </a>
							<p>Lunes a Viernes de 9 am a 7 pm</p>
							<p>Sábado de 9 am a 1 pm</p>
						</div>
						<div class="col-12 col-lg-3 col-xl-2 offset-xl-1 widget">
							<a href="<?php echo base_url();?>quienesomos">Quiénes somos</a>
							<a href="<?php echo base_url();?>mapadesitio">Mapa de Sitio</a>
							<a href="<?php echo base_url();?>venta">Vender</a>
							<a href="<?php echo base_url();?>alquiler">Alquilar</a>
						</div>
						<div class="col-12 col-lg-4 col-xl-3 offset-xl-1 widget">
							<a href="<?php echo base_url();?>proyectos">Proyectos</a>
							<a href="<?php echo base_url();?>inmobiliarias">Inmobiliarias & Constructores</a>
							<a href="<?php echo base_url();?>agentes">Agentes</a>
							<a href="<?php echo base_url();?>preguntasfrecuentes">Preguntas Frencuentes</a>
						</div>	
						<div class="col-12 col-lg-1 offset-lg-1 col-xl-1 offset-xl-1 widget widget-redes">
							<a href="http.//www.facebook.com"><i class="fab fa-facebook-f"></i></a>
							<a href="http.//www.instagram.com"><i class="fab fa-instagram"></i></a>
						</div>																		
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-12 text-center derechos-reservados">
						Copyright depa express <?php echo date('Y'); ?>
					</div>
				</div>
			</div>
		</footer>
		<div class="trama"></div>
		<div class="container accesos accesos-login">
			<div class="col-12 col-lg-10 offset-lg-1">
				<a href="#" class="accesos-cerrar"><i class="fas fa-times"></i></a>		
				<div class="row">
					<div class="col-12 col-sm-5 cuerpo-form">
						<div class="row">
							<div class="col-12">
								<h2 class="titulo-letra-azul">INGRESA AQUí</h2>
								<p>O bien, <a href="#" class="btn-registro">crea una cuenta</a></p>
							</div>
						</div>
						<form>
							<div class="form-group form-group-icono">
								<input type="email" name="email" placeholder="Email:" class="form-control">
								<i class="far fa-envelope"></i>
							</div>
							<div class="form-group form-group-icono">
								<input type="password" name="password" placeholder="Contraseña:" class="form-control">
								<i class="fas fa-shield-alt"></i>
							</div>
							<div class="form-group centradp-check">
							    <div class="form-check">
							      <input class="form-check-input" type="checkbox" selected>
							      <label class="form-check-label" for="gridCheck">
							        Recordar mi cuenta
							      </label>
							    </div>
							</div>
							<div class="form-group">
								<input type="submit" name="btn-ingresar" value="INGRESAR" class="boton">
							</div>
						</form>
						<div class="row">
							<div class="col-12">
								<a href="#" class="btn-olvidar-pass enlace-gris"><span class="bolita-pregunta">?</span>¿Olvidaste tu contraseña? Haz click aquí</a>
							</div>
						</div>
					</div>
					<div class="col-7 d-none d-sm-block columna-imagen-form">
						<img src="<?php echo base_url();?>assets/img/imagen-form-login.jpg">
					</div>
				</div>
			</div>
		</div>
		<div class="container accesos accesos-registro">
			<div class="col-12 col-lg-10 offset-lg-1">
				<a href="#" class="accesos-cerrar"><i class="fas fa-times"></i></a>				
				<div class="row">
					<div class="col-12 col-sm-5 cuerpo-form">
						<div class="row">
							<div class="col-12">
								<h2 class="titulo-letra-azul">crea una cuenta</h2>
								<p>O bien, <a href="#" class="btn-login">ingresa aquí</a></p>
							</div>
						</div>
						<form>
							<div class="form-group">
								<input type="text" name="nombres" placeholder="Nombres:" class="form-control">
							</div>
							<div class="form-group">
								<input type="email" name="email" placeholder="Email:" class="form-control">
							</div>
							<div class="form-group">
								<input type="password" name="password" placeholder="Contraseña:" class="form-control">
							</div>
							<div class="form-group">
								<input type="password" name="repassword" placeholder="Repetir Contraseña:" class="form-control">
							</div>										
							<div class="form-group centradp-check">
							    <div class="form-check">
							      <input class="form-check-input" type="checkbox" selected>
							      <label class="form-check-label" for="gridCheck">
							        Acepto los terminos y condiciones
							      </label>
							    </div>
							</div>
							<div class="form-group">
								<input type="submit" name="btn-ingresar" class="boton" value="CREA UNA CUENTA">
							</div>
						</form>
					</div>
					<div class="col-7 d-none d-sm-block columna-imagen-form">
						<img src="<?php echo base_url();?>assets/img/imagen-form-registro.jpg">
					</div>
				</div>
			</div>
		</div>	
		<div class="container accesos accesos-recuperar">
			<div class="col-12 col-lg-10 offset-lg-1">
				<a href="#" class="accesos-cerrar"><i class="fas fa-times"></i></a>
				<div class="row">
					<div class="col-12 col-sm-5 cuerpo-form">
						<div class="row">
							<div class="col-12">
								<h2 class="titulo-letra-azul">¿CAMBIAR<br>SU CONTRASEÑA?</h2>
								<p>Introduce tu dirección de correo electrónico</p>
							</div>
						</div>
						<form>
							<div class="form-group">
								<input type="email" name="email" placeholder="Email:" class="form-control">
							</div>
							<div class="form-group">
								<input type="submit" name="btn-ingresar" class="boton" value="ENVIAR">
							</div>
						</form>						
					</div>
					<div class="col-7 d-none d-sm-block columna-imagen-form">
						<img src="<?php echo base_url();?>assets/img/imagen-form-recuperar.jpg">
					</div>
				</div>
			</div>
		</div>	
		<script>var URL = '<?php echo base_url();?>';</script>
		<script src="<?php echo base_url();?>assets/js/jquery.js"></script>
		<script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>	
		<script src="<?php echo base_url();?>assets/js/funciones.js"></script>
	</body>
</html>