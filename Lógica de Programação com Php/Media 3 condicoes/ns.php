<?php

$nome = $_POST["nome"];
$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];
$nota3 = $_POST["nota3"];

$media = ($nota1+$nota2+$nota3)/3;

if ($nome="" or $nota1="" or $nota2="" or $nota3=""){
    echo "Por favor preencha correctamente os dados";
}

elseif ($media<=7) {

    echo "Caro(a) $nome o seu resultado é reprovado";
}

elseif ($media>=10){

    echo "Caro(a) $nome o seu resultado é aprovado";

}

elseif ($media=8 or $media=9){

    echo "Caro(a) $nome o seu resultado é recurso";

}



?>