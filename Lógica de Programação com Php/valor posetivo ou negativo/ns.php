<?php
$valor = $_POST["valor"];

if($valor==""){
    echo "Por favor preencha correctamente os dados";
}

elseif ($valor==0){
    echo "Zero";
}

elseif ($valor>=1){
    echo "Posetivo";
}

elseif ($valor<1){
    echo "Negativo";
}

?>