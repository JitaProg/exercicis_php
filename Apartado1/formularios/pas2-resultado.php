<?php

/*
PASO 2 -- RECOGER LOS DATOS CORRECTAMENTE

*/


/*Trim para sacar los espacios e 
inicializar las variables por si vienen vacias*/
$nom    = trim($_POST['nom'] ?? '');
$correo = trim($_POST['correo'] ?? '');
$dia    = trim($_POST['dia'] ?? 'sin escojer');

//echo "<p>Hola, " . $nom . $correo. $dia ."</p>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultat PAS 2</title>
</head>
<body>
    
    <h1>Dades recollides:</h1>

    <ul>
        <li>Nom: <?= $nom ?></li>
        <li>Correu: <?= $correo ?></li>
        <li>Dia: <?= $dia ?></li>
    </ul>

    <p>El nom té <?= strlen($nom)?> caracteres</p>
</body>
</html>