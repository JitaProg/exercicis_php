<?php
/*PAS 4 - VALIDAR CONTROL DE ERRORES Y ESCAPAR*/

$nom = '';
$correu = '';
$dia = '';
$errors = [];
$inscrit = false;

if (isset($_POST['reiniciar'])) {
    $inscrit = false;
    $nom = '';
    $correu = '';
    $dia = '';
}

// Si recibimos los datos (CORREGIDO: corchetes en vez de paréntesis)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = trim($_POST['nom'] ?? '');
    $correu = trim($_POST['correu'] ?? '');
    $dia = trim($_POST['dia'] ?? '');

    // VALIDACION DE ERRORES
    if ($nom === '') {
        $errors['nom'] = 'El nom es obligatori.';
    }

    if ($correu === '') {
        $errors['correu'] = 'El correu es obligatori.';
    } elseif (filter_var($correu, FILTER_VALIDATE_EMAIL) === false) {
        $errors['correu'] = 'Aquest correu no té un format valid.';
    }

    if ($dia != 'divendres' && $dia != 'dissabte') {
        $errors['dia'] = 'Has de triar un dia.';
    }

    // Si el array de errores es = 0 quiere decir que no hay ningun error
    if (count($errors) === 0) {
        $inscrit = true;
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscripcion al festival</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Inscripcio al festival</h1>

    <?php if ($inscrit): ?>
        <!-- ESCAPAR los datos-->
        <p class="ok">Inscripcio feta, <?= htmlspecialchars($nom) ?></p>
        <p class="ok">T'esperem el <?= htmlspecialchars($dia) ?></p>

        <form method="post">
            <input type="hidden" name="reiniciar" value="1">
            <button type="submit">Fer una altra inscripció</button>
        </form>
        
    <?php else: ?>
        <!-- novalidate en el form para ver los errores desde el php (servidor)-->
        <form method="post" novalidate>

            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" value="<?= htmlspecialchars($nom) ?>">
            <?php if (isset($errors['nom'])): ?>
                <p class="error"> <?= $errors['nom'] ?> </p>
            <?php endif; ?>

            <label for="correu">correu</label>
            <input type="text" id="correu" name="correu" value="<?= htmlspecialchars($correu) ?>">
            <?php if (isset($errors['correu'])): ?>
                <p class="error"> <?= $errors['correu'] ?> </p>
            <?php endif; ?>

            <label for="dia">Dia</label>
            <select name="dia" id="dia">
                <option value="">Tria un dia</option>
                <option value="divendres" <?= $dia === 'divendres' ? 'selected' : '' ?>>Divendres</option>
                <option value="dissabte" <?= $dia === 'dissabte' ? 'selected' : '' ?>>Dissabte</option>
            </select>
            <?php if (isset($errors['dia'])): ?>
                <p class="error"><?= $errors['dia'] ?></p>
            <?php endif; ?>

            <button>Inscribirme</button>
        </form>
    <?php endif; ?>
</body>
</html>