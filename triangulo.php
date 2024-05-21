<?php 
$lado1=$_GET['l1'];
$lado2=$_GET['l2'];
$lado3=$_GET['l3'];
if ($lado1==$lado2 and $lado1==$lado3) {
    echo"equilátero";
}
else {
    if ($lado1!=$lado2 and  $lado1!=$lado3) {
        echo"escaleno";
    }
    else {
        echo"isósceles";
    }
}