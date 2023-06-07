<?php

date_default_timezone_set("America/Lima");

// $fecha_us= date("Y-m-d") . "<br>";
$fecha_us= date("l d F Y") . "<br>";
$fecha_es= date("d-m-Y") . "<br>";
echo $fecha_us;
echo $fecha_es;


$hora_12=date("h:i a"). "<br>";
echo $hora_12;
$hora_24=date("H:i a"). "<br>";
echo $hora_24;

// $fecha_completa=date("d-m-Y h:i a");
$fecha_completa=date("l d F Y H:i a");

echo $fecha_completa;

