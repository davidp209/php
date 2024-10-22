<?php 

class ClaseSencilla//hay que utilizar mayusculas para el nombre de la clase
{
    public const CONSTANTE = 'valor constante';
    // Declaración de una propiedad
    public $var = 'un valor predeterminado';

    // Declaración de un método
    public function mostrarVar() {
        echo $this->var;
    }
    public function mostrarTextoConstante(){

        echo "<br/>Otro metodo";
    }
     public function mostrarConstante() {

        echo self::CONSTANTE . "\n"; //self es porque la constante es de la propia clase
        //el \n no se ejecuta en el navergador pero si en el consolad de F12    


     }



}