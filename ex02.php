<?php
//EJEMPLO TONTO DE PHP CON HTML
const IVA = 0.21;

$producte = 'Teclado';
$base = 79.90;
$estoc = 4;
$total = round($base * (1 + IVA), 2) ;

$nombre = 'Borja';
$apellido = 'Lozano';
$direccion = 'Avenida Matadepera 239';

?>

<h1>EJEMPLO 1</h1>
<h2>Productos</h2>
<p> <?php echo "Total: {$total} €"; ?> </p>
<p>Precio con IVA: <?= $total ?> €</p>
<p>Disponibilidad: <?= $estoc ?> </p>

<h1>EJEMPLO 2</h1>
<h2>Nombres</h2>
<p> <?php echo "<b>Nombre:</b> {$nombre} {$apellido}" ?> </p>
<p> <b>Dirección:</b> <?= $direccion ?> </p>