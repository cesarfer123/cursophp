<?php

 $laptop=["acer nitro 5", "windows 11", "AMD ryzen 5 4600h", "ram 24gb"];

$frutas=[
    "fresas" => 100,
    "peras" => 30,
    "sandias" => 10,
    "melocotones" => 17,
    "Manzanas" => 9,
];

foreach($laptop as $valor){
    echo $valor . '<br>';
}

foreach($frutas as $clave => $valor){
    echo "hay " . $valor . " " . $clave . " en el inventario. <br>";
}



$productos=[
    ["codigo" => "A0001", "Descripcion" => "Mouse"],
    ["codigo" => "A0002", "Descripcion" => "Mouse"],
    ["codigo" => "A0003", "Descripcion" => "Mouse"],
    ["codigo" => "A0004", "Descripcion" => "Mouse"],
];

foreach ($productos as $prod) {
    echo $prod["codigo"] . "-" . $prod["Descripcion"] . "<br>";
}