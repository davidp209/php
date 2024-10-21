<?php $datos = explode(" ", trim(fgets(STDIN)));
$ope=$datos[0];$num2=$datos[1];$num3=$datos[2];$resultado;
switch ($ope){
case '+':
$resultado = $num2. " + " .$num3. " = " .($num2 + $num3);
break;
case '-':
$resultado = $num2. " - " .$num3. " = " .($num2 - $num3);
break;
case 'x':
$resultado = $num2. " x " .$num3. " = " .($num2 * $num3);
break;
case ':';
$resultado = $num2. " : " .$num3. " = " .($num2 / $num3);
break;
}?>
<p><?php echo $resultado;?></p>