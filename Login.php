<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Inicio de sesión</title>
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="favicon.png" />
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
	<link rel="stylesheet" type="text/css" href="css/materialize.css" > <!-- Carga asincronida media="none" onload="if(media!='all')media='all'"-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script type="text/javascript" async src="js/validacioneslogin.js"></script>
	<script type="text/javascript" async src="js/jquery.js"></script>
	<script type="text/javascript" async src="js/materialize.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/animate.min.css">
	<script src="dist/sweetalert-dev.js"></script> 

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
		
		<!-- Formularios-->
		<div class="container" id="login_form ">
			<div class="row">
				<div class="col s12 m12 l12">		
					<center><a href="index.php"><h1>n³</h1></a></center>
				</div>

				<div class="col s12 m12 l12">
					<br>

				</div>



				<div class="col s12 m12 l12">
				</div>
				<!-- login cuenta  -->
				<div class="s12 m12 l12">
					<div class="col s0 m2 l3"></div>
					<div class="col s12 m8 l6 " id="login">


						<form name="login" method="post" action="verificar.php" onsubmit="return validar();">

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

                                                        if(isset($_GET['registrado'])){
                                                                echo'<center>Tu Cuenta ha sido registrada</center>';
                                                        }

							?>


							<br><label>Correo:</label>
							<input type="text" name="mail" id="mail" size="30">
							<br><label>Contraseña:</label>
							<input type="password" name="pass" id="pass" size="30" >
							<br>
							<button class="btn waves-effect waves-light left" type="submit" name="enviar">Enviar
								<i class="material-icons right">send</i>
							</button>
							<button class="btn waves-effect waves-light right" type="reset" name="enviar">Restablecer</button>
							<br><br>
							<p class="center">¿No tienes cuenta? <a href="SignUp.php">Regístrate</a> </p>
							<br>
							<br>
						</form>
					</div>
					<div class="col s0 m2 l3"></div>	
				</div>
				<!-- Fin login cuenta  -->

			</div>
		</div>
		<!-- Formularios-->

	</body>
	</html>
		