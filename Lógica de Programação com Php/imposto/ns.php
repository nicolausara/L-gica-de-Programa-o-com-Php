<?php

$ano=$_POST["ano"];
$preco=$_POST["preco"];

if  ($ano<2020){
        
        $imposto=$preco * 0.030;

        echo "Seu imposto é: $imposto";

}

elseif ($ano>2020){
        
        $imposto=$preco * 0.050;

        echo "Seu imposto é: $imposto";
}
/*Nota: O o compuatdor está errando quanto a(, ou .)s */
?>