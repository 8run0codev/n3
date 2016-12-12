<?php

session_start();
if (isset($_SESSION['Usuario'])) {

?>
<?php
	include '../conexion.php';
	if(!isset($_POST['nombre'])  && !isset($_POST['precio'])){
		header("Location: http://ncubico.com/index.php?Datos=Datos No Validos");
	}else{
			$allowedExts = array("gif", "jpeg", "jpg", "png");
			$temp = explode(".", $_FILES["file"]["name"]);
			$extension = end($temp);
			$imagen="";
			$random=rand(1,999999);
			if ((($_FILES["file"]["type"] == "image/gif")
				|| ($_FILES["file"]["type"] == "image/jpeg")
				|| ($_FILES["file"]["type"] == "image/jpg")
				|| ($_FILES["file"]["type"] == "image/pjpeg")
				|| ($_FILES["file"]["type"] == "image/x-png")
				|| ($_FILES["file"]["type"] == "image/png"))){
				//Verificamos que sea una imagen
		  	if ($_FILES["file"]["error"] > 0){
		  		//verificamos que venga algo en el input file
		    	echo "Error numero: " . $_FILES["file"]["error"] . "<br>";
		    }else{
		    	//subimos la imagen

		    	$imagen= $random.'_'.$_FILES["file"]["name"];
		    	if(file_exists("../catalogo/images/".$random.'_'.$_FILES["file"]["name"])){
		      		echo $_FILES["file"]["name"] . " Ya existe. ";
		      	}else{

		      		move_uploaded_file($_FILES["file"]["tmp_name"],
		      		"../catalogo/images/" .$random.'_'.$_FILES["file"]["name"]);
		      		echo "Archivo guardado en " . "../catalogo/images/" .$random.'_'. $_FILES["file"]["name"];
		      		$producto=$_POST['nombre'];
					$descripcion=$_POST['descripcion'];
					$precio=$_POST['precio'];
					$col=$_POST['Color'];
                                        $can=$_POST['Cantidad'];
					$marca=1;
					$cat=1;
					$id=1;
					$Sql="insert into producto (desProd,preProd,idMar,idSubCat,imgProd,col,Cantidad) values(
							'".$producto."',
							'".$precio."',
							'".$marca."',
							'".$cat."',
							'".$imagen."',
							'".$col."',
                                                        '".$can."')";
					mysql_query($Sql)or die(mysql_error());
					
					header ("Location: http://ncubico.com/index.php?Bien=datos guardados");
		      }
		    }
		  }else{
		  echo "Formato no soportado";
		  header("Location: http://ncubico.com/index.php?Formato=no soportado");
		  }

		
	}

}else{
	header("Location: ../403.html?Error=Acceso denegado");
}
?>