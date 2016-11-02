

function AgregarPatente(){
	
    var pagina = "./nexo.php";
	var patente = $("#patente").val();

	
	var vehiculo = {};
	vehiculo.patente = patente;
	queHago = "agregar";
	
    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "json",
        data: {
			queHago : queHago,
			vehiculo : vehiculo
		},
        async: true
    })
	.done(function (objJson) {
		
		if(!objJson.Exito){
			alert(objJson.Mensaje);
			return;
		}
		
		alert(objJson.Mensaje);
		

		
		$("#patente").val("");

		


		if(queHago !== "agregar"){
			$("#hdnQueHago").val("agregar");
			$("#patente").removeAttr("readonly");
		}
		
	})
	.fail(function (jqXHR, textStatus, errorThrown) {
        alert(jqXHR.responseText + "\n" + textStatus + "\n" + errorThrown);
    });    
		
}

