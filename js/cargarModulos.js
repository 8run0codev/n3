
	$(document).ready(function() {
   $('#pedidos').click(function(){
      $.ajax({
	    type: "POST",
	    url: "admin/pedidos.php",
	    success: function(a) {
                $('#resultado').html(a);
	    }
       });
   });
});


	
	$(document).ready(function() {
   $('#registrar').click(function(){
      $.ajax({
	    type: "POST",
	    url: "admin/registrar.php",
	    success: function(a) {
                $('#resultado').html(a);
	    }
       });
   });
});



	$(document).ready(function() {
   $('#editar').click(function(){
      $.ajax({
	    type: "POST",
	    url: "admin/editar.php",
	    success: function(a) {
                $('#resultado').html(a);
	    }
       });
   });
});

  $(document).ready(function() {
   $('#add').click(function(){
      $.ajax({
      type: "POST",
      url: "admin/registro.php",
      success: function(a) {
                $('#resultado').html(a);
      }
       });
   });
});


  $(document).ready(function() {
   $('#add1').click(function(){
      $.ajax({
      type: "POST",
      url: "admin/registro.php",
      success: function(a) {
                $('#resultado').html(a);
      }
       });
   });
});
