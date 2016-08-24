<?php 
/**
*FiguraGeometrica  
*/
class FiguraGeometrica
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

	function __construct()
	{
		# code...
	}

	function abstract protected CalcularDatos()
	{

	}

	function abstract public Dibujar()
	{

	}

	function GetColor()
	{

	}
	
	function SetColor()
	{

	}
	
	function ToString()
	{

	}

}
 ?>