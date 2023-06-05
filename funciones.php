<?php

function saludo($nombre){
    return "Hola, muy buenos dias " . $nombre . "<br>";
}

echo saludo("cesar");

$usuario ="juan";


echo saludo($usuario);



function promedio($n1,$n2,$n3){
    $promedio=($n1+$n2+$n3)/3;
    return $promedio;
}

echo "Mi promedio es: " . promedio(3,5,8) . "<br>";
echo "Mi promedio es: " . promedio(3,2,8) . "<br>";
echo "Mi promedio es: " . promedio(4,1,8) . "<br>";
echo "Mi promedio es: " . promedio(1,2,8) . "<br>";
echo "Mi promedio es: " . promedio(9,5,6) . "<br>";


