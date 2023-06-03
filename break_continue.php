<?php

for ($i=1; $i <=10 ; $i++) { 
    echo $i . "<br>";
    if($i==5){
        break;
    }
}

$c=20;

while ($c >= 1) {
    echo $c . "<br>";
    if($c==10){
        break;
    }
    $c--;
}


$pc=["so","ssd","gpu","ram","cpu"];
foreach($pc as $componentes){
    
    if($componentes=="gpu"){
        continue;
    }
    echo $componentes . '<br>';
}


$a=1;

while ($a <= 10) {
    if ($a==5) {
        $a++;
       continue;
       
    }
    echo $a . "<br>";
    $a++;

}