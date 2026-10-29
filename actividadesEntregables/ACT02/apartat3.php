<?php

// Arrays de base para las pruebas
$grups = ['Queen', 'Nirvana', 'Extremoduro', 'Triana Pura', 'Cafe Quijano'];

// Array asociativo grupo => numero de asistentes (para el ejercicio 2 y 3)
$asistents = [
    'Queen' => 5000,
    'Nirvana' => 3500,
    'Extremoduro' => 4200,
    'Triana Pura' => 1200,
    'Cafe Quijano' => 2100
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- EXERCICI 1 -->
    <h2>Exercici 1: Buscar un grupo</h2>
    <?php
    // Comprobar con in_array si dos grupos estan en el cartel
    $buscado1 = 'Nirvana';
    $buscado2 = 'Melendi';

    if (in_array($buscado1, $grups, true)) {
        echo "<p>El grupo $buscado1 si esta en el cartel.</p>";
    } else {
        echo "<p>El grupo $buscado1 no esta en el cartel.</p>";
    }

    if (in_array($buscado2, $grups, true)) {
        echo "<p>El grupo $buscado2 si esta en el cartel.</p>";
    } else {
        echo "<p>El grupo $buscado2 no esta en el cartel.</p>";
    }

    // Funcion propia buscaGrup para que devuelva la posicion o -1
    function buscaGrup(array $llista, string $grup) {
        foreach ($llista as $pos => $nom) {
            if ($nom === $grup) {
                return $pos; // Si lo encuentra, sale y devuelve el indice
            }
        }
        return -1; // Si no esta, devuelve -1
    }

    $pos1 = buscaGrup($grups, 'Extremoduro');
    $pos2 = buscaGrup($grups, 'ACDC');

    echo "<p>Posicion de Extremoduro: $pos1</p>";
    echo "<p>Posicion de ACDC: $pos2</p>";
    ?>


    <!-- EXERCICI 2 -->
    <h2>Exercici 2: Las cuatro ordenaciones</h2>
    <?php
    // Creamos las 4 copias para no pisar el original
    $copia1 = $asistents; // asort
    $copia2 = $asistents; // arsort
    $copia3 = $asistents; // ksort
    $copia4 = $asistents; // krsort

    asort($copia1);
    arsort($copia2);
    ksort($copia3);
    krsort($copia4);
    ?>

    <h3>asort() - Ordena por VALOR de menor a mayor (mantiene claves)</h3>
    <ul>
        <?php foreach ($copia1 as $grupo => $valor) { echo "<li>$grupo: $valor</li>"; } ?>
    </ul>

    <h3>arsort() - Ordena por VALOR de mayor a menor (mantiene claves)</h3>
    <ul>
        <?php foreach ($copia2 as $grupo => $valor) { echo "<li>$grupo: $valor</li>"; } ?>
    </ul>

    <h3>ksort() - Ordena por CLAVE de menor a mayor (alfabeticamente)</h3>
    <ul>
        <?php foreach ($copia3 as $grupo => $valor) { echo "<li>$grupo: $valor</li>"; } ?>
    </ul>

    <h3>krsort() - Ordena por CLAVE de mayor a menor (alfabeticamente inverso)</h3>
    <ul>
        <?php foreach ($copia4 as $grupo => $valor) { echo "<li>$grupo: $valor</li>"; } ?>
    </ul>

    <!-- Comentario ejercicio 2 -->
    <p><b>Comentario:</b> La diferencia principal es que asort() ordena mirando los valores de dentro (los asistentes) dejando las claves asociadas a su sitio, mientras que ksort() ordena mirando las claves (los nombres de los grupos por orden alfabetico).</p>


    <!-- EXERCICI 3 -->
    <h2>Exercici 3: Mezclar el cartel</h2>
    <?php
    // Array donde los nombres de los grupos sean los valores
    $cartellGrups = ['Queen', 'Nirvana', 'Extremoduro', 'Triana Pura', 'Cafe Quijano'];
    
    // Aplicamos shuffle (cuidado que shuffle modifica el array original)
    shuffle($cartellGrups);
    ?>

    <p>Orden del sorteo aleatorio:</p>
    <ol>
        <?php
        foreach ($cartellGrups as $grupSortejat) {
            echo "<li>$grupSortejat</li>";
        }
        ?>
    </ol>

    <!-- Explicacion ejercicio 3 -->
    <p><b>Comentario:</b> Si aplicas shuffle() a un array asociativo (como el de los asistentes), las claves de texto se pierden y se reemplazan por indices numericos nuevos del 0 al N. Por eso para sortear el orden es mejor usar un array donde los grupos sean los valores directos.</p>
</body>
</html>