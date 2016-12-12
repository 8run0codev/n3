<?php

session_start();
include '../conexion.php';
if (isset($_SESSION['Usuario'])) {

?>

<!DOCTYPE html>
<html>
<head>
	<title>Editar Producto</title>
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
        <script type="text/javascript" src="../js/modificar.js"></script>
</head>
<body>


	<div>
		<div class="col s12 m12 l12">
			<br>
			
			 <h2>Editar/Borrar</h2>
			 <br>

<!-- <form>
        <div class="input-field">
          <input id="search" type="search" required placeholder="Buscar productos para Editar/Borrar">
          <label for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form> -->
      <div name="tabla pedidos">
      	<table border="1px" width="100%" class="striped" >
      		<tr>
      			<td>Id</td>
      			<td>Nombre</td>
      			<td>Precio</td>
      			<td>Eliminar</td>
      			<td>Modificar</td>
      		</tr>
      		<?php
      			$resultado=mysql_query("select * from producto")or die(mysql_error());
      			while ($row=mysql_fetch_array($resultado)) {
						echo '
						<tr>
							<td>
								<input type="hidden" value="'.$row[0].'">'.$row[0].'
								<input type="hidden" class="imagen" value="'.$row[5].'">
							</td>
							<td><input type="text" class="nombre" value="'.$row[1].'"></td>
							<td><input type="text" class="precio" value="'.$row[2].'"></td>
							<td><button class="eliminar waves-effect waves-light btn red accent-4" data-id="'.$row[0].'">Eliminar</button></td>
							<td><button class="modificar waves-effect waves-light btn  green accent-4" data-id="'.$row[0].'">Modificar</button></td>
						</tr>
						';
					}
			
      		?>

      	</table>
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