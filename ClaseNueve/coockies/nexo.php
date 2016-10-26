<?php 

//$queHago = isset($_POST['queHago']) ? $_POST['queHago'] : NULL;
//var_dump($queHago);

		$usuario= $_POST['username'];
		$password=$_POST['password'];

		//setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
		setcookie($usuario, $password, time() + (400 * 30), "/"); // 86400 = 1 day

		//break;
	
	//default:
	//	echo ":(";
//}
 ?>