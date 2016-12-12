$(document).ready(function(){
	$(".eliminar").click(function(){
		var imagen=$(this).parent('td').parent('tr').find('.imagen').val();
		$(this).parent('td').parent('tr').remove();
		$.post('../js/ejecutar.php',{
			Caso:'Eliminar',
			Id:$(this).attr('data-id'),
			Imagen:imagen
		},function(e){
			alert(e);
		});
		
	});
	$(".modificar").click(function(){
		var nombre=$(this).parent('td').parent('tr').find('.nombre').val();
		var precio=$(this).parent('td').parent('tr').find('.precio').val();
		$.post('../js/ejecutar.php',{
			Caso:'Modificar',
			Id:$(this).attr('data-id'),
			Nombre:nombre,
			Precio:precio
		},function(e){
			alert(e);
		});
	});
});