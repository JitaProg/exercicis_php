<?php
//CONDICIONALES IF/ELSE

//Ejemlo codigo php
$nota = 7.5;

if($nota >= 9){
    $qualif = 'Exel·lent';
}elseif($nota >= 7){
    $qualif = 'Notable';
}elseif($nota >= 5){
    $qualif = 'Aprovat';
}else{
    $qualif = 'Suspes';
}
?>

//Ejemplo codigo php dentro de html
//Primer metodo --> Menos lejible
<?php
$estoc = 5;
?>
<?php if ($estoc > 0) { ?>
    <p>En estoc</p>
<?php } else { ?>
    <p>Esgotat</p>
<?php } ?>
//Segundo metodo --> Mucho mas lejible
<?php if ($estoc > 0): ?>
    <p>En estoc</p>
<?php else: ?>
    <p>Esgotat</p>
<?php endif?>


//SWITCH CASE

//Case clasico
<?php
$zona = 'local';
switch ($zona){
    case 'local':
        $enviament = 0;
        break;
    case 'peninsula':
        $enviament = 4.95;
        break;
    default:
        $enviament = 9.95;
}
?>
//Case math
<?php
$enviament = match ($zona) {
    'local'     => 0,
    'peninsula' => 4.95,
    default     => 9.95,
};
?>

//BUCLES

//for
<?php
for($i = 1; $i <= 10; $i++){
    echo $i;
}
?>

//while
<?php
$saldo = 100;
$objetivo = 500;
$anos = 15;
while($saldo < $objetivo){
    $saldo *= 1.03;
    $anos++;
}
?>

//do while
<?php
do{
    $n = rand(1,6);
}while($n !== 6);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    <?php for($i=1; $i <=10; $i++): ?>
        <tr>
            <td><?= $i?> x 7 =</td>
            <td><?= $i * 7?></td>
        </tr>
    <?php endfor; ?>
    </table>
</body>
</html>

//Arrays
<?php
    $colores = ['rojo', 'verde', 'azul'];

    echo $colores[0];
    echo count($colores);

    $colores[] = 'amarillo';

    print_r($colores);
?>

//Array asociativo 
<?php
    $producto = [
        'nombre'    => 'Teclado mecanico',
        'precio'    => 79.90,
        'estoc'     => 4,
    ];

    echo $producto['nombre'];
    $producto['precio'] = 69.96;
?>

//For each para recorrer un array
//Para un solo valor
<?php
    foreach ($colores as $color) {
        echo "<li>$color</li>";
    }
?>

//Para varios valores a la hora
<?php
    $producte = [
        'clave'     => 'Pin',
        'valor'     => 7856,
    ];
    foreach ($producte as $clave => $valor) {
        echo "<dt>$clave</dt>";
        echo "<dd>$valor</dd>";
    }
?>

//ARRAY DENTRO DE UN ARRAY
<?php
    $productos = [
        ['nombre' => 'Teclado', 'precio' => 79.9],
        ['nombre' => 'Raton', 'precio' => 24.5],
        ['nombre' => 'Monitor', 'precio' => 189],
    ];
?>
<?php foreach ($productos as $p): ?>
    <tr>
        <td><?= $p['nombre']?></td>
        <td><?= $p['precio']?> EUR</td>
    </tr>
<?php endforeach; ?>

//FUNCIONES PRESTABLECIDAS
count($a) --> Cuantos elementos tiene
in_array ($x , $a, true) --> Si un valor esta
array_key_exist('k', $a) --> Si una llave existe
sort / rsort / ksort --> Ordena per valor o per clau
array_sum / max / min --> Suma, maximo, minimo
array_colum($a, 'precio') --> Quita una columna de una array asociativa
implode(', ', $a) / explode --> Array a texto y texto a array