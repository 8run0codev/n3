<!DOCTYPE html>
<html>
<head>
	<title>Adminitrador</title>
	<link rel="shortcut icon" href="favicon.png" />
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/home.css" media="none" onload="if(media!='all')media='all'">
	<link rel="stylesheet" type="text/css" href="css/materialize.css" media="none" onload="if(media!='all')media='all'">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script type="text/javascript"  src="js/jquery.js"></script>
	<script type="text/javascript"  src="js/materialize.min.js"></script>
</head>
<body>

	<!--Inicio de la barra de navegacion-->
	<div class="navbar-fixed">
		<nav>
			<div class="nav-wrapper">
				<a href="#" id="Logo" class="brand-logo left">n³</a>
				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons"><i class="material-icons">menu</i></i></a>
				<ul  id="enlaces_menu" class="hide-on-med-and-down">
					<li><a href="admin.php"><h5>Administración</h5></a></li>
					<ul id="" class="hide-on-med-and-down right">	
						<li><a href="#" id="BotonSignUp">Nombre usuario</a></li>
						<li><a href="#" id="BotonLogin">Cerrar sesión</a></li>				
					</ul>		
				</ul>

				<ul class="side-nav" id="mobile-demo">
					<li><a href="#">Administración</a></li>
					<li><a href="#" id="BotonSignUp">Nombre usuario</a></li>
					<li><a href="#" id="BotonLogin">Cerrar sesión</a></li>

				</ul>
			</div>		
		</nav>	
	</div>
	<script type="text/javascript">$(".button-collapse").sideNav();</script>
	<!-- Fin de la barra de navegacion-->


	<div class="container">
		<div class="row">
			<div class="col s12 m12 l12">
				<form action="" name="" method="post">
					<h5>Agegar producto:</h5>
					<div class="input-field col s12 m6">
						<input placeholder="Nombre" id="nombre" type="text" class="validate">
					</div>
					<div class="input-field col s12 m6">
						<input placeholder="Marca" id="Marca" type="text" class="validate">
					</div>
					<div class="input-field col s12 m6">
						<input placeholder="Categoria" id="Categoria" type="text" class="validate">
					</div>
					<div class="input-field col s12 m6">
						<input placeholder="SubCategoria" id="SubCategoria" type="text" class="validate">
					</div>
					<div class="input-field col s12 m6">
						<input placeholder="Color" id="Color" type="text" class="validate">
					</div>
					<div class="input-field col s12 m6">
						<input placeholder="Precio $$" id="Precio" type="text" class="validate">
					</div>
					<div class="input-field col s12 m12">
						<textarea id="descripcion" class="materialize-textarea"></textarea>
						<label for="descripcion">Descripción</label>
					</div>
					<div class="file-field input-field col s12">
						<div class="btn">
							<span>Subir imagen</span>
							<input type="file">
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text">
						</div>
					</div>
					<button class="btn waves-effect waves-light right" type="submit" name="action">Agregar producto
						<i class="material-icons right">send</i>
					</button>
				</form>
			</div>
		</div>
	</div>

</body>
</html>