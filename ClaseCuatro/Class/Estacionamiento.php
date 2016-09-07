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
		$renglon="$patente"."<=>"."$fecha"."\n";
		$miarchivo=fopen("Estacionado.txt", "a");
		fwrite($miarchivo, $renglon);
		fclose($miarchivo);

	}

	public static function Leer()
	{
		$ListadoAutos = array();
		$miarchivo=fopen("Estacionado.txt", "r");
		while (!(feof($miarchivo))) {
			$renglon=fgets($miarchivo);
			//echo "<br>$renglon";
			$auto=explode("<=>", $renglon);
			//echo "$auto[0] $auto[1] <br>";
			if ($auto[0]!="") {
				$ListadoAutos[]=$auto;
			}
			
		}
		fclose($miarchivo);
		return $ListadoAutos;
	}

	public static function Sacar($patente)
	{
		$ListadoEstacionados= Estacionamiento::Leer();
		foreach ($ListadoEstacionados as $auto) {
			if ($auto[0]==$patente) {
				$inicio=$auto[1];
				$ahora=date("Y-m-d H:i:s");
				$diferencia=strtotime($ahora)-strtotime($inicio);
				$importe= $diferencia*10;
				//se guarda en ticket.txt
				echo "Debe pagar: $importe";
			}
		}

	}


}
?>