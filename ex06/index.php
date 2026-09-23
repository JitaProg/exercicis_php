<?php

const IVA = 0.21;
const BOTIGA = 'guay';
const MONEDA = '€';
const DESCOMPTE_SOCI = 0.5;

$precio = 99.99;
$iva = 21;
$total = round($precio * (1 + IVA), 2);
$disponibilidad = 5;
$referencia = "CAM-1234567";

//HE BUSCADO EL NUMEBR FORMAT PERO NO LO HE APUNTADO
//PREFIERO MIRARMELO MEJOR
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda online guay</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Tienda Online guay</h1>
        <p>Esto es una tienda online guay</p>
    </header>

    <main>
        <article class="producte">
            <h2>Camiseta Guay</h2>
            <p class="descripcion">Camiseta chupiguay</p>
            <p class="preu">Preu sense IVA: <?php echo $precio . ' ' . MONEDA ?></p>
            <p class="preu">IVA (<?php echo $iva ?>%): MUCHO</p>
            <p class="total">TOTAL: <?php echo $total . ' ' . MONEDA?></p>

            <p class="estoc">Unitats disponibles: <?= $disponibilidad ?></p>
            <p class="ref"><?= $referencia?></p>
        </article>
        <?php
        const MONEDA = '$';
        ?>
        <article class="producte">
            <h2>Camiseta Guay</h2>
            <p class="descripcion">Camiseta chupiguay</p>
            <p class="preu">Preu sense IVA: <?php echo $precio  . ' ' . MONEDA?></p>
            <p class="preu">IVA (<?php echo $iva ?>%): MUCHO</p>
            <p class="total">TOTAL: <?php echo $total  . ' ' . MONEDA?></p>

            <p class="estoc">Unitats disponibles: <?= $disponibilidad ?></p>
            <p class="ref"><?= $referencia?></p>
        </article>
    </main>

    <footer>
        <p>Footer de la tienda chupi guay S.L</p>
    </footer>
</body>
</html>