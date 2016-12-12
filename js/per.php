<?php  
        session_start();
	include "../conexion.php";
	if($_POST['Caso']=="Eliminar"){
		mysql_query("delete from cuenta where Nombre=".$_POST['Id']);
                unset($_SESSION['Usuario']);
                unset($_SESSION['Comprador']);
                header("Location: index.php");
		echo 'La cuenta se ha eliminado';
	}

?>	