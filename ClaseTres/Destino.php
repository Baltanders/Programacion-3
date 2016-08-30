<?php 

var_dump($_REQUEST);

if (strlen($_REQUEST) > 5) {
	include "MayorA5.html";
}
else
{
	include "MenorA5.html";
}

 ?>