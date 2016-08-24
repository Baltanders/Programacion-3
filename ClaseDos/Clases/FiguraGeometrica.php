<?php 
/**
*FiguraGeometrica  
*/
public class FiguraGeometrica
{
/*	
	function __construct(argument)
	{
		# code...
	}

	function algo()
	{
		echo "algo desde figuras";
	}*/

	protected $color;
	protected $perimetro;
	protected $superficie;

	public function __construct()
	{
		$color='verde';
		$perimetro=5;
		$superficie=10;
	}

	abstract protected function CalcularDatos()
	{

	}

	abstract public function  Dibujar()
	{

	}

	public function GetColor()
	{	
		return this->color;
	}
	
	public function SetColor($colores)
	{
		this->color=$colores;
	}
	
	public function ToString()
	{

	}

}
 ?>