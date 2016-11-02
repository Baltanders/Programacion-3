<?php 
require_once("./AccesoDatos.php");
require_once ("./Cd.php");

/*$cantante=$_POST['cantante'];
$titulo= $_POST['titulo'];
$anio=$_POST['anio'];*/

			$cd = new cd();
			$cd->cantante=$_POST['cantante'];
			$cd->titulo=$_POST['titulo'];
			$cd->año=$_POST['anio'];
			$cantidad=$cd->IngresaCd();
			echo $cantidad;

/*$queHago = isset($_POST['queHago']) ? $_POST['queHago'] : NULL;
var_dump($_POST);
switch($queHago){

	case "IngresarCD":

		$retorno["Exito"] = TRUE;
		$retorno["Mensaje"] = "";
		$obj = isset($_POST['cd']) ? json_decode(json_encode($_POST['cd'])) : NULL;
		
		$cd = new CD($obj->titulo);
		
		if(!Cd::IngresaCd($cd)){
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
}*/
 ?>