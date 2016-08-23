<html>
<head>
	<title>Aplicaicon 10</title>
</head>
<body>
<?php 
	$lapicera = array
	(
		array('color' =>'rojo' , 'marca'=> 'bic' , 'trazo'=> 'fino', 'precio'=> '12'),
		array('color' =>'negro' , 'marca'=> 'dalma' , 'trazo'=> 'medio', 'precio'=> '16'),
		array('color' =>'azul' , 'marca'=> 'croma' , 'trazo'=> 'grueso', 'precio'=> '20,20')
	);

	var_dump($lapicera);

	foreach ($lapicera as $indice=> $indice_value) {
		echo "Color :".$indice_value['color']." -Marca :".$indice_value['marca']." -Trazo :".$indice_value['trazo']." -Precio :".$indice_value['precio']." <br>";
		//echo "Color ".$indice_value['color']." <br>";
		//var_dump($indice_value );
	}

	echo "<br><br>";

	foreach ($lapicera as $indice) {
		echo "Color :".$indice_value['color']." -Marca :".$indice_value['marca']." -Trazo :".$indice_value['trazo']." -Precio :".$indice_value['precio']." <br>";
		//echo "Color ".$indice_value['color']." <br>";
		//var_dump($indice_value );
	}		


?>	
</body>
</html>