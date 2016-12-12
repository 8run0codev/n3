function validar() {

	var nombre;
	var apellidopaterno="";
	var apellidomaterno="";
	var correo="";
	var pass="";
	var pass2="";
	var year="";
	var dia="";
	var genero="";
	var user="";

	nombre = document.getElementById("nombre").value;
	apellidopaterno = document.getElementById("apellidopaterno").value;   
	apellidomaterno = document.getElementById("apellidomaterno").value;         
	correo = document.getElementById("correo").value;
	dia = document.getElementById("day").value;
	year = document.getElementById("year").value;
	pass = document.getElementById("pass").value;
	pass2 = document.getElementById("pass2").value; 	
	indice = document.getElementById("opc").selectedIndex;    
	genero = document.getElementsByName("Genero");
	user = document.getElementById("user").value;

	expresion = /^(?:[^<>()[\].,;:\s@"]+(\.[^<>()[\].,;:\s@"]+)*|"[^\n"]+")@(?:[^<>()[\].,;:\s@"]+\.)+[^<>()[\]\.,;:\s@"]{2,63}$/i;
	expresion1 = /^[a-zA-Z·ÈÌÛ˙¡…Õ”⁄]*$/i;

	if (nombre === "" || apellidomaterno === "" || apellidopaterno === "" || user === "" || correo === "" || pass === "" || dia === "" || year === "") {
		sweetAlert("Oops...", "Todos los campos son obligatorios", "error");
		return false;
	}

	if (nombre <= 0 || nombre >= 0) {
		sweetAlert("Oops...", "El nombre no puede contener numeros", "error");
		return false;
	}
	if (expresion1.test(nombre)) {
		
	}
	else
	{
		sweetAlert("Oops...", "El nombre no es valido", "error");
		return false;
	} 

	if (expresion1.test(apellidopaterno)) {
		
	}
	else
	{
		sweetAlert("Oops...", "El apellido paterno no es valido", "error");
		return false;
	}

	if (expresion1.test(apellidomaterno)) {

	}
	else{
		sweetAlert("Oops...", "El apellido materno no es valido", "error");
		return false;
	}

	if (expresion1.test(user)) {
		
	}
	else{
		sweetAlert("Oops...", "El apellido usuario no es valido", "error");
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

	if (!expresion.test(correo)) 
	{
		sweetAlert("Oops...", "El correo no es correcto", "error");
		return false;
	}


	if (pass != pass2) 
	{

		sweetAlert("Oops...", "Las contrase√±as no son iguales", "error");

		return false;
	}

	if (isNaN(dia)) 
	{
		sweetAlert("Oops...", "El dia tiene que ser numerico", "error");
		return false;
	} 
	
	if (dia >0 && dia <=31) 
	{

	} 
	else
	{

		sweetAlert("Oops...", "El dia tiene que ser entre 1 o 31", "error");
		return false;
	}

	var largodia = dia.length;

	if (largodia <= 2) 
	{
		
	}
	else
	{
		sweetAlert("Oops...", "El dia debe de tener el formato DD", "error");
		return false;
	}
	

	if (isNaN(year)) 
	{
		sweetAlert("Oops...", "El a√±o tiene que ser numerico", "error");
		return false;
	}

	if (year >1900 && year <=2016) 
	{

	}
	else
	{
		sweetAlert("Oops...", "Selecciona una a√±o valido", "error");
		return false;
	}

	var largoyear = year.length;

	if (largoyear <= 4) 
	{
		
	}
	else
	{

		sweetAlert("Oops...", "El a√±o debe de tener el formato YYYY", "error");
		return false;
	}

	if( indice == null || indice == 0 ) {
		sweetAlert("Oops...", "Selecciona un mes", "error");
		return false;
	}

	var largopass = pass.length;

	if (largopass <= 4) 
	{
		sweetAlert("Oops...", "La contrase√±a debe tener almens 5 caracteres", "error");
		return false;
	}



	var seleccionado = false;
	for(var i=0; i<genero.length; i++) {    
		if(genero[i].checked) {
			seleccionado = true;
			break;
		}
	}

	if(!seleccionado) {
		sweetAlert("Oops...", "Ningun genero seleccionado", "error");
		return false;
	}

}			