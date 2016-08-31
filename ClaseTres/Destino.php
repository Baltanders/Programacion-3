<?php 

#var_dump($_REQUEST);
$cadena=$_REQUEST['mensaje'];

#if (count($cadena) > "5") {
#if (strlen($cadena) > "5") {
if (strlen($cadena) > "5") {
	include "MayorA5.php";
}
else
{
	include "MenorA5.php";
}

 ?>