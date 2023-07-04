<?php

$sexo = $_POST["sexo"];

if($sexo==""){
    echo "Por favor preencha corretamente os dados";
}

elseif($sexo=="M"){

    echo "O Sexo  é válido";
}

elseif ($sexo=="m"){
    echo "O Sexo é válido";
}

elseif ($sexo=="F"){
    echo "O Sexo é válido";
}

elseif ($sexo=="f"){
    echo "O Sexo é válido";
}

else{
    echo "Sexo inválido";
}

?>