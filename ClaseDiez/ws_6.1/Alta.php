<html>
<head>
	<title>Ejemplos de PDO</title>

	  
		<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
		<!--final de Estilos-->
		   <meta name="viewport" content="width=device-width, initial-scale=1">
          <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
		 <a class="btn btn-info" href="index.html">Menu principal</a>
<?php     
	require("clases\cd.php");
	require("clases\AccesoDatos.php");
 if(isset($_POST['idparamodificar'])) //viene de la grilla
 {
	$unCd=cd::TraerUnCdPorID($_POST['idparamodificar']);
	echo "Modificar";
 } 
?>
	  <div class="container">
	  	  <div class="page-header">
                <h1>Ejemplos de PHP</h1>      
            </div>
<div class="CajaInicio animated bounceInRight">
		<h1>Ejemplos PDO </h1>

		<form id="FormIngreso" method="post">
					<select name="anio"> 
						<?php 
							for ($contador=1900; $contador < 2017; $contador++) 
								{ 
									echo ($unCd->año==$contador) ? "<option selected value=$contador>$contador</option>" :"<option  value=$contador>$contador</option>";
								}
						?>
				
					</select>
					<input type="text" name="titulo" placeholder="ingrese titulo" value="<?php echo (isset($unCd)==true) ? "$unCd->titulo": "" ; ?>" />
					<input type="text" name="cantante" placeholder="ingrese interprete" value="<?php echo isset($unCd) ? "$unCd->cantante": "" ; ?>" />

					<input  hidden type="text" name="id" value="<?php echo isset($unCd) ? "$unCd->id": "" ; ?>" />

				
				<input type="submit" class="btn btn-danger" name="guardar">
				</div>
				
		</form>
		
<?php 

if(isset($_POST['guardar']))// si esto no se cumple ingreso por primera vez.
{

	//echo "id= ".$_POST['id'];

	if($_POST['id']>0)//paso por grilla y luego guardo
	{
			$unCd=cd::TraerUnCdPorID($_POST['id']);
			$unCd->titulo = $_POST['titulo'];
			$unCd->cantante= $_POST['cantante'];
			$unCd->año= $_POST['anio'];
			$retorno=$unCd->ModificarElCD();

			echo "Modificar ".$retorno;
			

	}else// si es un alta
	{
			$micd=new cd();	
			$micd->titulo = $_POST['titulo'];
			$micd->cantante= $_POST['cantante'];
			$micd->año= $_POST['anio'];
			echo "ultimo id: # ".$micd->InsertarElCd();
			echo "insertar";
			
	}
	
}
else
{
	echo "Primer ingreso";
}
	


?>
	</div>
		</div>
</body>
</html>