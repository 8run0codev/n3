<?php

	session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Ofertas</title>
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="../favicon.png" />
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/home.css">
	<link rel="stylesheet" type="text/css" href="../css/materialize.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script type="text/javascript" src="../js/jquery.js" ></script>
	<script type="text/javascript" src="../js/materialize.min.js" ></script>
	<link rel="stylesheet" type="text/css" href="../css/animate.min.css">
</head>
<body class="animated fadeIn">
<!--Inicio de la barra de navegacion-->
	<div class="navbar-fixed">
					<nav>
					<div class="nav-wrapper">
					<?php	
						if (isset($_SESSION['Comprador'])) {
							$arreglo=$_SESSION['Comprador'];
							$usu=$arreglo[0]['Nombre'];
                                                        $cor=$arreglo[0]['Correo'];
                                                        $app=$arreglo[0]['Apellido'];
                                                        $apm=$arreglo[0]['Apm'];
                                                        $pas=$arreglo[0]['Pass'];
                                                        $use=$arreglo[0]['Usu'];
					?>

					<a href="../index.php" id="Logo" class="brand-logo left" title="Inicio">n³</a>
						<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons"><i class="material-icons">menu</i></i></a>
						<ul  id="enlaces_menu" class="hide-on-med-and-down">
							<li><a href="../catalogo/index.php">Tienda</a></li>
							<li><a href="index.php">Ofertas</a></li>
							<li><a href="../tutoriales/index.php">Tutoriales</a></li>	
							<ul id="" class="hide-on-med-and-down right">	
								<li><a href="../carrito/index.php" id="BotonCarrito" title="Ver Carrito de Compras"><img height="50px" src="../img/carrito.png"></a></li>
								<li><a href="#modal1" class="waves-effect waves-light modal-trigger" id="BotonSignUp" ><?php echo $usu; ?></a></li>
								<li><a href="../cerrar.php" id="BotonLogin">Cerrar sesión</a></li>				
							</ul>		
						</ul>

						<ul class="side-nav" id="mobile-demo">
							<a href="../carrito/index.php" id="BotonCarrito"><img height="50px" src="../img/carrito.png"></a>
							<li><a href="#modal1" class="waves-effect waves-light modal-trigger" id="BotonSignUp" ><?php echo $usu; ?></a></li>
							<li><a href="../catalogo/index.php">Tienda</a></li>
							<li><a href="index.php">Ofertas</a></li>	
							<li><a href="../tutoriales/index.php">Tutoriales</a></li>
							<li><a href="../cerrar.php" id="BotonLogin">Cerrar de sesión</a></li>
						</ul>
	
					</div>		
				</nav>	
			</div>
			<script type="text/javascript">$(".button-collapse").sideNav();</script>

					<?php
						}else{ ?>
						<a href="../index.php" id="Logo" class="brand-logo left" title="Inicio">n³</a>
						<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons"><i class="material-icons">menu</i></i></a>
						<ul  id="enlaces_menu" class="hide-on-med-and-down">
							<li><a href="../catalogo/index.php">Tienda</a></li>
							<li><a href="index.php">Ofertas</a></li>
							<li><a href="../tutoriales/index.php">Tutoriales</a></li>	
							<ul id="" class="hide-on-med-and-down right">	
								<li><a href="../carrito/index.php" id="BotonCarrito" title="Ver Carrito de Compras"><img height="50px" src="../img/carrito.png"></a></li>
								<li><a href="../SignUp.php" id="BotonSignUp">Registrate</a></li>
								<li><a href="../Login.php" id="BotonLogin">Inicio de sesión</a></li>				
							</ul>		
						</ul>

						<ul class="side-nav" id="mobile-demo">
						|	<a href="../carrito/index.php" id="BotonCarrito"><img height="50px" src="../img/carrito.png"></a>	
							<li><a href="../SignUp.php" id="BotonSignUp">Registrate</a></li>		
							<li><a href="../Login.php" id="BotonLogin">Inicio de sesión</a></li>	
							<li><a href="../catalogo/index.php">Tienda</a></li>
							<li><a href="index.php">Ofertas</a></li>	
							<li><a href="../tutoriales/index.php">Tutoriales</a></li>
						</ul>
	
					</div>		
				</nav>	
			</div>
			<script type="text/javascript">$(".button-collapse").sideNav();</script>
					<?php
						}
					?>	
			<!-- Fin de la barra de navegacion-->
				<noscript>
				<div class="container">
					<center class="animated pulse infinite">
				<h5><p>ATENCIÓN</p></h5>
				<font color="red"><h5 class="red-text"><p>La página que estás viendo requiere para su funcionamiento el uso de JavaScript. 
				Si lo has deshabilitado intencionadamente, por favor vuelve a activarlo.</p></h5></font>
				</center>
				</div>
			</noscript>

