<?php

const IVA = 0.21;
const BOTIGA = 'Optimus Ferreteria';
const DIRECCION = 'Calle la Palma 29';
const MONEDA = '€';
const DESCOMPTE_SOCI = 0.5;

// Número original con punto decimal (formato estándar de programación)
$precio = 1029050.99;
$iva = 21;
$total = round($precio * (1 + IVA), 2);
$disponibilidad = 5;
$referencia = "CAM-1234567";

// Queremos:
// 1. Mostrar 2 decimales
// 2. Usar COMA (,) para los decimales
// 3. Usar PUNTO (.) para los miles
$precioFormateado = number_format($precio, 2, ',', '.');
$precioIVAFormateado = number_format($total, 2, ',', '.');
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=BOTIGA?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Tienda <?=BOTIGA?></h1>
        <h3>Dirección: <?=DIRECCION?></h3>
    </header>

    <main>
        <article class="producte">
            <h2>Martillo</h2>
            <p class="descripcion">Percutor</p>
            <p class="preu">Preu sense IVA: <?php echo $precioFormateado . ' ' . MONEDA ?></p>
            <p class="preu">IVA (<?php echo $iva ?>%): MUCHO</p>
            <p class="total">TOTAL: <?php echo $precioIVAFormateado . ' ' . MONEDA?></p>

            <p class="estoc">Unitats disponibles: <?= $disponibilidad ?></p>
            <p class="ref"><?= $referencia?></p>
        </article>
        <?php
        const MONEDA = '$';
        ?>
        <article class="producte">
            <h2>Destornillador</h2>
            <p class="descripcion">Estrella</p>
            <p class="preu">Preu sense IVA: <?php echo $precio  . ' ' . MONEDA?></p>
            <p class="preu">IVA (<?php echo $iva ?>%): MUCHO</p>
            <p class="total">TOTAL: <?php echo $total  . ' ' . MONEDA?></p>

            <p class="estoc">Unitats disponibles: <?= $disponibilidad ?></p>
            <p class="ref"><?= $referencia?></p>
        </article>
    </main>

    <footer>
        <p>Footer de la tienda <?=BOTIGA?> S.L</p>
    </footer>
</body>
</html>