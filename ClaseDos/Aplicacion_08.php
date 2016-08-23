<html>
<head>
	<title></title>
</head>
<body>
<?php 
	$v[1]=90; 
	$v[30]=7; 
	$v['e']=99; 
	$v['hola']= 'mundo'; 

	var_dump($v);
	echo "<br><br>";

	foreach ($v as $indice => $indice_value) {
		echo "Valor de Array V: $indice_value <br>";
	}



 ?>
</body>
</html>