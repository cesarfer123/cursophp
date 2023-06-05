<?php

$fecha_1="2021/11/29";
$fecha_2="2021-11-30";
$numeros="uno dos tres cuatro cinco seis siete";

$array_fecha=explode("/",$fecha_1);
$array_numero=explode(" ",$numeros);


echo $array_fecha[1] . '<br>';
echo $array_numero[1] . '<br>';

foreach ($array_fecha as $num) {
    echo $num . "<br>";
}