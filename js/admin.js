function validar() {

	var nombre;
	var apellidopaterno;
	var apellidomaterno;
	var correo;
	var pass;
	var pass2;
	var user;

	nombre = document.getElementById("nombre").value;
	apellidopaterno = document.getElementById("apellidopaterno").value;   
	apellidomaterno = document.getElementById("apellidomaterno").value;         
	correo = document.getElementById("correo").value;
	pass = document.getElementById("pass").value;
	pass2 = document.getElementById("pass2").value; 	   
	user = document.getElementById("user").value;

	expresion = /\w+@\w+\.+[a-z]/;

	if (nombre === "" || apellidomaterno === "" || apellidopaterno === "" || user === "" || correo === "" || pass === "") {
		sweetAlert("Oops...", "Todos los campos son obligatorios", "error");
		return false;
	}

	if (nombre <= 0 || nombre >= 0) {
		sweetAlert("Oops...", "El nombre no puede contener numeros", "error");
		return false;
	}

	if (apellidopaterno <= 0 || apellidopaterno >= 0) {

		sweetAlert("Oops...", "El apellido paterno no puede contener numeros", "error");
		return false;
	}

	if (apellidomaterno <= 0 || apellidomaterno >= 0) {

		sweetAlert("Oops...", "El apellido materno no puede contener numeros", "error");
		return false;
	}

	if (user <= 0 || user >= 0) {
		sweetAlert("Oops...", "El usuario no puede contener numeros", "error");
		return false;
	}

	if (!expresion.test(correo)) 
	{
		sweetAlert("Oops...", "El correo no es correcto", "error");
		return false;
	}


	if (pass != pass2) 
	{

		sweetAlert("Oops...", "Las contraseñas no son iguales", "error");

		return false;
	}



	var largopass = pass.length;

	if (largopass <= 4) 
	{
		sweetAlert("Oops...", "La contraseña debe tener almens 5 caracteres", "error");
		return false;
	}


}