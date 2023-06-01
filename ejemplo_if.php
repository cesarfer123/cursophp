<!-- ejercicio 1 -->
<?php
    $edad=10;
    if ($edad>=18) :
        echo "Eres mayor de edad </br>";
    else:
        echo 'Eres menor de edad </br>';
    endif;

    $monto=180;
    if($monto>=100):
        $monto=$monto-($monto*0.20);
        echo "tu monto a pagar es de " . $monto;
    else:
        echo "tu monto a pagar es de " . $monto;
    endif;

    // echo $monto;