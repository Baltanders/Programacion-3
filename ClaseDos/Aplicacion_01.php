<html>
<head>
	<title>Aplicacion 01</title>
</head>
<body>
	<h1>Suma Numeros</h1>
<?php

$numero=1;
$suma=0;
$cantidad=0;



while ( $suma < 1000) {

	$suma= $numero + $suma;
	
	$numero++;

	$cantidad++;


}
echo " <br>";
echo "la suma $suma <br>";
echo "cantidad : $cantidad <br>";

?>
</body>
</html>