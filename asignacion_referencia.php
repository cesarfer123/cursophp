<?php

$texto="juan perez";
$nombre1=$texto;
$nombre2=&$texto;

echo $nombre1 . '</br>';
echo $nombre2 . '</br>';

$texto="camila";

echo $nombre1 . '</br>';
echo $nombre2. '</br>';

