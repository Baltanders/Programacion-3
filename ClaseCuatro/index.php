<html>
<head>
	<title></title>

	<!--Estilos-->
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" type="text/css" href="animacion.css">
</head>
<!--<body style="background: red;">-->
<body style="background: <?php echo $_GET['color'];?>">

	<div class="CajaInicio animated flash shake">
		<form id="FormIngreso" method="POST" action="nexo.php">
			<!--<input type="text" name="color">-->
			<input type="text" name="patente">
			<input type="submit" name="accion" class="MiBotonUTNMenuInicio" value="Estacionar">
			<input type="submit" name="accion" class="MiBotonUTNMenuInicio" value="Sacar">

		</form>	
</div>
</body>
</html>