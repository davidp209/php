
<?php

$op1 = (isset($_GET['op1'])) ? $_GET['op1'] : 0;
$op2 = (isset($_GET['op2'])) ? $_GET['op2'] : 0;

if (isset($_GET['operador'])) {
    switch($_GET['operador']) {
        case 'mas':
            $operador = '+';
            $resultado = $op1 + $op2;
            break;
        case 'menos':
            $operador = '-';
            $resultado = $op1 - $op2;
            break;
        case 'por':
            $operador = '*';
            $resultado = $op1 * $op2;
            break;
        case 'entre':
            $operador = '/';
            $resultado = $op1 / $op2;
            break;
        default:
            $operador = '+';
            $resultado = $op1 + $op2;
    }
} else {
    $operador = '+';
    $resultado = $op1 + $op2;
}

?>
<!DOCTYPE HTML>
<!--
    Identity by HTML5 UP
    html5up.net | @ajlkn
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title>Identity by HTML5 UP</title>
        <meta charset="utf-8" />
        <meta name="Referrer" content="no-referrer" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="https://html5up.net/uploads/demos/identity/assets/css/main.css" />
        <noscript><link rel="stylesheet" href="https://html5up.net/uploads/demos/identity/assets/css/noscript.css" /></noscript>
        <script src="./calculadoraPrueba1.js"></script>

    </head>
    <body class="is-preload">

        <!-- Wrapper -->
            <div id="wrapper">

                <!-- Main -->
                    <section id="main">
                        <header>
                            <span class="avatar"><img src="https://es.calcuworld.com/wp-content/uploads/sites/2/2013/02/matematicas-150x150.png" alt="" /></span>
                            <h2>Calculadora B&aacute;sica</h2>
                            <form name="calculator">
                            <!-- Escribe el resultado como valor de la propiedad value -->
                                <input type="text" name="ans" value="">
                                <br>
                                <input type="button" class="boton" value="1">
                                <input type="button"class="boton" value="2">
                                <input type="button"class="boton" value="3">
                                <input type="button"class="operando"  value="+">
                                <br>
                                <input type="button"class="boton" value="4">
                                <input type="button"class="boton"  value="5">
                                <input type="button"class="boton" value="6">
                                <input type="button"class="operando"  value="-">
                                <br>
                                <input type="button"class="boton"  value="7">
                                <input type="button"class="boton" value="8">
                                <input type="button"class="boton"  value="9">
                                <input type="button"class="operando"  value="*">
                                <br>
                                <input type="button"class="boton"  value="0">
                                <input type="reset"class="boton"  value="c">
                                <input type="button"class="boton" value="/">
                                <input type="button"id="botonIgual" value="=">
                            </form>
                            
                        </header>

                        <footer>
                            <ul class="icons">
                            </ul>
                        </footer>
                    </section>

                <!-- Footer -->
                    <footer id="footer">
                        <ul class="copyright">
                            <li>Copyright Jane Doe</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                        </ul>
                    </footer>

            </div>

        <!-- Scripts -->
            <script>
                if ('addEventListener' in window) {
                    window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-preload\b/, ''); });
                    document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
                }
            </script>

    </body>
</html>
