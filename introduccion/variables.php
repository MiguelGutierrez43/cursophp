<?php

// Variable tipo numero

$numero = 10;

echo 'Esto es un numero: ' .$numero;
echo '<br><br>';

// Variable tipo texto

$texto = 'Esto es una cadena de textos';

echo 'Mi cadena: ' .$texto;
echo '<br><br>';

// Variable booleana

$booleana = true;

echo 'Esto es una variable booleana: ' .$booleana;
echo '<br><br>';

// Variable de tipo arreglo

$arreglo = array("Alejandro", "Maria");

echo $arreglo[0];
echo '<br><br>';


// Variable de tipo arreglo con propiedades

$colores = array("color1" => "Rojo", "color2" => "Azul");

echo $colores["color1"];
echo '<br><br>';


// Variable tipo Objeto

$objeto =(object)["mueble1" => "Armario", "mueble2" => "Escritorio"];

echo $objeto->mueble2;
echo '<br><br>';

?>