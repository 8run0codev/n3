<?php

	session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Aviso de privacidad</title>
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="favicatalogo.png" />
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/materialize.css" >
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
</head>
<body>
	<!--Inicio de la barra de navegacion-->
	<div class="navbar-fixed">
					<nav>
					<div class="nav-wrapper">
					<?php	
						if (isset($_SESSION['Comprador'])) {
							$arreglo=$_SESSION['Comprador'];

							$usu=$arreglo[0]['Nombre'];
					?>

					<a href="index.php" id="Logo" class="brand-logo left" title="Inicio">n³</a>
						<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons"><i class="material-icons">menu</i></i></a>
						<ul  id="enlaces_menu" class="hide-on-med-and-down">
							<li><a href="catalogo/index.php">Tienda</a></li>
							<li><a href="ofertas/index.php">Ofertas</a></li>
							<li><a href="tutoriales/index.php">Tutoriales</a></li>	
							<ul id="" class="hide-on-med-and-down right">	
								<li><a href="carrito/index.php" id="BotonCarrito" title="Ver Carrito de Compras"><img height="50px" src="img/carrito.png"></a></li>
								<li><a href="perfil.php" id="BotonSignUp"><?php echo $usu; ?></a></li>
								<li><a href="cerrar.php" id="BotonLogin">Cerrar sesión</a></li>				
							</ul>		
						</ul>

						<ul class="side-nav" id="mobile-demo">
							<a href="carrito/index.php" id="BotonCarrito"><img height="50px" src="../img/carrito.png"></a>
							<li><a href="perfil.php" id="BotonSignUp"><?php echo $usu; ?></a></li>
							<li><a href="catalogo/index.php">Tienda</a></li>
							<li><a href="ofertas/index.php">Ofertas</a></li>	
							<li><a href="tutoriales/index.php">Tutoriales</a></li>
							<li><a href="cerrar.php" id="BotonLogin">Cerrar de sesión</a></li>
						</ul>
	
					</div>		
				</nav>	
			</div>
			<script type="text/javascript">$(".button-collapse").sideNav();</script>

					<?php
						}else{ ?>
						<a href="index.php" id="Logo" class="brand-logo left" title="Inicio">n³</a>
						<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons"><i class="material-icons">menu</i></i></a>
						<ul  id="enlaces_menu" class="hide-on-med-and-down">
							<li><a href="catalogo/index.php">Tienda</a></li>
							<li><a href="ofertas/index.php">Ofertas</a></li>
							<li><a href="tutoriales/index.php">Tutoriales</a></li>	
							<ul id="" class="hide-on-med-and-down right">	
								<li><a href="carrito/index.php" id="BotonCarrito" title="Ver Carrito de Compras"><img height="50px" src="img/carrito.png"></a></li>
								<li><a href="SignUp.php" id="BotonSignUp">Registrate</a></li>
								<li><a href="Login.php" id="BotonLogin">Inicio de sesión</a></li>				
							</ul>		
						</ul>

						<ul class="side-nav" id="mobile-demo">
						|	<a href="carrito/index.php" id="BotonCarrito"><img height="50px" src="../img/carrito.png"></a>	
							<li><a href="SignUp.php" id="BotonSignUp">Registrate</a></li>		
							<li><a href="Login.php" id="BotonLogin">Inicio de sesión</a></li>	
							<li><a href="catalogo/index.php">Tienda</a></li>
							<li><a href="ofertas/index.php">Ofertas</a></li>	
							<li><a href="tutoriales/index.php">Tutoriales</a></li>
						</ul>
	
					</div>		
				</nav>	
			</div>
			<script type="text/javascript">$(".button-collapse").sideNav();</script>
					<?php
						}
					?>	
			<!-- Fin de la barra de navegacion-->

	<div>
		<div class="container">
			<div class="row">
				<div class="col l12 m12 s12">
					<h4>Aviso de privacidad</h4>
					<p>Los datos personales recabados serán protegidos, incorporados y tratados en el Sistema de
Datos personales Nombre, domicilio, fecha de nacimiento, datos bancarios, ubicación, el cual tiene su fundamento en
(Fundamento legal que faculta al Ente público para recabar los datos personales), cuya finalidad
es proporcionar una mejor experiencia en n³ al momento de entregar, pagar, pedir algun producto y podrán ser transmitidos a nuestra base de datos con la finalidad de tener un registro de clientes virtual, además de otras transmisiones previstas en la Ley de Protección de Datos Personales para el Distrito Federal.</p>

<p>Los datos marcados con un (*) son obligatorios y sin ellos no podrá acceder al servicio o
completar el trámite platarforma de compra online de cubos rubik.</p>

<p>Asimismo, se le informa que sus datos no podrán ser difundidos sin su consentimiento expreso,
salvo las excepciones previstas en la Ley.</p>

<p>El responsable del Sistema de Datos Personales es Luis Tolentino y la dirección
donde podrá ejercer los derechos de acceso, rectificación, cancelación y oposición, así como la
revocación del consentimiento es CDMX México.</p>

<p>El Interesado podrá dirigirse al instituto de Acceso a la Información Pública y Protección der
Datos Personales del Distrito Federal, donde recibirá asesoría sobre los derechos que tutela la
Ley de Protección de Datos Personales para el Distrito Federal al teléfono: 56364336; correo
electrónico: datos.personales@onfodf.org.mx o www. Infodf.org.mx.</p>
					</div>
				</div>
			</div>
		</div>
			<!-- Footer -->
		<footer class="page-footer">
			<div class="container">
				<div class="row">
					<div class="col l4 m6 s6">
						<h class="white-text"><a href="index.php"><h1 class="white-text">n³</h1></a></h>
							<h6 class="white-text">Siguenos en:</h6>
							<br>
							<a class="grey-text text-lighten-3" href="https://www.facebook.com/enealcubon3"><img src="icons/fb.png" height="64px"></a>
							<br> 
							<a class="grey-text text-lighten-3" href="https://twitter.com/enealcubon3"><img src="icons/tw.png" height="64px"></a>
							<br> 
							<a class="grey-text text-lighten-3" href="https://www.instagram.com/enealcubon3/"><img src="icons/ig.png" height="64px"></a>				
					</div>
					<div class="col l4 m6 s6">
					<br>
				 <h5 class="white-text">Más</h5>
				 <br>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="aviso.php">Aviso de privacidad</a></li>
                  <li><a class="grey-text text-lighten-3" href="">Preguntas frecuentes</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Empresa</a></li>
                  <li><a class="grey-text text-lighten-3" href="terminos.php">Términos de uso</a></li>
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