<html>
<head>
	<title></title>
</head>
<body>
<?php 
	//$v[1]=90; 
	//$v[30]=7; 
	//$v['e']=99; 
	//$v['hola']= 'mundo'; 

	//Array en una linea
	//array(4) { [1]=> int(90) [30]=> int(7) ["e"]=> int(99) ["hola"]=> string(5) "mundo" } 
	//$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
	$v= array("1" =>"90" ,"30"=>"7","e"=>"99", "hola"=>"mundo" );

	var_dump($v);
	echo "<br><br>";

	foreach ($v as $indice => $indice_value) {
		echo "Valor de Array $indice en V: $indice_value <br>";
	}
	echo "<br><br>";

	foreach ($v as $indice) {
		echo "Valor  $indice <br>";
	}



 ?>
</body>
</html>