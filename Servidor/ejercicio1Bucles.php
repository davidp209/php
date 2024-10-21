<?php $datos = explode(" ", trim(fgets(STDIN)));
$resultado =0;
$contador =0;
while ($datos[$contador] !== '0') {
$resultado = $resultado+$datos[$contador];
$contador++;

}?>
<p>Se han sumado <?php echo $contador?> números, dando como resultado un total de <?php echo $resultado ?></p>