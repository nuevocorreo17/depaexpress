<section class="seccion seccion-sinbanner activos-estadistica">
	<div class="container container-fondo-blanco">
		<div class="row">
			<div class="col-12">
				<div class="row">
					<div class="col-12 col-lg-6 offset-lg-3">
						<div class="contenedor-agente sin-fondo">
							<div class="fila-imagen-agente">
								<?php
								if($imagen)
								{
								?>
									<img src="<?php echo $imagen;?>">
								<?php
								}else{
								?>
									<img src="assets/img/cara.jpg">
								<?php
								}
								?>
							</div>
							<h4><?php echo $nombre; ?></h4>
							<div class="bloque-botones">
								<a href="#" class="boton boton-azul"><i class="fas fa-edit"></i>MIS AVISOS ACTIVOS</a>
								<a href="#" class="boton boton-azul"><i class="fas fa-edit"></i>MIS AVISOS INACTIVOS</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12  col-md-6 offset-md-3 col-lg-4 offset-lg-4">
						<?php echo form_open("",array('id'=>'frmperfil'));?>
						<?php $error = form_error("nombre",'<label id="nombre-error" for="nombre" class="text-danger">','</label>'); ?>
							<div class="form-group">
								<input type="text" name="nombre" placeholder="Nombres:" value="<?php echo (set_value("nombre"))? set_value("nombre") : $nombre; ?>" class="form-control">
								<?php echo $error; ?>
							</div>
						<?php $error = form_error("email",'<label id="email-error" for="email" class="text-danger">','</label>'); ?>			
							<div class="form-group">
								<input type="email" name="email" placeholder="Email:" value="<?php echo (set_value("email"))? set_value("email") : $email; ?>" class="form-control">
								<?php echo $error; ?>								
							</div>
							<?php $error = form_error("telefono",'<label id="telefono-error" for="telefono" class="text-danger">','</label>'); ?>			
							<div class="form-group">
								<input type="tel" id="telefono" name="telefono" placeholder="Teléfono:" value="<?php echo (set_value("telefono"))? set_value("telefono") : $telefono; ?>" class="form-control">
								<?php echo $error; ?>
							</div>
							<?php $error = form_error("direccion",'<label id="direccion-error" for="direccion" class="text-danger">','</label>'); ?>		
							<div class="form-group">
								<input type="text" name="direccion" value="<?php echo (set_value("direccion"))? set_value("direccion") : $direccion; ?>" placeholder="Dirección:" class="form-control">
								<?php echo $error; ?>
							</div>	
							<?php $error = form_error("empresa",'<label id="empresa-error" for="empresa" class="text-danger">','</label>'); ?>		
							<div class="form-group">
								<input type="text" name="empresa" value="<?php echo (set_value("empresa"))? set_value("empresa") : $empresa; ?>" placeholder="Empresa:" class="form-control">
								<?php echo $error; ?>
							</div>	
							<!--<div class="form-group">
								<select name="distrito" class="form-control">
									<option value="">Distrito</option>
									<option value="1">Lima</option>
									<option value="2">San Borja</option>
									<option value="3">San Miguel</option>
								</select>	
							</div> -->	
							<div class="form-group">
								<input type="submit" name="btn-ingresar" class="boton boton-naranja" value="GUARDAR">
							</div>
						<?php echo form_close();?>
					</div>
				</div>		
			</div>
		</div>
	</div>
</section>