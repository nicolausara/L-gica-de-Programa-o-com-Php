<?php

$valor1 = $_POST["valor1"];
$valor2 = $_POST["valor2"];

if($valor1=="" || $valor2==""){
    echo "Por favor preencha correctamente os dados";
}

elseif ($valor1>$valor2){

    echo "Entre $valor1 e $valor2 o maior valor é $valor1";
}

elseif ($valor2>$valor1){

    echo "Entre $valor1 e $valor2 o maior valor é $valor2";
}

elseif($valor1=$valor2){

    echo "Os valores inseridos são iguais";
}
?>