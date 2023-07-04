<?php
$Qatual=$_POST["Qatual"];
$Qmax=$_POST["Qmax"];
$Qmin=$_POST["Qmin"];

$Qmedia=($Qmax+$Qmin)/2;

if($Qatual=="" || $Qmax=="" || $Qmin=="" ){
    echo "Por favor preencha correctamente os dados";
}

elseif($Qatual>=$Qmedia){
    echo "Não Efectuar Compra";
}

elseif($Qatual<$Qmedia){
    echo "Efectuar Compra";
}

?>