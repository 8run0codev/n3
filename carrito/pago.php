<?php
	
	session_start();

	if ($_POST['pag']=="master") {
		header("Location: master.php");
	}

	if ($_POST['pag']=="america") {
		header("Location: america.php");
	}

	if ($_POST['pag']=="visa") {
		header("Location: visa.php");
	}

	if ($_POST['pag']=="oxxo") {
		header("Location: oxxo.php");
	}

?>