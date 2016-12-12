<?php
	//Declaracion de variables
	$server="mysql.hostinger.mx";
	$username="u887302653_root";
	$password="n0m3l0";
	$db='u887302653_ncubo';
	// Conexion 
	$con=mysql_connect($server,$username,$password) or die("No se ha podido establecer la conexion"); //=== Conexion a mysql
	$sdb=mysql_select_db($db,$con)or die("La base de datos no existe"); //=== seleccionamos la base de datos
?>