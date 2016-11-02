function Ingresar()
{
		alert("algo");	
		var id=$("#idCD").val();
		var cantante=$("#cantante").val();
		var titulo=$("#titulo").val();
		var anio=$("#anio").val();

		var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"IngresarCD",
			id:id,
			cantante:cantante,
			titulo:titulo,
			anio:anio	
		}
	});
	funcionAjax.done(function(retorno){
		//Mostrar("MostrarGrilla");
		//$("#informe").html("cantidad de agregados "+ retorno);
		alert(retorno);
		$("#informe").html(retorno.responseText);		
		
	});
	funcionAjax.fail(function(retorno){	
		$("#informe").html(retorno.responseText);	
	});	
}