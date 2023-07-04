<?php

$n1=$_POST["n1"];
$n2=$_POST["n2"];
$operacao=$_POST["operacao"];

if($n2=="" || $n2=="" || $operacao==""){
    echo "Por Favor Preencha corretamente os dados";
}

elseif ($operacao =="ad"){
    
    $res = ($n1+$n2);
    
    echo "O resultado da soma é:" .$res;
}

elseif ($operacao =="sub"){

    $res = ($n1-$n2);

    echo "O resultado da subtração é:" .$res;
}

elseif ($operacao=="mul"){

    $res=($n1*$n2);

    echo "O resultado da da multiplicação é:" .$res;
}

elseif ($operacao=="div"){

    $res =($n1/$n2);

    echo "O resultado da divisão é:     " .$res;
}

elseif($operacao=="vazio"){

    echo "Por favor escolha uma operação";
}

?>