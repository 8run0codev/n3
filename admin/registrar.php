<?php

session_start();
if (isset($_SESSION['Usuario'])) {

?>

<!DOCTYPE html>
<html>
<head>
	<title>Adminitrador</title>
	<meta name=viewport content="width=device-width, initial-scale=1">
	
</head>
<body class="animated fadeIn">


<?php
		if (isset($_GET['Datos'])) {
			echo "Datos No Validos";
		}
		if (isset($_GET['Fornato'])) {
			echo "Fornato No Soportado";
		}
		if (isset($_GET['Bien'])) {
			echo "Los datos se an guardado correctamente";
		}

	?>

	<div>
		<div class="col s12 m12 l12">
			<div class="col s12 m12 l12">
				<form action="admin/altaproducto.php" name="registro" method="post" enctype="multipart/form-data">
					<h5>Agegar producto:</h5>
					<div class="input-field col s12 m6">
						<input placeholder="Nombre" name="nombre" type="text" class="validate">
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
						<input placeholder="Precio $$" name="precio" type="number" class="validate">
					</div>
					<div class="input-field col s12 m6">
						<input placeholder="Descripcion" name="descripcion" type="text" class="validate">
					</div>
					<div class="input-field col s12 m6">
						<input placeholder="Cantidad" name="Cantidad" type="number" min="1" max="999" class="validate">
					</div>
					<div class="file-field input-field col s12">
						<div class="btn">
							<span>Subir imagen</span>
							<input type="file" name="file">
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text">
						</div>
					</div>
					<button class="btn waves-effect waves-light right" type="submit" name="action" class="aceptar">Agregar producto
						<i class="material-icons right">send</i>
					</button>
				</form>
			</div>
		</div>
	</div>

</body>
</html>

<?php
}else{
	header("Location: ../403.html?Error=Acceso denegado");
}

?>