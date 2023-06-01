<?php

// (2>9) ? $valor=10*8 : $valor=12*2;

// echo "el valor es: " . $valor;

/** $valor=(2>9) ? 'verdadero' : 'falso';

echo "el valor es: " . $valor; */

$camisas=2;
$precio_camisa=10;
$total=$camisas*$precio_camisa;
$total= ($camisas>=3) ? $total-($total*0.20) : $total-($total*0.10);

echo "usted va a pagar por " . $camisas . " camisas, con un precio de " . $precio_camisa . " un total de " . $total . " dolares";



