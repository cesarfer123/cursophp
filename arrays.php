<?php

// ARRAY TIPO ESCALAR
// $estudiantes=array("carlos","juan","manuel","percy");
$estudiantes=["carlos","juan","manuel","percy",7];
$estudiantes[2]="claudia";

echo $estudiantes[4] . '</br>';

// ARRAY ASOCIATIVO

$tutor=[
        "nombre"=>"juan perez",
        "edad"=>28,
        "libro"=>"la economia en la actualidad"
    ];

$tutor["edad"]=30;
echo $tutor["edad"] . '</br>';

// ARRAY DE MULTIPLES DIMENSIONES

$tutor2=[
    "nombre"=>"vannesa",
    "edad"=>18,
    "libro"=>"la economia en la actualidad",
    "cursos"=>['php','javascript','git']
];

$tutor2['cursos'][2]='phyton';

echo $tutor2['cursos'][2] . '</br>';

echo count($estudiantes) . '</br>';
echo count($tutor) . '</br>';
echo count($tutor2) . '</br>';