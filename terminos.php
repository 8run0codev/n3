<?php

	session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Términos y condiciones</title>
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="favicatalogo.png" />
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/home.css" >
	<link rel="stylesheet" type="text/css" href="css/materialize.css">
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

					<a href="../index.php" id="Logo" class="brand-logo left" title="Inicio">n³</a>
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
						<a href="index.php" id="Logo" class="brand-logo left" title="Inicio">n³</a>
						<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons"><i class="material-icons">menu</i></i></a>
						<ul  id="enlaces_menu" class="hide-on-med-and-down">
							<li><a href="catalogo/index.php">Tienda</a></li>
							<li><a href="ofertas/index.php">Ofertas</a></li>
							<li><a href="tutoriales/index.php">Tutoriales</a></li>	
							<ul id="" class="hide-on-med-and-down right">	
								<li><a href="carrito/index.php" id="BotonCarrito" title="Ver Carrito de Compras"><img height="50px" src="../img/carrito.png"></a></li>
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
					<h4>Términos de uso</h4>
					1. Introducción

<p>Las presentes condiciones generales de uso de la página web, regulan los términos y condiciones de acceso y uso de www.ncubico.com, propiedad de n³, con domicilio en México DF y con Código de Identificación Fiscal número 852148154, en adelante, «la Empresa», que el usuario del Portal deberá de leer y aceptar para usar todos los servicios e información que se facilitan desde el portal. El mero acceso y/o utilización del portal, de todos o parte de sus contenidos y/o servicios significa la plena aceptación de las presentes condiciones generales de uso. </p>

2. Condiciones de uso

<p>Las presentes condiciones generales de uso del portal regulan el acceso y la utilización del portal, incluyendo los contenidos y los servicios puestos a disposición de los usuarios en y/o a través del portal, bien por el portal, bien por sus usuarios, bien por terceros. No obstante, el acceso y la utilización de ciertos contenidos y/o servicios puede encontrarse sometido a determinadas condiciones específicas.</p>

3.   Modificaciones

<p>La empresa se reserva la facultad de modificar en cualquier momento las condiciones generales de uso del portal. En todo caso, se recomienda que consulte periódicamente los presentes términos de uso del portal, ya que pueden ser modificados.</p>

4. Obligaciones del Usuario

<p>El usuario deberá respetar en todo momento los términos y condiciones establecidos en las presentes condiciones generales de uso del portal. De forma expresa el usuario manifiesta que utilizará el portal de forma diligente y asumiendo cualquier responsabilidad que pudiera derivarse del incumplimiento de las normas.

Así mismo, el usuario no podrá utilizar el portal para transmitir, almacenar, divulgar promover o distribuir datos o contenidos que sean portadores de virus o cualquier otro código informático, archivos o programas diseñados para interrumpir, destruir o perjudicar el funcionamiento de cualquier programa o equipo informático o de telecomunicaciones.</p>

5. Responsabilidad del portal

<p>El usuario conoce y acepta que el portal no otorga ninguna garantía de cualquier naturaleza, ya sea expresa o implícita, sobre los datos, contenidos, información y servicios que se incorporan y ofrecen desde el Portal.

Exceptuando los casos que la Ley imponga expresamente lo contrario, y exclusivamente con la medida y extensión en que lo imponga, el Portal no garantiza ni asume responsabilidad alguna respecto a los posibles daños y perjuicios causados por el uso y utilización de la información, datos y servicios del Portal.

En todo caso, el Portal excluye cualquier responsabilidad por los daños y perjuicios que puedan deberse a la información y/o servicios prestados o suministrados por terceros diferentes de la Empresa. Toda responsabilidad será del tercero ya sea proveedor o colaborador.</p>

6. Propiedad intelectual e industrial

<p>Todos los contenidos, marcas, logos, dibujos, documentación, programas informáticos o cualquier otro elemento susceptible de protección por la legislación de propiedad intelectual o industrial, que sean accesibles en el portal corresponden exclusivamente a la empresa o a sus legítimos titulares y quedan expresamente reservados todos los derechos sobre los mismos. Queda expresamente prohibida la creación de enlaces de hipertexto (links) a cualquier elemento integrante de las páginas web del Portal sin la autorización de la empresa, siempre que no sean a una página web del Portal que no requiera identificación o autenticación para su acceso, o el mismo esté restringido.</p>

En cualquier caso, el portal se reserva todos los derechos sobre los contenidos, información datos y servicios que ostente sobre los mismos. El portal no concede ninguna licencia o autorización de uso al usuario sobre sus contenidos, datos o servicios, distinta de la que expresamente se detalle en las presentes condiciones generales de uso del portal.</p>

7. Legislación aplicable, jurisdicción competente y notificaciones

<p>Las presentes condiciones se rigen y se interpretan de acuerdo con las Leyes de México. Para cualquier reclamación serán competentes los juzgados y tribunales de CDMX. Todas las notificaciones, requerimientos, peticiones y otras comunicaciones que el Usuario desee efectuar a la Empresa titular del Portal deberán realizarse por escrito y se entenderá que han sido correctamente realizadas cuando hayan sido recibidas en la siguiente dirección soporte@n3.com .</p>
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
                  <li><a class="grey-text text-lighten-3" href="#!">Preguntas frecuentes</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Empresa</a></li>
                  <li><a class="grey-text text-lighten-3" href="terminos.php">Términos de uso</a></li>
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