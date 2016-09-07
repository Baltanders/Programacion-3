<?php
    include "Class/Estacionamiento.php";
	$patente=$_POST['patente'];
	$accion=$_POST['accion'];

	//echo "Pantente: $patente <br>";
	//echo "Accion: $accion";

	
	if ($accion=="Estacionar") {
		echo "Pantente: $patente <br>";
		echo "Accion: $accion";
		Estacionamiento::Guardar($patente);
	}
	else
	{
		
		Estacionamiento::Sacar($patente);
		


	}
	//header("location:index.php");
 ?>