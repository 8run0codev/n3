<!DOCTYPE html>
<html>
<head>
	<title>Registrate</title>
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="favicon.png" />
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
	<link rel="stylesheet" type="text/css" href="css/materialize.css">
	<!-- Carga asincronida media="none" onload="if(media!='all')media='all'"-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script type="text/javascript" async src="js/validacionessignup.js"></script>
	<script type="text/javascript" async src="js/jquery.js"></script>
	<script type="text/javascript" async src="js/materialize.min.js"></script>
	<script src="dist/sweetalert-dev.js"></script> 
	<link rel="stylesheet" type="text/css" href="css/animate.min.css">

</head>
<body>
	<noscript>
		<div class="container">
			<center class="animated pulse infinite">
				<h5><p>ATENCIÓN</p></h5>
				<font color="red"><h5 class="red-text"><p>La página que estás viendo requiere para su funcionamiento el uso de JavaScript. 
					Si lo has deshabilitado intencionadamente, por favor vuelve a activarlo.</p></h5></font>
				</center>
			</div>
		</noscript>
			
	<div class="container">
		<div class="row">	
			<div class="s12 m12 l12 center">
				<a href="index.php"><h1>n³</h1></a>
			</div>
			<div class="col s12 m12 l12">
				<br>
				<hr width="50%">
			</div>


<?php

							if (isset($_GET['error'])) {
								echo '<center><h4 class="red-text">Datos no validos</h4></center>';
							}
							if (isset($_GET['comp'])) {
								echo '<center><h4 class="red-text">Inicie sesión para continuar</h4></center>';
								?>
								<input type="hidden" name="ver" value="comp">
								<?php
							}

                                                        if(isset($_GET['existe'])){
                                                                echo'<center>ya hay una cuenta con ese correo</center>';
                                                        }

							?>

			<!-- Registrar cuenta -->
			<div class="col s0 m0 l3"></div>
			<div class="col s12 m12 l6 "  id="signup ">
				<form name="signup" method="post" action="cuneta.php" onsubmit="return validar();">
					<br><label><h4>Registra una cuenta nueva:</h4></label>
					<br><label>Nombre(s)</label>
					<input type="text" name="nombre" id="nombre">
					<div class="col s6">
						<label>Apellido Paterno</label>
						<input type="text" name="apellidopaterno" id="apellidopaterno">	
					</div>
					<div class="col s6">
						<label>Apellido Materno</label>
						<input  type="text" name="apellidomaterno" id="apellidomaterno">
					</div>
					<label>Genero</label><br><br>
					<input name="Genero" type="radio" id="Masculino"/>
					<label for="Masculino">Masculino</label>
					<input name="Genero" type="radio" id="Femenino"/>
					<label for="Femenino" class="right">Femenino</label><br><br>
					<label class="col s12 m12 l12">Fecha de nacimiento: DD/MM/YYYY</label>
					<div class="col s4 m4 l4">
						<input type="text" name="day" id="day" placeholder="Día">
					</div>	 
					<select id="opc" class="browser-default col s4 m4 l4">
						<option value="0" disabled selected>Mes</option>
						<option value="01">Enero</option>
						<option value="02">Febrero</option>
						<option value="03">Marzo</option>
						<option value="04">Abril</option>
						<option value="05">Mayo</option>
						<option value="06">Junio</option>
						<option value="07">Julio</option>
						<option value="08">Agostp</option>
						<option value="09">Septiembre</option>
						<option value="10">Octubre</option>
						<option value="11">Noviembre</option>
						<option value="12">Diciembre</option>
					</select>	
					<div class="col s4 m4 l4">
						<input type="text" name="year" id="year" placeholder="Año">
					</div>					
					<div class="col s6 m6 l6">
						<label>Usuario</label>
						<input type="text" name="user" id="user">
					</div>
					<div class="col s6 m6 l6">
						<label>Correo</label>
						<input type="text" name="correo" id="correo">
					</div>
					<div class="col s6 m6 l6">
						<label>Contraseña:</label>
						<input type="password" name="pass" id="pass" size="30" >
					</div>
					<div class="col s6 m6 l6">
						<label>Confirma contraseña:</label>
						<input type="password" name="pass2" id="pass2" size="30" >
					</div>
					<div class="center col s12 m12 l12">	
						<br>
						<button class="btn waves-effect waves-light left" type="submit" name="enviar">Enviar
							<i class="material-icons right">send</i>
						</button>

						<button class="btn waves-effect waves-light right" type="reset" name="enviar">Restablecer</button>
						
					</div>

				</form>	
				<p class="col s12 m12 l12 center"><h6 class="center">¿Ya tienes una cuenta? <a href="Login.php">Iniciar sesión</a> </h6></p>
			</div>

			<!-- Fin registrar cuenta -->	
		</div>
	</div>
</body>
</html>

