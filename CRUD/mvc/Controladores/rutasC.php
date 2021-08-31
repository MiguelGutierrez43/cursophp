<?php

class RutasControlador{

    public function Plantilla(){

        include "Vistas/plantilla.php";
    }

    public function Rutas(){

        if(isset($_GET["rutas"])){

            $rutas = $_GET["rutas"];

        }else{

            $rutas = "index";
        }

        $respuesta = Modelo :: RutasModelo($rutas);

        include $respuesta;
    }
}