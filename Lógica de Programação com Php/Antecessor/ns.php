<?php

$valor = $_POST["valor"];

$antecessor=($valor-1);
if($valor==""){
    
    echo "Por Favor Preencha corretamente os dados";
}

else{
    echo "O antecessor do número $valor é:".$antecessor;   
}



?>