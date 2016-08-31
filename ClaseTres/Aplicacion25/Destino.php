<?php 
    if (isset($_POST['rBase'], $_POST['rAltura']))
    {
        $Base=$_REQUEST['rBase'];
        $Altura=$_REQUEST['rAltura'];
        $sup=$Altura*$Base;
        echo "<br><p>La superficie del rectangulo es: ".$sup;
    }
    else
    {
        echo "<br><p>Primer ingreso";
    }


 ?>