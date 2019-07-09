<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
	<meta name="title" content="DepaExpress">
	<meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam">
	<meta name="keywords" content="depa, express, departamentos">
	<meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<title>DepaExpress</title>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
</head>
<body>
	<header class="cabecera">
		<div class="container">
			<div class="row">
				<nav class="navbar navbar-expand-lg navbar-light justify-content-between">
				  <a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/img/logo.svg" class="logo"></a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars"></i>
				  </button>
				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				  	<div class="ambas-filas-menu">
						<ul class="navbar-nav ml-auto fila-registro-login">
							<li class="nav-item"><a class="nav-link btn-registro"  href="#">REGÍSTRATE</a></li>
							<li class="nav-item item-login"><a class="nav-link btn-login" href="#">INGRESA<i class="fas fa-user"></i></a></li>
						</ul>
					    <ul class="navbar-nav ml-auto fila-items-menu">
					      <li class="nav-item">
					        <a class="nav-link" href="<?php echo base_url();?>venta">VENTA</a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link" href="<?php echo base_url();?>alquiler">ALQUILER</a>
					      </li>
					      <li class="nav-item dropdown">
					        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					          DESARROLLOS INMOBILIARIOS
					        </a>
					        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
					          <a class="dropdown-item" href="#">Action</a>
					          <a class="dropdown-item" href="#">Another action</a>
					          <a class="dropdown-item" href="#">Something else here</a>
					        </div>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link" href="<?php echo base_url();?>agentes" >AGENTES</a>
					      </li>
					      <li class="nav-item">
					        <a class="boton boton-reversa" href="<?php echo base_url();?>publicar" >PUBLICAR ANUNCIO</a>
					      </li>      
					    </ul>
				    </div>
				  </div>
				</nav>
			</div>
		</div>
	</header>
	<main>