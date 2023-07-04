<?php

$idade=$_POST["idade"];

if($idade==""){
    echo "Por favor preencha melhor os dados";
}

elseif ($idade>=18){
    echo "Voçe é maior de idade";
}

elseif($idade<18){
    echo "Voçe é menor de idade";
}

?>