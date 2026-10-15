<?php

/*PASO 3 UNA SOLA PAGINA
Hasta ahora teniamos dos ficheros, el formulario y el resultado
Mira como se hace la peticion y asi hara una cosa o otra
La primera visita es con GET y cuando se da al boton de enviar es con POST
*/

$nom = "";
$correu = "";
$dia = "";

// variable de control
$enviado = false;

//Array predefinido $_SERVER nos da informacion del servidor
/* echo "<pre>";
print_r($_SERVER);
echo "</pre>"; */

//Si el Request method es POST es que ya se a cliado
//al boton de enviar del formulario con method=post

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nom    = trim($_POST['nom'] ?? '');
    $correo = trim($_POST['correo'] ?? '');
    $dia    = trim($_POST['dia'] ?? 'sin escojer');
    $compruevaCorreo = trim($POST['compruevaCorreo'] ?? '');
    $enviado = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscripcion al Festival</title>
</head>
<body>
    <div class="fondoForm">
        <h1>Inscripcion al Festival</h1>

        <?php if($enviado): ?>
            <p>Inscripcion recibida: <?= $nom ?>
            (<?= $correo ?>)<br> Dia: <?= $dia ?>,</p>
        <?php endif; ?>

        <form method="post">

            <input type="text" id="nom" name="nom" placeholder="Introduce un nombre">
            <input type="email" id="correo" name="correo" placeholder="Introduce tu correo">
            <?php if(strcmp($compruevaCorreo, $correo)): ?>
                
            <?php else ?>
            
            <?php endif; ?>
            <input type="email" id="compruevaCorreo" name="compruevaCorreo" placeholder="Repite tu correo">

            <select name="dia" id="dia">
                <option value="viernes">Viernes</option>
                <option value="sabado">Sabado</option>
            </select>

            <button>Inscribirme</button>
        </form>
    </div>
</body>
</html>