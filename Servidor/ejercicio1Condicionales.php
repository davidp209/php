<?php $datos = explode(" ", trim(fgets(STDIN)));?>
<?php $numero1 = $datos[0];
      $numero2 = $datos[1];
 if ($numero1 == $numero2 ): ?>
Pareja de <?php echo $numero1 ?>
<?php elseif ($numero1 < $numero2): ?>
El mayor valor es <?php echo $numero2 ?>
<?php else :?>
El mayor valor es <?php echo $numero1 ?>
<?php endif ; ?>