<?php

	session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Empresa</title>
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="../favicatalogo.png" />
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/home.css" media="none" onload="if(media!='all')media='all'"->
	<link rel="stylesheet" type="text/css" href="../css/materialize.css" media="none" onload="if(media!='all')media='all'"->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/materialize.min.js"></script>
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

					<a href="../index.php" id="Logo" class="brand-logo left" title="Inicio"><img src="../img/buenFin.png" height="50px">n³</a>
						<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons"><i class="material-icons">menu</i></i></a>
						<ul  id="enlaces_menu" class="hide-on-med-and-down">
							<li><a href="../catalogo/index.php">Tienda</a></li>
							<li><a href="../ofertas/index.php">Ofertas</a></li>
							<li><a href="../tutoriales/index.php">Tutoriales</a></li>	
							<ul id="" class="hide-on-med-and-down right">	
								<li><a href="../carrito/index.php" id="BotonCarrito" title="Ver Carrito de Compras"><img height="50px" src="../img/carrito.png"></a></li>
								<li><a href="../perfil.php" id="BotonSignUp"><?php echo $usu; ?></a></li>
								<li><a href="../cerrar.php" id="BotonLogin">Cerrar sesión</a></li>				
							</ul>		
						</ul>

						<ul class="side-nav" id="mobile-demo">
							<a href="../carrito/index.php" id="BotonCarrito"><img height="50px" src="../img/carrito.png"></a>
							<li><a href="../perfil.php" id="BotonSignUp"><?php echo $usu; ?></a></li>
							<li><a href="../catalogo/index.php">Tienda</a></li>
							<li><a href="../ofertas/index.php">Ofertas</a></li>	
							<li><a href="../tutoriales/index.php">Tutoriales</a></li>
							<li><a href="../cerrar.php" id="BotonLogin">Cerrar de sesión</a></li>
						</ul>
	
					</div>		
				</nav>	
			</div>
			<script type="text/javascript">$(".button-collapse").sideNav();</script>

					<?php
						}else{ ?>
						<a href="../index.php" id="Logo" class="brand-logo left" title="Inicio"><img src="../img/buenFin.png" height="50px">n³</a>
						<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons"><i class="material-icons">menu</i></i></a>
						<ul  id="enlaces_menu" class="hide-on-med-and-down">
							<li><a href="../catalogo/index.php">Tienda</a></li>
							<li><a href="../ofertas/index.php">Ofertas</a></li>
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
							<li><a href="../ofertas/index.php">Ofertas</a></li>	
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

	<div>
		<div class="container">
			<div class="row">
				<div class="col l12 m12 s12">
					<h4>La historia del cubo </h4>
					<p>
						<br>
						Uno de los juguetes más presentes en las casas cumple 40 años. Google ya le ha rendido particular  homenaje con un magnífico Doodle. En el Valor de las cosas, repasamos su historia y alguna de sus cifras más curiosas y desconocidas.
						<br><br>
						El original rompecabezas fue inventado en 1974 por Erno Rubik, un escultor y profesor de arquitectura  de la Universidad de Budapest. Poco hacía presagiar que esa idea original se convertiría con los años en el juguete más vendido del mundo.
						<br><br>
						Para Erno, su cubo era más que un juguete, suponía un instrumento para explicar a sus alumnos conceptos académicos como las relaciones espaciales o los contrastes de la condición humana a través de un objeto de arte que exploraba nuevas formas.
						<br><br>
						Como ya mostramos anteriormente en El valor de una buena idea, una cosa es idear un producto y otra, registrar la patente para comercializarlo.  Después de haber presentado el prototipo a alumnos y amigos, Enzo decidió registrar su invento en 1975 en la oficina de patentes de Hungría con el nombre de cubo mágico.
						<br><br>
						Los primeros cubos mágicos fueron fabricados y distribuidos en Hungría por Politechnika, consiguiendo una gran aceptación entre los habitantes del país. Durante esos años, Hungría pertenecía al régimen comunista, por lo que resultaba difícil que los cubos mágicos de Rubik fueran exportados de forma masiva a otros países durante esos años.
						<br><br>
						No fue hasta la celebración de la Feria del Juguete de Nuremberg cuando el destino de los cubos mágicos cambiaría para siempre. En esta feria el cubo hizo las delicias de los asistentes y Tom Kremer, un especialista del mundo de los juguetes, se comprometió a venderlo y distribuirlo por todo el mundo a través de la empresa Toy Company,  no sin antes establecer un nuevo nombre para el producto: “Cubo de Rubik”.

						<br>
					</p>
					<center><img src="../img/h.jpg" width="100%"></center>
					<h4>Conocenos</h4>
					<p>n3.com es la Tienda Online especializada en venta de cubos rubik on linea, en nuestro catálogo encontrarás una amplia variedad de cubos de acuerdo a tus expectativas y que puedes adquirir en Internet y recibirlos en la comodidad de tu casa.

						Disponemos de muchas facilidades de pago: depósito bancario, pago en Oxxo, transferencia electrónica, pay pal y la opción de pagar al momento de recoger tu producto en nuestras tiendas física, ya sea en efectivo o con tarjeta de crédito. </p>
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
                  <li><a class="grey-text text-lighten-3" href="#!">Empresa</a></li>
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