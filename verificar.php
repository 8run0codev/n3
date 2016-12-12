<?php

session_start();
include 'conexion.php';
$re=mysql_query("select * from cuenta where Correo='".$_POST['mail']."' AND Password='".$_POST['pass']."'") or die(mysql_error());
	
	while ($f=mysql_fetch_array($re)) {
		$tip=$f['tipo'];

		if ($tip==1) {
			$arreglo[]=array('Nombre'=>$f['Nombre'],
							'Apellido'=>$f['Apellido'],
							'Tipo'=>$f['tipo']);
		}elseif ($tip==2) {
			$cosa[]=array('Nombre'=>$f['Nombre'],
				      'Apellido'=>$f['Apellido'],
                                      'Apm'=>$f['apm'],
                                      'Usu'=>$f['Usuario'],
                                      'Pass'=>$f['Password'],
                                      'Correo'=>$f['Correo'],
		              	      'Tipo'=>$f['tipo']);
		}

	}
	if(isset($arreglo)){
		$_SESSION['Usuario']=$arreglo;
		header("Location: index.php");
	}elseif (isset($cosa)) {
		$_SESSION['Comprador']=$cosa;
		if (isset($_POST['ver'])) {
			header("Location: carrito/compras.php");
		}else{
		header("Location: index.php");
		}
	}else{	

		header("Location: Login.php?error=datos no validos");
	}

?>