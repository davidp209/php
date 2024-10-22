<?php
include("ClaseSencilla.php");

class ClaseExtendida extends ClaseSencilla{
    function mostrarVar(){
        echo "Clase Extendida\n";
        parent::mostrarVar();//esto es porque estoy llamando a una funcion que tiene el hijo
    }



}