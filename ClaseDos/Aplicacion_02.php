<html>
<head>
	<title>Aplicacion 02</title>
</head>
<body>
	<h1>Mostrar fecha y estación</h1>
	<?php 
		echo date('d/m/Y');
		echo "<br>";
		echo date('Y/m/d');
		echo "<br>";
		echo date('l jS \of F Y h:i:s A');
		echo "<br> Cantidad de dias transcurridos: ".date('z');


		if (date('z')>83) {
			echo "Estamos en Otoño";
		}elseif (date('z')>173) {
			# code...
		}elseif (date('z')>265) {
			# code...
		}elseif (date('z')>356) {
			# code...
		}

		    $dia = date('z'); // Por ejemplo: "80" (empieza por 0)
		 
		    // Si la fecha actual es anterior al 
		    if ( $dia > 173 ) {
		        $estacion = 'invierno';
		        echo $estacion;
		 
		    // Si la fecha actual es anterior al 
		    } elseif ( $dia > 265 ) {
		        $estacion = 'primavera';
		        echo $estacion;
		 
		    // Si la fecha actual es anterior al 
		    } elseif ( $dia > 356 ) {
		        $estacion = 'verano';
		        echo $estacion;
		 
		    // Si la fecha actual es anterior al 
		    } elseif ( $dia > 83 ) {
		        $estacion = 'otono';
		        echo $estacion;
		 
		    // Si no es ninguna de las anteriores
		    } else {
		        $estacion = 'invierno';
		        echo $estacion;
		 
		    }




	
		/*
		 * Función para mostrar una imagen diferente
		 * según la estación del año (primavera, verano...)
		 * Utilización: echo foto_de_estacion();
		 */
		function foto_de_estacion() {
			/*Otoño: empieza el 23 de marzo, el día número 83 del año
			  Invierno: empieza el 21 de junio, el día número 173 del año
			  Primavera: empieza el 21 de septiembre, el día número 265 del año
			  Verano: empieza el 21 de diciembre, el día número 356 del año
			*/
		 
		    // Guardamos en una variable el día del año
		    $dia = date('z'); // Por ejemplo: "80" (empieza por 0)
		 
		    // Si la fecha actual es anterior al 
		    if ( $dia < 173 ) {
		        $estacion = 'invierno';
		 
		    // Si la fecha actual es anterior al 
		    } elseif ( $dia < 265 ) {
		        $estacion = 'primavera';
		 
		    // Si la fecha actual es anterior al 
		    } elseif ( $dia < 356 ) {
		        $estacion = 'verano';
		 
		    // Si la fecha actual es anterior al 
		    } elseif ( $dia < 83 ) {
		        $estacion = 'otono';
		 
		    // Si no es ninguna de las anteriores
		    } else {
		        $estacion = 'invierno';
		 
		    }
		 
		    return '/ruta/imagen/' . $estacion . '.jpg';
		 
		}




	 ?>


</body>
</html>