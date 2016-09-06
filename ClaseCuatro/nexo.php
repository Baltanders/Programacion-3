<?php
    include "Class/Estacionamiento.php";
	$patente=$_POST['patente'];
	$accion=$_POST['accion'];

	echo "Pantente: $patente <br>";
	echo "Accion: $accion";

	header("location:index.php");
	if ($accion=="Estacionamiento") {
		Estacionamiento::Guardar($patente);
	}

 ?>