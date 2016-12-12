$(document).ready(function(){
	$(".delete").click(function(){
			
		$.post('../js/per.php',{
			Id:$(this).attr('data-nombre')
		},function(e){
			alert(e);
		});
		location.href="../index.php";
	});
});

