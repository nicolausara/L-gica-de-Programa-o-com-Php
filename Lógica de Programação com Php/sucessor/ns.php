<?php

$valor = $_POST["valor"];

$sucessor=($valor+1);

if($valor==""){
    echo "Por favor preecha corretamente os dados";
}
 else{
    echo "O sucessor do número $valor é:".$sucessor;
    
}

?>