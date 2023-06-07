<?php

date_default_timezone_set("America/Lima");

function fecha_espanol_larga(){
    $fecha_dia=date("d");
    $fecha_mes=date("m");
    $fecha_year=date("Y");

    $dia_semana=[
        "Monday"=>"Lunes",
        "Tuesday"=>"Martes",
        "Wednesday"=>"Miercoles",
        "Thursday"=>"Jueves",
        "Friday"=>"Viernes",
        "Saturday"=>"Sabado",
        "Sunday"=>"Domingo",
    ];

    $mes_year=[
        "01"=>'Enero',
        "02"=>'Febrero',
        "03"=>'Marzo',
        "04"=>'Abril',
        "05"=>'Mayo',
        "06"=>'Junio',
        "07"=>'Julio',
        "08"=>'Agosto',
        "09"=>'Septiembre',
        "10"=>'Octubre',
        "11"=>'Noviembre',
        "12"=>'Diciembre',
    ];

    $fecha_final=$dia_semana[date('l')] . " " . $fecha_dia . " de " . $mes_year[$fecha_mes] . " de " . $fecha_year;
    return $fecha_final;
}

// echo fecha_espanol_larga() . "<br>";
// echo date("l d F Y");

function fecha_espanol_corta($fecha=""){

    if($fecha==""){
        $fecha=date("d-m-Y");
    }else{
        $fecha=date("d-m-Y",strtotime($fecha));      
    }

    $fecha=explode("-",$fecha);

    $fecha_dia=$fecha[0];
    $fecha_mes=$fecha[1];
    $fecha_year=$fecha[2];

    $mes_year=[
        "01"=>'Enero',
        "02"=>'Febrero',
        "03"=>'Marzo',
        "04"=>'Abril',
        "05"=>'Mayo',
        "06"=>'Junio',
        "07"=>'Julio',
        "08"=>'Agosto',
        "09"=>'Septiembre',
        "10"=>'Octubre',
        "11"=>'Noviembre',
        "12"=>'Diciembre',
    ];

    $fecha_final=$fecha_dia . " de " . $mes_year[$fecha_mes] . " de " . $fecha_year;
    return $fecha_final;
}

echo fecha_espanol_corta() . "<br>";
echo fecha_espanol_corta("05/12/1996") . "<br>";
echo fecha_espanol_corta("11-05-1997") . "<br>";
echo fecha_espanol_corta(date("d-m-Y")) . "<br>";

// $today = date( 'Y-m-d', strtotime( 'today' ) );
// echo "Hoy: " . $today;
echo date("N");