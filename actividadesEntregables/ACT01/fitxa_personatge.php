<?php
//CONSTANTES
const NOMBRE_JUEGO = "Dragones y Mazmorras";
const VIDA_MAXIMA = 1000;
const EXPERIENCIA_NIVEL = 5000;
const FUERZA_MAXIMA = 100;
const VIDA_REDUCIDA = 30;

//VARIABLES
$nombre = "Francisco de Borja";
$clase = "Guerrero";
$nivel = 7;
$vidaActual = 105;
$fuerzaActual = 33;
$experiencia = 4850;
$ataqueBasico = 12;

//CALCULOS
$porcentageVida = round(($vidaActual / VIDA_MAXIMA) * 100, 1);
$porcentageFuerza = round(($fuerzaActual / FUERZA_MAXIMA) * 100, 1);
$experienciaFaltante = EXPERIENCIA_NIVEL - $experiencia;
$poderDeAtaque = $ataqueBasico * ($nivel * 2);

$estadoPersonaje;
if($porcentageVida <= 0){
$estadoPersonaje = "Muerto";
}elseif($porcentageVida < 25){
    $estadoPersonaje = "Herido";
}elseif($porcentageVida < 50){
    $estadoPersonaje = "Estable";
}elseif($porcentageVida < 75){
    $estadoPersonaje = "Saludable";
}elseif($porcentageVida < 101){
    $estadoPersonaje = "Vigoroso";
}

//DATOS PIE DE PAGINA
$fecha = date('d/m/Y H:i');
$versionPhp = phpversion();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D&G</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="bloque">
        <div class="primer">
            <h2>Dragones y mazmorras</h2>
            <span>Ficha de personage</span>
        </div>

        <div class="carta">
            <div class="segundo">
                <h2><?= $nombre?></h2>
                <p class="clase"><?=$clase?> · NIVEL <?=$nivel?> </p>
            </div>

            <div class="estadistica">
                <span>Vida</span>
                <span><?= $vidaActual ?> / <?= VIDA_MAXIMA ?> (<?= $porcentageVida ?> %)</span>
            </div>
            <div class="barra"><span class="vida" style="width: <?= $porcentageVida ?>%"></span></div>

            <div class="estadistica">
                <span>Fuerza</span>
                <span><?= $fuerzaActual ?> / <?= FUERZA_MAXIMA ?> (<?= $porcentageFuerza ?> %)</span>
            </div>
            <div class="barra"><span class="mana" style="width: <?= $porcentageFuerza ?>%"></span></div>

            <div class="final">
                <p>Poder de ataque</p>
                <p><?= $poderDeAtaque?></p>
            </div>

            <div class="final">
                <p>Experiencia</p>
                <p><?= $experiencia?> / <?= EXPERIENCIA_NIVEL?></p>
            </div>

            <div class="final">
                <p>Le faltan</p>
                <p><?= $experienciaFaltante?> puntos para subir de nivel</p>
            </div>
            <button><?=$estadoPersonaje?></button>
        </div>
        <div class="footer">
            <p>Ficha generada el <?= $fecha?> · PHP <?=$versionPhp?></p>
        </div>
    </div>
</body>
</html>