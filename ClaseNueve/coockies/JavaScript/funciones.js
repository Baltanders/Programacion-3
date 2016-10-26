

function Login(){
	

	username=$("#username").val();
	password=$("#password").val();

	//queHago = "login";
	
    $.ajax({
        type: 'POST',
        url: "./nexo.php",
        data: {

        	username: username,
        	password: password
        }

    }).then(function(algo) {
		
		alert(algo);
		
		
	}, function(algo) {
		
		alert(algo);
	});
		
}

