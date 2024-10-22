<?php //a la hora de abrirlo en el navergador se abre este.
require_once("ClaseSencilla.php");//si pasamos la clase a otro archivo, tenemos que llamarla.
//es mejor utilizar el require_once que el include, el include te da un warning que puedes gestionar por lo que se puede seguir 
//ejecutando codigo, con el require no sigue el codigo porque sale un error.

// Creación del objeto $instancia de la clase ClaseSencilla
$instancia = new ClaseSencilla();
// Invocación de un método de la clase
$instancia->mostrarVar();

//$instancia2 = new ClaseSencilla();

//$instancia2 -> mostrarVar();
//$instancia2 -> var = "<br>Otro texto"; //con esto le cambio el valor a var pero solo de la intacia2
//pero si yo instancio de nuevo el $instancia se mostrara el valor normal porque solo se ha modificado en $instancia2
//$instancia2 -> mostrarVar();

$instancia -> mostrarConstante();



?>