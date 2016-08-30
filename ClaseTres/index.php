<html>
<head>
	<title>Clase 3</title>
</head>
<body>

<form method="POST" action="Destino.php">
	<input type="text" name="mensaje">
	<input type="submit">
</form>

</body>
</html>

<?php 
echo "Hola php <br>";

echo "Variable REQUEST <br>";
var_dump($_REQUEST); /*siempre en mayusculas*/

echo "<br> Variable GET <br>";
 var_dump($_GET);/*metodo que muestra lo enviado  por la barra de direccion*/


echo "<br> Variable POST <br>";
var_dump($_POST);
 if (isset($POST['mensaje']))
 {
 	echo $_POST['mensaje'];
 }
else
{
	echo "Primer ingreso";
}


 ?>