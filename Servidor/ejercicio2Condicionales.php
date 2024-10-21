<?php $datos = explode(" ", trim(fgets(STDIN)));?>
<?php $numero1 = $datos[0]; $numero2 = $datos[1];
if ($numero1 == $numero2 ): ?>
Ha habido empate a <?php echo $numero1 ?>
<?php elseif ($numero1 < $numero2): ?>
El jugador ganador es el 2 con <?php echo $numero2 ?>
<?php else :?>
El jugador ganador es el 1 con <?php echo $numero1 ?>
<?php endif ; ?>