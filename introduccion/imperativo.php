<?php

$color1 = (object)["remera"=>"roja","gorra"=>"azul"];
$color2 = (object)["remera"=>"amarilla","gorra"=>"verde"];

function Ropa($color){

    echo "<p>Ropa de color Remera: $color->remera, Gorra: $color->gorra</p>";
}

Ropa($color1);
Ropa($color2);