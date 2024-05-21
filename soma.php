<?php 
   $numero1=$_GET['n1'];
   $numero2=$_GET['n2'];
   $soma=$numero1+$numero2;
   if ($soma>=20) {
    $valor=$soma+8;
    echo "<h2>Sua soma mais 8 é $valor</h2>";
   }
   else{
    $valo=$soma-5;
    echo "<h2>sua soma menos 5 é $valo</h2>";
   }

?>
