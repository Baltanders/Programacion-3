<html>
<head>
	<title>Leipold</title>
</head>
<body>
	<h1>Hola Mundo</h1>
<?php
	//echo "Hola PHP";
	//echo "<h2> Hola PHP</H2>";

	//$numero=10;
	//echo "El numero es ".$numero;
	//echo "El numero es $numero";
	//echo 'El numero es $numero';
	//echo "El cambio";
//Numero ramdom
	// $numeroRan= rand(0,10);

	// echo "El numero random es ".$numeroRan;
	// echo "<br>";

	// if ($numeroRan%2 ==0)
	// {
	// 		echo "El numero es par";
	// 		echo "<br>";
	// }
	// else
	// {
	// 	echo "El numero es impar";
	// 	echo "<br>";
	// }

//Vuelta de Numeros
	$vueltas=10;
	$par=0;
	$impar=0;	

	for ($i=0; $i < $vueltas; $i++) { 
			$numeroRan= rand(0,10);
			if ($numeroRan%2 ==0)
			{
					$par++;
			}
			else
			{
				$impar++;
			}
		
	}
	//echo "Numeros Par: ".$par;
	//echo "<br>";
	//echo "Numeros ImPar: ".$impar;
	//echo "<br>";

//Vuelta de Numeros con contador
	$vueltas=1000;
	$par=0;
	$impar=0;
	$Uno=0;
	$Dos=0;
	$Tres=0;
	$Cuatro=0;
	$Cinco=0;
	$Seis=0;
	$Siete=0;
	$Ocho=0;
	$Nueve=0;
	$Diez=0;	

	for ($i=0; $i < $vueltas; $i++) { 
			$numeroRan= rand(0,10);

			if ($numeroRan%2 ==0)
			{
					$par++;
			}
			else
			{
				$impar++;
			}

			switch ($numeroRan) {
				case '1':
					$Uno++;
					break;
				
				case '2':
					$Dos++;
					break;

				case '3':
					$Tres++;
					break;

				case '4':
					$Cuatro++;
					break;
			
				case '5':
					$Cinco++;
					break;
				
				case '6':
					$Seis++;
					break;
			
				case '7':
					//sacar cuando llegue a 5%
					$Siete++;				
					break;
			
			    case '8':
					$Ocho++;
					break;

				case '9':
					$Nueve++;
					break;
			    
			    case '10':
					$Diez++;
					break;
				default:
					# code...
					break;
			}
		
	}
	echo "Numeros Par: ".$par."<br>";
	echo "Numeros ImPar: ".$impar."<br><br>";

	//echo "Numeros Uno: ".$Uno."<br>";
	echo "Numeros Uno: ".$Uno/100;
	echo "Numeros Dos: ".$Dos/$vueltas."<br>";
	echo "Numeros Tres: ".$Tres/$vueltas."<br>";
	echo "Numeros Cuatro: ".$Cuatro/$vueltas."<br>";
	echo "Numeros Cinco: ".$Cinco/$vueltas."<br>";
	echo "Numeros Seis: ".$Seis/$vueltas."<br>";
	echo "Numeros Siete: ".$Siete/$vueltas."<br>";
	echo "Numeros Ocho: ".$Ocho/$vueltas."<br>";
	echo "Numeros Nueve: ".$Nueve/$vueltas."<br>";
	echo "Numeros Diez: ".$Diez/$vueltas."<br>";





?>
</body>
</html>