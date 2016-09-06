<?php 
/**
* 
*/
class Estacionamiento
{
	
	/*function __construct(argument)
	{
		# code...
	}*/

	public static function Guardar($patente)
	{
		echo("<br>llega");
		$fecha=date("Y-m-d H:i:s");
		$renglon="$patente"." - $fecha"."\n";
		$miarchivo=fopen("Estacionado.txt", "a");
		fwrite($miarchivo, $renglon);
		fclose($miarchivo);

	}

}
 ?>