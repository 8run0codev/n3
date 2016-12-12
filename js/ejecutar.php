<?php 
	include "../conexion.php";
	if($_POST['Caso']=="Eliminar"){
		mysql_query("delete from producto where idProd=".$_POST['Id']);
		unlink("../catalogo/images/".$_POST['Imagen']);
		echo 'El producto se ha eliminado';
	}
	if($_POST['Caso']=="Modificar"){
		mysql_query("update producto set desProd='".$_POST['Nombre']."' where idProd=".$_POST['Id']);
		mysql_query("update producto set preProd='".$_POST['Precio']."' where idProd=".$_POST['Id']);
		echo 'El producto se ha modificado';
	}

?>