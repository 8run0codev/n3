<?php
	
	session_start();
include '../conexion.php';
if (isset($_SESSION['Comprador'])) {

}else{
	header("Location: index.php?Error=Acceso denegado");
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Metodo de Pago</title>
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="favicon.png" />
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/home.css">
	<link rel="stylesheet" type="text/css" href="../dist/sweetalert.css">
	<link rel="stylesheet" type="text/css" href="../css/materialize.css">
	<!-- Carga asincronica media="none" onload="if(media!='all')media='all'"-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script type="text/javascript" async src="../js/validacionmetodo.js"></script>
	<script type="text/javascript" async src="../js/jquery.js"></script>
	<script type="text/javascript" async src="../js/materialize.min.js"></script>
	<script src="../dist/sweetalert-dev.js"></script> 

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
								<li><a href="index.php" id="BotonCarrito" title="Ver Carrito de Compras"></a></li>
								<li><a href="../perfil.php" id="BotonSignUp"><?php echo $usu; ?></a></li>
								<li><a href="../cerrar.php" id="BotonLogin">Cerrar sesión</a></li>				
							</ul>		
						</ul>

						<ul class="side-nav" id="mobile-demo">
							<a href="index.php" id="BotonCarrito"><img height="50px" src="../img/carrito.png"></a>
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
						<a href="../index.php" id="Logo" class="brand-logo left" title="Inicio">n³</a>
						<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons"><i class="material-icons">menu</i></i></a>
						<ul  id="enlaces_menu" class="hide-on-med-and-down">
							<li><a href="../catalogo/index.php">Tienda</a></li>
							<li><a href="../ofertas/index.php">Ofertas</a></li>
							<li><a href="../tutoriales/index.php">Tutoriales</a></li>	
							<ul id="" class="hide-on-med-and-down right">	
								<li><a href="index.php" id="BotonCarrito" title="Ver Carrito de Compras"><img height="50px" src="../img/carrito.png"></a></li>
								<li><a href="../SignUp.php" id="BotonSignUp">Registrate</a></li>
								<li><a href="../Login.php" id="BotonLogin">Inicio de sesión</a></li>				
							</ul>		
						</ul>

						<ul class="side-nav" id="mobile-demo">
						|	<a href="index.php" id="BotonCarrito"><img height="50px" src="../img/carrito.png"></a>	
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


	<div class="container">
		<div class="row">	
			<div class="s12 m12 l12 center">
				<a href="index.php"><h1>n³</h1></a>
			</div>
			<div class="col s12 m12 l12">
				<br>
				<hr width="50%">
			</div>

			<!-- Registrar cuenta -->
			<div class="col s0 m0 l3"></div>
			<div class="col s12 m12 l6 center"  id="signup ">
				<form name="signup" method="post" action="pago.php" onsubmit="return validar();">
					<br><label><h4>Metodo de Pago:</h4></label>
					<select name="pag" id="pag" class="browser-default col s12 m12 l12">
						<option value="" disabled selected>Elegir</option>
						<optgroup label="Tarjeta de Credito" >
						<option value="master" id="master">Mastercard</option>
						<option value="america" id="ame">American Express</option>
						<option value="visa" id="visa">Visa</option>
						</optgroup>
						<optgroup label="Otros">
						<option value="oxxo" id="oxxo">Pago en efectivo</option>
						</optgroup>
					</select>	
					<div class="center col s12 m12 l12">	
						<br>
						<button class="btn waves-effect waves-light right" type="submit" name="enviar">Continuar
							<i class="material-icons right">send</i>
						</button>
						
					</div>

				</form>	
			</div>

			<!-- Fin registrar cuenta -->	
		</div>
	</div>
</body>
</html>

