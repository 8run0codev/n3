function validar() {
	
 var direc = document.getElementById("autocomplete").value;
 var num = document.getElementById("street_number").value;
 var cp = document.getElementById("postal_code").value;

 if (direc === "") {
 	sweetAlert("Oops...", "Dirección vacia", "error");
		return false;
 }

  if (num === "" & cp === "" ) {
 	sweetAlert("Oops...", "Dirección incompleta", "error");
		return false;
 }
}