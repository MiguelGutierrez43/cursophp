<?php

// Funciones sin parametros

function bienvenida(){

    echo "Esta es una funcion en PHP";
}


bienvenida();
echo "<br><br>";

// Funciones con parametros

function saludar($hola){

echo $hola;

}

saludar("Hola a todos");
echo "<br><br>";

// funciones con retorno

function retorno($retornar){

    return $retornar;

}

echo retorno ("Retornardo funcion");

?>