<!--Perfil-->

			<div id="modal1" class="modal">
				<div class="modal-content">
					<h5 class="center">Perfil</h5>
					<div class="col s12 m16 l16">
						<div class="center">
							<img src="../img/profile.png" class="circle" width="150px">
							<h6 class="grey-text">Correo: <?php echo $cor; ?></h6>
							<hr>
						</div>
						<div id="datos" class="col s12 m12 l12">
							<div class="col s6 m6 l6  left" >
								<h6 class="grey-text">Nombre:</h6>
								<h5><?php echo $usu; ?></h5>
								<h6 class="grey-text">Apellido Paterno: </h6>
								<h5><?php echo $app; ?></h5>
								<h6 class="grey-text">Apellido Materno: </h6>
								<h5><?php echo $apm; ?></h5>
								<h6 class="grey-text">Nombre usuario: </h6>
								<h5><?php echo $use; ?></h5>
							</div>
							<div class="col s12 m12 l12 right">
								<input type="submit" name="" value="Editar perfil" class="waves-effect waves-light btn green">
								<br><br>
								<input type="submit" name="" value="Eliminar perfil" class="waves-effect waves-light btn red">
								<br>
								<br>
								<input type="submit" name="" value="Cambiar contraseña" class="modal-action modal-close waves-effect waves-green btn-flat blue white-text">
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					
				</div>
			</div>

			<script type="text/javascript">
				$(document).ready(function(){
			    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
			    $('.modal-trigger').leanModal();});
			</script>

<!--PERFIL -->


<!-- ofertas-->

	
<div class="row animated zoomIn">

	<div class="container">
		<h3><p>Ofertas</p></h3>
