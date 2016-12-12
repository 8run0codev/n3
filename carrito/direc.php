<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Direccion</title>
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="../favicon.png" />
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/home.css" media="none" onload="if(media!='all')media='all'">
	<link rel="stylesheet" type="text/css" href="../css/materialize.css" media="none" onload="if(media!='all')media='all'">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/materialize.min.js"></script>
	<script type="text/javascript" src="../js/direc.js"></script>
	<script type="text/javascript" src="../dist/sweetalert.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../dist/sweetalert.css">

</head>
<body>
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
							<li><a href="index.php" id="BotonCarrito" title="Ver Carrito de Compras"><img height="50px" src="../img/carrito.png"></a></li>
							<li><a href="../perfil.php" id="BotonSignUp"><?php echo $usu; ?></a></li>
							<li><a href="../cerrar.php" id="BotonLogin">Cerrar sesión</a></li>				
						</ul>		
					</ul>

					<ul class="side-nav" id="mobile-demo">
						<a href="index.php" id="BotonCarrito"></a>
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

<!-- direccion carrito-->

<script type="text/javascript" src="../js/mapa.js"></script>
	<DIV class="container">
		<div class="row">
		<div class="col s12 m12 l12">
			<h4 class="grey-text">Dirección de envio:</h4>
		   <div id="locationField">
      <input id="autocomplete" placeholder="Busca tu dirección"
             onFocus="geolocate()" type="text"></input>
    </div>

  <form name="Envio" method="POST" action="ticket.php" onsubmit="return validar()">
  	  <table id="address">
      <tr>
        <td class="label">Calle y numero</td>
        <td class="slimField"><input class="field" maxlength="6" id="street_number" placeholder="Numero #98" 
              disabled="true"></input></td>
        <td class="wideField" colspan="2"><input class="field" id="route"
              disabled="true" placeholder="Calle de envio"></input></td>
      </tr>
      <tr>
        <td class="label">Ciudad</td>
        <td class="wideField" colspan="3"><input class="field" id="locality"
              disabled="true" class="Ciudad" placeholder="Ciudad"></input></td>
      </tr>
      <tr>
        <td class="label">Estado</td>
        <td class="slimField"><input class="field"
              id="administrative_area_level_1" disabled="true" placeholder="Estado"></input></td>
        <td class="label">Codigo postal</td>
        <td class="wideField"><input maxlength="5" class="field" id="postal_code"
              disabled="true" placeholder="Codigo Postal"></input></td>
      </tr>
      <tr>
        <td class="label">Pais</td>
        <td class="wideField" colspan="3"><input class="field"
              id="country" disabled="true" placeholder="Pais"></input></td>
      </tr>
    </table>
     <input type="submit" class="waves-effect waves-light btn-large right" name="" value="Finalizar compra e imprimir ticket" >
  </form>


	</div>
	</DIV>



<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBbd4VcBosWDU__kFedXVMAwvjy5m0qu9Y&libraries=places&callback=initAutocomplete" async defer></script>


<!-- direccion carrito-->



</body>
</html>