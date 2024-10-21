<?php 
$incog = $_POST['incognita'];



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
</head>
<body class="is-preload">

<!-- Wrapper -->
<div id="wrapper">

    <!-- Main -->
    <section id="main" style="width: 50em">
        <header>
            <span class="avatar"><img src="data:image/jpeg;base64,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" alt="" /></span>
            <h2>Ahorcado</h2>
            <span class = "error"> <?php echo $Err;?></span>
            <form name="ahorcado" action="ahorcado.php" method="post">
                <!-- Escribe el resultado como valor de la propiedad value -->
                <input type="textfield" name="incognita" value=""  style="background-color:white">
                <br />
                <input type="submit" value="Enviar inc&oacute;gnita">
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
            <li>&copy; Jane Doe</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
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
<!-- Documento HTML-->