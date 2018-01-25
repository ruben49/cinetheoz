<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<meta charset="utf-8">


<html lang="es">

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/contactstyle.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/faqstyle.css" type="text/css" media="all" />
 <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-2.1.4.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<link href="<?php echo base_url();?>assets/css/single.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url();?>assets/css/medile.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url();?>assets/css/jquery.slidey.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css" />

<link href="<?php echo base_url();?>assets/css/owl.carousel.css" rel="stylesheet" type="text/css" media="all">
<script src="<?php echo base_url();?>assets/js/owl.carousel.js"></script>
<LINK REL="Shortcut Icon" HREF="<?php echo base_url();?>assets/img/icono.png"> 
<script>
	$(document).ready(function() { 
		$("#owl-demo").owlCarousel({
	 
		  autoPlay: 3000, //Set AutoPlay to 3 seconds
	 
		  items : 5,
		  itemsDesktop : [640,4],
		  itemsDesktopSmall : [414,3]
	 
		});
	 
                $(".dropdown").hover(            
                    function() {
                        $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
                        $(this).toggleClass('open');        
                    },
                    function() {
                        $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
                        $(this).toggleClass('open');       
                    }
                 );
         
         	$().UItoTop({ easingType: 'easeOutQuart' });
	}); 
</script> 

<title>CINE THE OZ </title>
<!-- header -->
	<div class="header">
		<div class="container">
			<div class="w3layouts_logo">
				<a href="<?php echo base_url();?>PanelController/index"><h1>Oz<span>CINECAFE</span></h1></a>
			</div>
			<!--<div class="w3_search">
				<form action="#" method="post">
					<input type="text" name="Search" placeholder="Busqueda" required="">
					<input type="submit" value="Ir">
				</form>
			</div>-->
			<div class="w3l_sign_in_register">
				<ul>
					<li><i class="fa fa-phone" aria-hidden="true"></i> (42) 222 4276</li>
					<!-- <li><a href="#" data-toggle="modal" data-target="#myModal">Entrar</a></li>-->
                                      	<li><a href="#" data-toggle="modal" data-target="#myModal">Entrar</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->

<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Acceder & Registro
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="w3_login_module">
							<div class="module form-module">
							  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
								<div class="tooltip">Registro</div>
							  </div>
							  <div class="form">
								<h3>Acceder Con Tu Cuenta</h3>
								<form action="<?php echo base_url();?>LoginController/loginCliente" method="post">
									
								  <input type="text" name="Username" placeholder="Usuario" required="">
								  <input type="password" name="Password" placeholder="Contraseña" required="">			 
                                                                  <input type="submit" value="Login" placeholder="ENTRAR">
								</form>
							  </div>
							  <div class="form">
								<h3>Crear Cuenta</h3>
								<form action="<?php echo base_url();?>Usuario_ClienteController/registrarCliente " method="post">
										  <input type="text" name="Nombrescliente" placeholder="Nombres" required="">
										  	  <input type="text" name="Apellidoscliente" placeholder="Apellidos" required="">
										  	  	  <input type="text" name="Direccioncliente" placeholder="Direccion" required="">
										  	  	  <input type="text" name="Ciudadcliente" placeholder="Ciudad" required="">										  	  	  	  
								  <input type="text" name="Usernamecliente" placeholder="Usuario" required="">
								  <input type="password" name="Passwordcliente" placeholder="Contraseña" required="">
						 <input type="text" name="Emailcliente" placeholder="Correo" required="">
								  <input type="submit" value="Guardar">
								</form>
							  </div>							
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<script>
		$('.toggle').click(function(){
		  // Switches the Icon
		  $(this).children('i').toggleClass('fa-pencil');
		  // Switches the forms  
		  $('.form').animate({
			height: "toggle",
			'padding-top': 'toggle',
			'padding-bottom': 'toggle',
			opacity: "toggle"
		  }, "slow");
		});
	</script>
<!-- //bootstrap-pop-up -->
<!-- nav -->
	<div class="movies_nav" color="red">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
		
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav>
						<ul class="nav navbar-nav">
							<li class="active"><a href="<?php echo base_url();?>HomeController/index">Inicio</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Cines<b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-3">
									<li>
									<div class="col-sm-4">
										<ul class="multi-column-dropdown">
											<li><a href="funciones.html">Chillan</a></li>
											<li><a href="funciones.html">Concepcion</a></li>
									
										</ul>
									</div>
									
									<div class="clearfix"></div>
									</li>
								</ul>
							</li>
										<li><a href="<?php echo base_url();?>HomeController/funciones">funciones</a></li>
									<li><a href="<?php echo base_url();?>HomeController/promos">promociones</a></li>
									<li><a href="<?php echo base_url();?>HomeController/nosotros">nosotros</a></li>
							        <li><a href="<?php echo base_url();?>HomeController/contacto">contacto</a></li>
						</ul>
					</nav>
				</div>
			</nav>	
		</div>
	</div>
	
	

 
<!-- //Bootstrap Core JavaScript -->
 
<!-- //nav -->
<!-- banner -->
	

