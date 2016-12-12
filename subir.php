<?php

session_start();
include '../conexion.php';
if (isset($_SESSION['Usuario'])) {

}else{
	header("Location: ../index.php?Error=Acceso denegado");
}

?>

<?php
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellidopaterno'];

        $aom=$_POST['apellidomaterno'];
	$usuario=$_POST['user'];
	$password=$_POST['password'];
	$correo=$_POST['correo'];
	$tipo=1;
	$Sql="insert into cuenta (Nombre,Apellido,apm,Usuario,Password,Correo,tipo)
			values(
				'".$nombre."',
				'".$apellido."',
                                '".$apm."',
				'".$usuario."',
				'".$password."',
				'".$correo."',
				'".$tipo."')";

	mysql_query($Sql)or die(mysql_error());
	header("Location: ../index.php");



?>