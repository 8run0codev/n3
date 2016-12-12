function validar(){
	var visa;
	var dia;
	var año;

	visa = document.getElementById("cosa").value;
	dia = document.getElementById("mes").value;
	year = document.getElementById("año").value;
	expresion =  /^3[4,7]\d{13}$/;
	

	if (!expresion.test(visa)) {
		sweetAlert("Oops...", "Numero de tarjeta no valido", "error");
		return false;
	}

	if (isNaN(dia)) 
	{
		sweetAlert("Oops...", "El mes tiene que ser numerico", "error");
		return false;
	}

	if (dia >0 && dia <=12) 
	{

	} 
	else
	{

		sweetAlert("Oops...", "El mes tiene que ser entre 1 o 12", "error");
		return false;
	}

	var largodia = dia.length;

	if (largodia == 2) 
	{
		
	}
	else
	{
		sweetAlert("Oops...", "El mes debe de tener el formato mm", "error");
		return false;
	}

	if (isNaN(year)) 
	{
		sweetAlert("Oops...", "El año tiene que ser numerico", "error");
		return false;
	}

	if (year >2016 && year <=2050) 
	{

	}
	else
	{
		sweetAlert("Oops...", "Selecciona una año valido", "error");
		return false;
	}

	var largoyear = year.length;

	if (largoyear == 4) 
	{
		
	}
	else
	{

		sweetAlert("Oops...", "El año debe de tener el formato YYYY", "error");
		return false;
	}

}