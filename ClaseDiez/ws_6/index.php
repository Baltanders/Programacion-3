<html>
<head>
	<title></title>

	<script type="text/javascript" src="./JavaScript/FuncionesJS.js"></script>
	<script type="text/javascript" src="./JavaScript/jquery.js"></script>
</head>
<body>

		<h1>Alta CD</h1>

		<form id="FormIngreso" method="post">
					<select name="anio" id="anio"> 
						<?php 
							for ($contador=1900; $contador < 2017; $contador++) 
								{ 
									echo ($unCd->año==$contador) ? "<option selected value=$contador>$contador</option>" :"<option  value=$contador>$contador</option>";
								}
						?>
				
					</select>
					<input type="text" name="titulo" id="titulo" placeholder="ingrese titulo" value="<?php echo (isset($unCd)==true) ? "$unCd->titulo": "" ; ?>" />
					<input type="text" name="cantante" id="cantante" placeholder="ingrese interprete" value="<?php echo isset($unCd) ? "$unCd->cantante": "" ; ?>" />
					
					<input type="hidden" id="hdnQueHago" value="IngresarCD" />
					<input type="button" class="MiBotonUTN" onclick="Ingresar()" value="Ingresar CD"  />


				</div>
				
		</form>
</body>
</html>