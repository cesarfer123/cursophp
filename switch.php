<?php

$fruta="gdfgfd";

switch ($fruta) {
    case 'manzana':
        echo "esto es una manzana </br>";
        break;
    
    case "fresa":
        echo "esto es una fresa </br>";
        break;
    default:
        echo "no eres ni fresa ni manzana </br>";
}



$dia=1;

switch ($dia) {
    case 1:
        echo "lunes";
        break;
    case 2:
        echo "martes";
        break;
    case 3:
        echo "miercoles";
        break;
    case 4:
        echo "jueves";
        break;
    case 5:
        echo "viernes";
        break;
    case 6:
        echo "sabado";
        break;
    case 7:
        echo "domingo";
        break;
                                          
    default:
        echo "valor erróneo, introduce un valor correcto";
        break;
}