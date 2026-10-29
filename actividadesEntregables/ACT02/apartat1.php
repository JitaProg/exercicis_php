<?php
//EXECICI 1
$grups[0] = 'Queen';
$grups[1] = 'Nirvana';
$grups[2] = 'Extremoduro';
$grups[8] = 'Triana pura';
$grups[] = 'Cafe Quijano';

$estils = array('Header','Footer','Body');

$edicions = range(2019,2026);

$paraules = explode(' ','Hola Casaponsa como estas');

//Con print_r vemos el array completo
//con el dato de la variable guardado
//y su posicion en el array
print_r($grups);
print_r($estils);
print_r($edicions);
print_r($paraules);

//Con var_dump veo que printea el array
//de una manera mas estructurada y limpia
//ademas de darme la longitud exacta de
//cada variable
var_dump($grups);
var_dump($estils);
var_dump($edicions);
var_dump($paraules);

//Vemos casi lo mismo que en print_r pero
//con otro formato, veo que los numeros
//los da como number y las palabras entre
//comillas simples indicando que son strings
var_export($grups);
var_export($estils);
var_export($edicions);
var_export($paraules);

//EXECICI 2

    $estilsGrups[$grups[0]] = 'Rock';
    $estilsGrups[$grups[1]] = 'Rock Suave';
    
    $estilsGrups[$grups[2]] = array('Rock Andaluz')['0'];
    $estilsGrups[$grups[8]] = array('Andaluz')['0'];

    $estilQueen = $estilsGrups['Queen'];

    $estilsGrups['Cafe Quijano'] = 'Pop Latino';

    $totalGrups = count($estilsGrups);

//EXERCICI 3
    $grupsNumerics = array('Grup1', 'Grup2', 'Grup3', 'Grup4', 'Grup5');
    $countInicial = count($grupsNumerics);

    // Esborrar el tercer grup (índex 2) amb unset()
    unset($grupsNumerics[2]);
    $countDespres = count($grupsNumerics);

    // Afegir un grup nou amb []
    $grupsNumerics[] = 'Grup Nou';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php print_r($grups)?>
    </pre>
    <pre>
        <?php print_r($estils)?>
    </pre>
    <pre>
        <?php print_r($edicions)?>
    </pre>
    <pre>
        <?php print_r($paraules)?>
    </pre>
    <pre>
        <?php print_r($estilsGrups)?>
        <?php print_r($estilQueen)?>
    </pre>
    <pre>
        <?php print_r($grupsNumerics)?>
    </pre>
</body>
</html>