<div class="col s6 m3 l3">
									<div class="card">
										<div class="card-image waves-effect waves-block waves-light">
											<img class="activator" src="../img/producto/p1.jpg">
										</div>
										<div class="card-content">
											<span class="card-title activator grey-text text-darken-4">Cubo Artesanal<i class="material-icons right">more_vert</i></span>
											<p><a href="../carrito/index.php?id=6"><h5>Agregar al carrito</h5></a></p>
										</div>
										<div class="card-reveal">
											<span class="card-title grey-text text-darken-4">Cubo Artesanal<i class="material-icons right">close</i></span>
											<p>Precio: $200</p>
											<p>Marca: Moyu</p>
											<p>Base: Cafe</p>
							<p><a href="../carrito/index.php?id=6"><h6>Agregar al carrito</h6></a></p>
										</div>
									</div>
								</div>
								<!--Proucto 2-->
								<div class="col s6 m3 l3">
									<div class="card">
										<div class="card-image waves-effect waves-block waves-light">
											<img class="activator" src="../img/producto/p2.jpg">
										</div>
										<div class="card-content">
											<span class="card-title activator grey-text text-darken-4">Gosth Cube<i class="material-icons right">more_vert</i></span>
											<p><a href="../carrito/index.php?id=12"><h5>Agregar al carrito</h5></a></p>
										</div>
										<div class="card-reveal">
											<span class="card-title grey-text text-darken-4">Gosth Cube<i class="material-icons right">close</i></span>
											<p>Precio: $500</p>
											<p>Marca: Mefferts</p>
											<p>Base: Negro</p>
							<p><a href="../carrito/index.php?id=12"><h6>Agregar al carrito</h6></a></p>
										</div>
									</div>
								</div>
								<!--Proucto 3-->
								<div class="col s6 m3 l3">
									<div class="card">
										<div class="card-image waves-effect waves-block waves-light">
											<img class="activator" src="../img/producto/p3.jpg">
										</div>
										<div class="card-content">
											<span class="card-title activator grey-text text-darken-4">Manzana 3x3<i class="material-icons right">more_vert</i></span>
											<p><a href="../carrito/index.php?id=13"><h5>Agregar al carrito</h5></a></p>
										</div>
										<div class="card-reveal">
											<span class="card-title grey-text text-darken-4">Manzana 3x3<i class="material-icons right">close</i></span>
											<p>Precio: $150</p>
											<p>Marca: ShengShow</p>
											<p>Base: Rojo</p>
							<p><a href="../carrito/index.php?id=13"><h6>Agregar al carrito</h6></a></p>
										</div>
									</div>
								</div>
								<!--Proucto 4-->
								<div class="col s6 m3 l3">
									<div class="card">
										<div class="card-image waves-effect waves-block waves-light">
											<img class="activator" src="../img/producto/p4.jpg">
										</div>
										<div class="card-content">
											<span class="card-title activator grey-text text-darken-4">Megamorphix<i class="material-icons right">more_vert</i></span>
											<p><a href="../carrito/index.php?id=14"><h5>Agregar al carrito</h5></a></p>
										</div>
										<div class="card-reveal">
											<span class="card-title grey-text text-darken-4">Megamorphix<i class="material-icons right">close</i></span>
											<p>Precio: $200</p>
											<p>Marca: Sheng Show</p>
											<p>Base: Colors</p>
							<p><a href="../carrito/index.php?id=14"><h6>Agregar al carrito</h6></a></p>
										</div>
									</div>
								</div>
			</div>
</div>
	<!-- ofertas-->				
	<!-- Footer -->
		<footer class="page-footer">
			<div class="container">
				<div class="row">
					<div class="col l4 m6 s6">
						<h class="white-text"><a href="index.php"><h1 class="white-text">n³</h1></a></h>
							<h6 class="white-text">Siguenos en:</h6>
							<br>
							<a class="grey-text text-lighten-3" href="https://www.facebook.com/enealcubon3"><img src="../icons/fb.png" height="64px"></a>
							<br> 
							<a class="grey-text text-lighten-3" href="https://twitter.com/enealcubon3"><img src="../icons/tw.png" height="64px"></a>
							<br> 
							<a class="grey-text text-lighten-3" href="https://www.instagram.com/enealcubon3/"><img src="../icons/ig.png" height="64px"></a>				
					</div>
					<div class="col l4 m6 s6">
					<br>
				 <h5 class="white-text">Más</h5>
				 <br>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Aviso de privacidad</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Preguntas frecuentes</a></li>
                  <li><a class="grey-text text-lighten-3" href="../empresa/index.php">Empresa</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Terminos de uso</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Proveedores</a></li>
                </ul>
					</div>
					<div class="col l4 m12 s12">
						<form name="contacto" action="" method="POST">
							<p class="grey-text text-lighten-4"><h4 class="white-text">Contacto: </h4></p>
							<font color="white"><input type="text" name="" placeholder="Nombre"></font>
							<font color="white"><input type="text" name="" placeholder="Correo"></font>
							<font color="white"><input type="text" name="" placeholder="Asunto"></font>
							<font color="white"><textarea name="Mensaje" rows="10" cols="40" placeholder="Escribe tus comentarios..."></textarea></font>
							<br>
							<br>
							<button class="btn waves-effect waves-light" type="submit" name="action" id="Enviar">Enviar
								<i class="material-icons right">send</i>
							</button>
						</form>
					</div>
				</div>
			</div>

			<div class="footer-copyright">
				<div class="container">
					© 2016 Bugisoft
					<a class="grey-text text-lighten-4 right" href="index.php">Inicio</a>
				</div>
			</div>
		</footer>

		<!-- Footer -->
</body>
</html>