<?php 
 $nome=$_GET['nome'];
 $sexo=$_GET['sexo'];
 $idade=$_GET['idade'];
 if ($sexo=='F'or $sexo == 'FEMININO' Or $sexo= 'f' or $sexo='feminino') {
  if ($idade==25) {
    echo"ACEITA";
  }
  else {
    echo "NÃO ACEITA ";
  }  
  }
 else {
   echo  "NÃO ACEITA ";
  }

?>