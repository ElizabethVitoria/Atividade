<?php 
$numero=$_GET['n1'];
if ($numero>12 or $numero<=0) {
    echo"Coloque de 1 a 12 ";
}
else {
    if ($numero==1) {
        echo"Janeiro";
    }
    if ($numero==2) {
        echo"Fevereiro";
    }
    if ($numero==3) {
        echo"Março";
    }
    if ($numero==4) {
        echo"Abril";
    }
    if ($numero==5) {
        echo"Maio";
    }
    if ($numero==6) {
        echo"junho";
    }
    if ($numero==7) {
        echo"Julho";
    }
    if ($numero==8) {
        echo"Agosto";
    }
    if ($numero==9) {
        echo"setembro";
    
    }
    if ($numero==10) {
        echo"outubro";
    }
    if ($numero==11) {
        echo"novembro";
    }
    if ($numero==12) {
        echo"Dezembro";
    }
}

?>