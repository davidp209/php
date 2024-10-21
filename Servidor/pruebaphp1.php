<!DOCTYPE html>
    <html>
        <head>
            <title>Ejemplo</title>
        </head>
        <body>
            <p>
                <?php if (false == true): ?>
                        Esto se mostrara si la expresion es verdadera.
                <?php else: ?>
                        En caso contrario se mostrara esto.
                <?php endif;   ?>

            </p>    
            <p>
                <?php if (false == true) {
                    echo "Esto se mostarra si la expresion es verdadera";
                }else{
                    echo "En caso contrario se mostrara esto";
                } ?>


            </p>



        </body>


</html>