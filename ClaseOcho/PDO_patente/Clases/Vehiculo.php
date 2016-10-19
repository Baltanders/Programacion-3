<?php 
require_once"accesoDatos.php";
class Vehiculo 
{
	private $patente;
 	private $id;

	public function __construct($patente=NULL, $id=NULL)
	{

			$this->id = $id;
			$this->patente = $patente;


	}


	public static function Insertar($vehiculo)
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("INSERT into auto (patente)values(:patente)");
		$consulta->bindValue(':patente',$vehiculo->patente, PDO::PARAM_INT);
		return $consulta->execute();

	}	


}

 ?>