<?php

$cadena_texto="hola mundo . <br>";

echo strtolower($cadena_texto);
echo strtoupper($cadena_texto);
echo ucfirst($cadena_texto);
echo ucwords($cadena_texto);


$cadena="hola mundo con php";

$longitud=strlen($cadena);
echo $cadena . " tiene " . $longitud . " caracteres <br>";

$palabras=str_word_count($cadena);
echo $cadena . " tiene " . $palabras . " palabras";