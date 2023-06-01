<?php
$llantas=6;
// $total;
if($llantas<5){
    $total=$llantas*800;
    // echo "juan debe pagar " . $total;
}else{
    $total=$llantas*700;
    // echo "juan debe pagar " . $total;
}
echo "juan debe pagar " . $total . '</br>';


$nota1=10;
$nota2=8;
$nota3=8;

$promedio=($nota1+$nota2+$nota3)/3;
if($promedio>=7){
    echo "curso aprobado con calificacion " . $promedio;
}else{
    echo "curso desaprobrado con calificacion " . $promedio;
}