<?php

$edad=53;
$genero="masculino";

if($genero=="femenino"){
    if($edad>54){
        echo "te puedes jubilar";
    }else{
        echo "todavia no te puedes jubilarte";
    }
}elseif($genero=="masculino"){
    if($edad>=60){
        echo "te puedes jubilar";
    }else{
        echo "todavia no te puedes jubilarte";
    }
}