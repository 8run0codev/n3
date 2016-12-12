<?php
//Archivo de conexión a la base de datos
$server="mysql.hostinger.mx";
	$username="u887302653_root";
	$password="n0m3l0";
	$db='u887302653_ncubo';
	// Conexion 
	$con=mysqli_connect($server,$username,$password) or die("No se ha podido establecer la conexion"); //=== Conexion a mysql
	$sdb=mysqli_select_db($con,$db)or die("La base de datos no existe"); //=== seleccionamos la base de datos

//Variable de búsqueda
$consultaBusqueda = $_POST['valorBusqueda'];

//Filtro anti-XSS
$caracteres_malos = array("<", ">", "\"", "'", "/", "<", ">", "'", "/");
$caracteres_buenos = array("& lt;", "& gt;", "& quot;", "& #x27;", "& #x2F;", "& #060;", "& #062;", "& #039;", "& #047;");
$consultaBusqueda = str_replace($caracteres_malos, $caracteres_buenos, $consultaBusqueda);

//Variable vacía (para evitar los E_NOTICE)
$mensaje = "";


//Comprueba si $consultaBusqueda está seteado
if (isset($consultaBusqueda)) {

	//Selecciona todo de la tabla mmv001 
	//donde el nombre sea igual a $consultaBusqueda, 
	//o el apellido sea igual a $consultaBusqueda, 
	//o $consultaBusqueda sea igual a nombre + (espacio) + apellido
	$consulta = mysqli_query($con, "SELECT * FROM producto
	WHERE desProd COLLATE UTF8_SPANISH_CI LIKE '%$consultaBusqueda%' 

	");

	//Obtiene la cantidad de filas que hay en la consulta
	$filas = mysqli_num_rows($consulta);

	//Si no existe ninguna fila que sea igual a $consultaBusqueda, entonces mostramos el siguiente mensaje
	if ($filas === 0) {
		$mensaje = "<p>No hay productos segun su busqueda</p>";
	} else {
		//Si existe alguna fila que sea igual a $consultaBusqueda, entonces mostramos el siguiente mensaje
		echo 'Resultados para <strong>'.$consultaBusqueda.'</strong>';

		//La variable $resultado contiene el array que se genera en la consulta, así que obtenemos los datos y los mostramos en un bucle
		while($resultados = mysqli_fetch_array($consulta)) {
			$desProd = $resultados['desProd'];
			$apellido = $resultados['apellido'];
			$edad = $resultados['edad'];

			//Output
			$mensaje .= '<p><strong>PRODUCTO:</strong> ' . $desProd . '<br></p>';

		};//Fin while $resultados

	}; //Fin else $filas

};//Fin isset $consultaBusqueda

//Devolvemos el mensaje que tomará jQuery
echo $mensaje;
?>