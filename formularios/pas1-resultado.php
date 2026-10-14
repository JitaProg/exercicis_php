<?php

/*
PASO 1:
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado PASO 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Que a llegado al servidor?</h1>
    <div class="contenedor">
        <h2>$_GET</h2>
        <pre>
            <?php print_r($_GET)?>
        </pre>

        <h2>$_POST</h2>
        <pre>
            <?php print_r($_POST)?>
        </pre>
    </div>
    <p><a href="pas1-formularis">Volver</a></p>

</body>
</html>