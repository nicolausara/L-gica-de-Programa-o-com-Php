<?php

$idade=$_POST["idade"];

if($idade==""){
    echo "Por favor preencha corretamente os dados";
}

elseif ($idade<16) {
    echo "Voçê é menor de idade";
}

elseif($idade==17 || $idade==16){
    echo "Ligeiro Amador";
}

elseif ($idade==17 || $idade==18 || $idade==19 || $idade==20 || $idade==21 || $idade==22 || $idade==23 || $idade==24) {
    
    echo "Ligeiro Profissional";
}

elseif ($idade>=25) {
    echo "Pesado";
}


?>