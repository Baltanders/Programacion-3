<?php 
require_once ("clases/Vehiculo.php");

$queHago = isset($_POST['queHago']) ? $_POST['queHago'] : NULL;

switch($queHago){

	case "agregar":
		$retorno["Exito"] = TRUE;
		$retorno["Mensaje"] = "";
		$obj = isset($_POST['vehiculo']) ? json_decode(json_encode($_POST['vehiculo'])) : NULL;
		
		$p = new Vehiculo($obj->patente);
		
		if(!Vehiculo::Insertar($p)){
			$retorno["Exito"] = FALSE;
			$retorno["Mensaje"] = "Lamentablemente ocurrio un error y no se pudo escribir en el archivo.";
		}
		else{

				$retorno["Mensaje"] = "El archivo fue escrito correctamente. PRODUCTO agregado CORRECTAMENTE!!!";
		}
	
		echo json_encode($retorno);
		
		break;
	
	default:
		echo ":(";
}
 ?>