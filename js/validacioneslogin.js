function validar() {

	var correo;
	var pass;

	correo = document.getElementById("mail").value;
	pass = document.getElementById("pass").value;

	expresion = /^\w+([\.\+\-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;

	if (correo === "" || pass === "") 
	{
		sweetAlert("Oops...", "Todos los campos son obligatorios", "error");
		return false;
	}

	else if (!expresion.test(correo)) 
	{
		sweetAlert("Oops...", "Correo no valido", "error");
		return false;
	}
	

}		