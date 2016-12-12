<?php

session_start();
include '../conexion.php';

	if (isset($_SESSION['Comprador'])) {

		$arreglo=$_SESSION['carrito'];
		$numeroventa=0;
		$re=mysql_query("select * from compras order by numeroventa DESC limit 1") or die(mysql_error());
		while ($f=mysql_fetch_array($re)) {
			$numeroventa=$f['numeroventa'];
		}
		if ($numeroventa==0) {
			$numeroventa=1;
		}else{
			$numeroventa++;
		}
		for ($i=0; $i<count($arreglo); $i++) { 
			mysql_query("insert into compras (numeroventa,nombre,imagen,precio,cantidad,subtotal) values(
				".$numeroventa.",
				'".$arreglo[$i]['Nombre']."',
				'".$arreglo[$i]['Imagen']."',
				'".$arreglo[$i]['Precio']."',
				'".$arreglo[$i]['Cantidad']."',
				'".($arreglo[$i]['Precio']*$arreglo[$i]['Cantidad'])."'
				)")or die(mysql_error());
		}
			
		header("Location: metodo.php");
	}else{

	header("Location: ../Login.php?comp=no se ha iniciado sesion");

	}
?>