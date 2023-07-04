<?php
$nome=$_GET["nome"];
$nota1=$_GET["nota1"];
$nota2=$_GET["nota2"];

$media=($nota1+$nota2)/2;

if ($nome=="" || $nota1=="" || $nota2==""){
    echo "Por favor preencha melhor os dados";
}

elseif ($media>=10){

    echo "Caro " .$nome.",  seu resultado é Apto";
}

elseif($media<=9){

    echo "Caro" .$nome.", seu resultado é não Apto";
}

?>