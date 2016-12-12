<?php

session_start();
unset($_SESSION['Usuario']);
unset($_SESSION['Comprador']);
header("Location: index.php")

?>