<?php
$computadoras=3;
$precio_computadora=700;
$total=$computadoras*$precio_computadora;
if ($computadoras<5) {
   $total=$total-$total*0.10;
} elseif($computadoras>=5 && $computadoras<10) {
    $total=$total-$total*0.20;
}else{
    $total=$total-$total*0.40;
}

echo "el total a pagar por " . $computadoras . " computadoras es de " . $total . '</br>';



$dia="martes";

if ($dia=="lunes") {
    echo "el dia de hoy es " . $dia;
}elseif($dia=="martes"){ 
    echo "el dia de hoy es " . $dia;
} elseif($dia=="miercoles"){ 
    echo "el dia de hoy es " . $dia;
} elseif($dia=="jueves"){ 
    echo "el dia de hoy es " . $dia;
} elseif($dia=="viernes"){ 
    echo "el dia de hoy es " . $dia;
} elseif($dia=="sabado"){ 
    echo "el dia de hoy es " . $dia;
} 
else {
    echo "el dia de hoy es domingo";
}
