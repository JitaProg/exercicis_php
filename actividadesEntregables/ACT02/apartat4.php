<?php

// Copiamos los arrays que pide el enunciado
$conciertos = [
    ['nom' => 'Oques Grasses',  'escenari' => 'Gran',  'hora' => '22:30', 'assistents' => 4200, 'preu' => 28.0],
    ['nom' => 'Mushkaa',        'escenari' => 'Petit', 'hora' => '20:00', 'assistents' => 1850, 'preu' => 18.0],
    ['nom' => 'Figa Flawas',    'escenari' => 'Gran',  'hora' => '00:30', 'assistents' => 3600, 'preu' => 24.0],
    ['nom' => 'Julieta',        'escenari' => 'Petit', 'hora' => '21:15', 'assistents' => 2100, 'preu' => 20.0],
    ['nom' => 'Txarango',       'escenari' => 'Gran',  'hora' => '23:30', 'assistents' => 5100, 'preu' => 32.0],
    ['nom' => 'La Ludwig Band', 'escenari' => 'Petit', 'hora' => '18:45', 'assistents' => 900,  'preu' => 15.0],
];

$escenarios = [
    'Gran' => [
        'capacitat' => 6000,
        'coberta'   => 'no',
        'ubicacio'  => 'Pista central',
    ],
    'Petit' => [
        'capacitat' => 2500,
        'coberta'   => 'si',
        'ubicacio'  => 'Pavello',
    ],
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
    <h2>Exercici 1: Tabla de conciertos</h2>
    
    <table border="1">
        <tr>
            <th>Nom</th>
            <th>Escenari</th>
            <th>Hora</th>
            <th>Assistents</th>
            <th>Preu</th>
        </tr>
        <?php foreach ($conciertos as $concierto): ?>
            <tr>
                <td><?= $concierto['nom'] ?></td>
                <td><?= $concierto['escenari'] ?></td>
                <td><?= $concierto['hora'] ?></td>
                <td><?= $concierto['assistents'] ?></td>
                <td><?= number_format($concierto['preu'], 2, ',', '.') ?> €</td>
            </tr>
        <?php endforeach; ?>
    </table>

    <?php
    // Mostrar el nombre del tercer concierto directamente (indice 2)
    $tercerConcert = $conciertos[2]['nom'];
    echo "<p>El nombre del tercer concierto accediendo directamente es: <strong>$tercerConcert</strong></p>";
    ?>


    <!-- EXERCICI 2 -->
    <h2>Exercici 2: Array asociativo a dos niveles (Escenarios)</h2>

    <?php
    // Mostrar la capacidad del escenario Gran directamente
    $capacitatGran = $escenarios['Gran']['capacitat'];
    echo "<p>Capacidad del escenario Gran directamente: <strong>$capacitatGran</strong> personas</p>";
    ?>

    <h3>Recorrido con dos foreach anidados:</h3>
    <?php
    foreach ($escenarios as $nomEscenari => $dades) {
        echo "<h4>Escenari: $nomEscenari</h4>";
        echo "<ul>";
        foreach ($dades as $camp => $valor) {
            echo "<li>$camp: $valor</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>