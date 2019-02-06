<section class="seccion-login">
	<div class="container">
		<div class="d-flex justify-content-center h-100">
			<div class="card">
				<div class="card-header">
					<h3>Sign In</h3>
				</div>
				<div class="card-body">
					<?php $error = $this->session->flashdata("error");?>
					<div class="alert alert-<?php echo ($error)? "danger":"info" ?> alert-dismissible fade show" role="alert">
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					  <?php echo ($error)? $error:"Ingrese usuario y password." ?>
					</div>
					<?php echo form_open();?>
					<?php $error = form_error("username",'<p class="text-danger">','</p>'); ?>
					<div class="input-group form-group <?php echo ($error)?'has-error':'' ?>">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
							<input type="text" name="username" id="username" value="<?php echo set_value("username");?>" class="form-control" placeholder="username">
						</div>
						
						<?php echo $error;?>
					</div>
					
					<?php $error = form_error("password",'<p class="text-danger">','</p>'); ?>						
					<div class="input-group form-group <?php echo ($error)?'has-error':'' ?>">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
							<input type="password" id="password" name="password" value="<?php echo set_value("password");?>" class="form-control" placeholder="password">
						</div>
						
						<?php echo $error;?>							
					</div>
					
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn">
					</div>
				<?php echo form_close();?>
				</div>
				<div class="card-footer">
					<div class="d-flex justify-content-center links">
						Don't have an account?<a href="#">Sign Up</a>
					</div>
					<div class="d-flex justify-content-center">
						<a href="#">Forgot your password?</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>