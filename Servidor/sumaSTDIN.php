Dime una lista de numeros separados por espacios:
<?php

 $datos = explode(" ", trim(fgets(STDIN)));?>

El primer nuemro es el: <?php echo $datos[0];?>

El segundo numero es el: <?php echo $datos[1];?>

El tercer numero es el: <?php echo $datos[2]; ?>



//<?php

//$datos = explode(" ", trim(fgets(STDIN)));// las entrecomillas quiere decir el tipo de espacio que la separan.
//si yo pongo en vez de comillas ; y meto los numeros de esta forma "1;2;3;4" su resultado es "123".
//el trin es para eliminar los espacios de los extremos

//echo $datos[0];
//echo $datos[1];
//echo $datos[2];

//para ejecutar esto lo hacemso en la terminal por lo que pondremos php -f "nombre del proyecto".
//no hace falta el cierre de php si en el documento no sigue con html.
