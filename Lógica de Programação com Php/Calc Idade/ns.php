<?php

$nasc = $_POST["nasc"];
$atual = $_POST["atual"];

$resultado=($nasc - $atual);

if($nasc=="" || $atual==""){
    echo "Por Favor Preencha corretamente os dados";
}

else{
    echo "A sua idade é: $resultado";
}

?>