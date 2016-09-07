<?php
    include "Class/Estacionamiento.php";
	$patente=$_POST['patente'];
	$accion=$_POST['accion'];

	//echo "Pantente: $patente <br>";
	//echo "Accion: $accion";

	//header("location:index.php");
	if ($accion=="Estacionar") {
		echo "Pantente: $patente <br>";
		echo "Accion: $accion";
		Estacionamiento::Guardar($patente);
	}
	else
	{
		$Listado= array();
		echo "Accion: $accion <br>";
		$Listado=Estacionamiento::Leer();
		var_dump($Listado);

	}
 ?>