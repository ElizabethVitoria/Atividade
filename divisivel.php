<?php 
 $numero1=$_GET['n1'];
 if ($numero1%5==0) {
    echo "<br>Divide por 5</br>";
 }
 else{
    echo "<br>Não divide por 5</br>";
 }
 if ($numero1%10==0) {
    echo "<br>Divide por 10</br>";
 }
 else{
    echo "<br>Não divide por 10</br>";
 }
if ($numero1%2==0) {
   echo "<br>Divide por 2</br>";
}
else{
   echo "<br>Não divide por 2</br>";
}

?>