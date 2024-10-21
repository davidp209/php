<?php  function suma($numeros){
    $resultado = 0;
    foreach ($numeros as $numero) { //toma cada valor del array y se lo asigna a la variable numero
        $resultado += $numero;
    }

    return $resultado;
}
function media($numeros){
    $suma = suma($numeros);
    return $suma / count($numeros);

}
?>
<?php while($fila = fgets(STDIN)): { 
    $numeros = explode(" ",trim($fila));

$operacion = array_shift($numeros);
$n_arg = count($numeros);

if(isset($n_arg) && $n_arg >= 2){
    switch($operacion ){
        case 'suma':
                $msg = "La suma de los números es: " . suma($numeros);
             break;
        case 'media': 
                $msg = "La media de los números es: " . media($numeros) ;
             break;
             default:
             $msg = "(Error) Operación no permitida";
     }
    }else {
        $msg = "(Error) No dispongo de suficientes argumentos.";
    }

}
?>
<p><?php echo $msg ?></p>
<?php endwhile; ?>
