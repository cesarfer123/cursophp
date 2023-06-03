<?php

$a=5;
$x=5;
$y=9;
$z=3;

$resultado= match($a){
    $x => "x es igual que a </br>",
    $y => "y es igual que a </br>",
    $z => "z es igual que a </br>",
    default => "ningun valor coincide </br>",
};

echo $resultado;


$edad=59 ;

$valor=match(true){
    $edad>=60 => "eres de la tercera edad",
    $edad>=30 => "eres adulto",
    $edad>=18 => "eres adulto joven",
    default => "Eres un niño",

};

echo $valor;