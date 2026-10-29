<?php

$grups = ['Queen', 'Nirvana', 'Extremoduro', 'Triana Pura', 'Cafe Quijano'];

$capitals = array(
    'França' => 'París', 
    'Anglaterra' => 'Londres',
    'Espanya' => 'Madrid',
    'Itàlia' => 'Roma'
);

$estilsGrup = [
    'Queen' => 'Rock',
    'Nirvana' => 'Grunge',
    'Extremoduro' => 'Rock Urbano',
    'Triana Pura' => 'Rock Andaluz',
    'Cafe Quijano' => 'Pop Latino'
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
    <h2>Exercici 1: Foreach basico</h2>
    
    <h3>Lista solo con valores</h3>
    <ul>
        <?php
        foreach ($grups as $grup) {
            echo "<li>$grup</li>";
        }
        ?>
    </ul>

    <h3>Lista con posicion y valor</h3>
    <ul>
        <?php
        foreach ($grups as $pos => $grup) {
            echo "<li>Posicion $pos: $grup</li>";
        }
        ?>
    </ul>


    <!-- EXERCICI 2 -->
    <h2>Exercici 2: Foreach sobre asociativo</h2>
    <table border="1">
        <tr>
            <th>Grupo</th>
            <th>Estilo</th>
        </tr>
        <?php
        foreach ($estilsGrup as $grup => $estil) {
            echo "<tr>";
                echo "<td>$grup</td>";
                echo "<td>$estil</td>";
            echo "</tr>";
        }
        ?>
        <tr>
            <td><b>Total de grupos</b></td>
            <td><b><?php echo count($estilsGrup); ?></b></td>
        </tr>
    </table>


    <!-- EXERCICI 3 -->
    <h2>Exercici 3: Lo mismo sin foreach</h2>
    <table border="1">
        <tr>
            <th>Grupo</th>
            <th>Estilo</th>
        </tr>
        <?php
        reset($estilsGrup);
        do {
            $clau = key($estilsGrup);
            $valor = current($estilsGrup);
            echo "<tr><td>$clau</td><td>$valor</td></tr>";
        } while (next($estilsGrup));
        ?>
    </table>

    <!-- Comentario del ejercicio 3 -->
    <p><b>Comentario:</b> Me parece mucho mas clara la forma de usar foreach porque no tienes que estar pendiente del puntero del array ni de usar funciones como reset, key o next. El foreach lo hace todo automatico y se entiende mejor a simple vista.</p>


    <!-- EXERCICI 4 -->
    <h2>Exercici 4: Al reves dentro de una funcion</h2>

    <?php
    function recorrerInvers(array $llista) {
        echo "<ul>";
        end($llista);
        do {
            $grupo = key($llista);
            $genero = current($llista);
            echo "<li>$grupo => $genero</li>";
        } while (prev($llista));
        echo "</ul>";
    }

    echo "<p>Llamando a la funcion recorrerInvers:</p>";
    recorrerInvers($estilsGrup);

    echo "<p>Comprobando el array original despues de la funcion:</p>";
    echo "<ul>";
    foreach ($estilsGrup as $grupo => $genero) {
        echo "<li>$grupo: $genero</li>";
    }
    echo "</ul>";
    ?>

    <!-- Comentario del ejercicio 4 -->
    <p><b>Comentario:</b> El array original no se ha modificado porque al pasarle el array a la funcion, PHP crea una copia local. Mover el puntero dentro de la funcion solo afecta a esa copia y no al array de fuera.</p>
</body>
</html>