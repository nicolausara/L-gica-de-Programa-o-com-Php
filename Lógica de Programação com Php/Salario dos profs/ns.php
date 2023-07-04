<?php

$nivel=$_POST["nivel"];
$hora= $_POST["hora"];

if ($nivel=="nivel1"){
    $salario=12*$hora;

    echo  "Seu salario é: $salario";
}

elseif ($nivel=="nivel2"){
    $salario=17*$hora;

    echo  "Seu salario é: $salario";
}

elseif ($nivel=="nivel3"){
    $salario=25*$hora;

    echo  "Seu salario é: $salario";
}

?>