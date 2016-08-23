<html>
<head>
	<title>Aplicaicon 09</title>
</head>
<body>
<?php 
	$lapicera1 = array('color' =>'rojo' , 'marca'=> 'bic' , 'trazo'=> 'fino', 'precio'=> '12');
	$lapicera2 = array('color' =>'negro' , 'marca'=> 'dalma' , 'trazo'=> 'medio', 'precio'=> '16');
	$lapicera3 = array('color' =>'azul' , 'marca'=> 'croma' , 'trazo'=> 'grueso', 'precio'=> '20,20');

	foreach ($lapicera1 as $indice) {
		echo "Valor  $indice <br>";
	}	
echo "<br><br>";
	foreach ($lapicera2 as $indice) {
		echo "Valor  $indice <br>";
	}
echo "<br><br>";
	foreach ($lapicera3 as $indice) {
		echo "Valor  $indice <br>";
	}

?>
</body>
</html>