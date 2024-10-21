<?php $datos = explode(" ", trim(fgets(STDIN)));?>
Se han introducido <?php echo count($datos); ?> numeros
<?php if (count($datos)<2):?>
Argumentos insuficientes 
<?php else: 
    $numero1 = $datos[0];
    $numero2 = $datos[1];
    $resultado = $numero1 + $numero2 ;
    echo $resultado; ?>
<?php endif; ?>



<?php
// Definimos la función suma
function suma($numeros) {
    $resultado = 0;
    foreach ($numeros as $numero) {
        $resultado += $numero;
    }

    return $resultado;
}
// Definimos la función media
function media($numeros) {
    $suma = suma($numeros);

    return $suma / count($numeros);
}

// Mientras haya líneas en stdin que procesar
while($fila = fgets(STDIN)) : ?>
<p><?php

// Procesamos cada una de las líneas sabiendo que cada argumento está separado del siguiente por un espacio
    $argumentos = explode(" ",trim($fila));

    // En lugar de $argc contamos los elementos del array $argumentos
    // En este caso, tenemos un argumento menos porque ya no tendremos en cuenta el nombre del fichero
    $n_arg = count($argumentos);
    // A partir de aquí, el código es muy similar al de la solución con $argc y $argv, pero teniendo en cuenta el argumento de menos que tiene esta solución.
    if(isset($n_arg) && $n_arg >= 2) {

    $operacion = array_shift($argumentos);
        switch ($operacion) {
            case 'suma':
                $msg = "La suma de los números es: " . suma($argumentos);
                break;
            case 'media':
                $msg = "La media de los números es: " . media($argumentos);
                break;
            default:
                $msg = "(Error) Operación no permitida";
        }
    } else {
        $msg = "(Error) No dispongo de suficientes argumentos.";
    }
    echo $msg
?>
</p>
<?php endwhile; ?>