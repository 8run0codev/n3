<?php

session_start();
include '../conexion.php';
if (isset($_SESSION['Usuario'])) {

?>

<!DOCTYPE html>
<html>
<head>
	<title>Pedidos</title>
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
</head>
<body>


	<div>
		<div class="col s12 m12 l12">
			<br>
			<br>

      <div name="tabla pedidos">
      	<table border="1px" width="100%">
      		<tr>
      			<td>Imagen</td>
      			<td>Nombre</td>
      			<td>Precio</td>
      			<td>Cantidad</td>
      			<td>Subtotal</td>
      		</tr>
      		<?php
      			$re=mysql_query("select * from compras");
      			$numeroventa=0;
      			while ($f=mysql_fetch_array($re)) {
					if($numeroventa	!=$f['numeroventa']){
						echo '<tr class="striped"><td>Compra Número: '.$f['numeroventa'].'  </td></tr>';
					}
					$numeroventa=$f['numeroventa'];
					echo '<tr>
						<td><img src="catalogo/images/'.$f['imagen'].'" width="100px" heigth="100px" /></td>
						<td>'.$f['nombre'].'</td>
						<td>'.$f['precio'].'</td>
						<td>'.$f['cantidad'].'</td>
						<td>'.$f['subtotal'].'</td>

					</tr>';
			}
      		?>

      	</table>
      </div>
    	<div  style="margin-top: 35%;">
    		<p>

      		<a class="btn-floating btn-large waves-effect waves-light red right" href="registrar.php"><i class="material-icons" >add</i></a>
      		</p>
    	</div>
		<div class="fixed-action-btn horizontal">
    <a class="btn-floating btn-large red" href="editar.php">
      <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
      <li><a class="txt-floating" style="color: red" >Añadir</a></li>
    </ul>
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