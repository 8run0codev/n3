function validar(){

	var pag;
		pag = document.getElementById("pag").value;         

	if(pag== "")
	{
		sweetAlert("Oops...", "Seleccione un metodo de pago", "error");
		return false;
	}

}