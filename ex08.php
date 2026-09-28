Crear un array asociativo con:
- nombre
- curso
- edat
- nota_media

10 alumnos

Mostrar en table html

<?php
    $alumnos = [
        ['nombre' => 'Borja', 'curso' => 'DAW', 'edat' => 18, 'nota_media' => 8.5],
        ['nombre' => 'Alvaro', 'curso' => 'DAW', 'edat' => 18, 'nota_media' => 8.5],
        ['nombre' => 'Arnau', 'curso' => 'DAW', 'edat' => 18, 'nota_media' => 8.5],
        ['nombre' => 'Jesus', 'curso' => 'DAW', 'edat' => 18, 'nota_media' => 8.5],
        ['nombre' => 'Alex', 'curso' => 'DAW', 'edat' => 18, 'nota_media' => 8.5],
        ['nombre' => 'Pau', 'curso' => 'DAW', 'edat' => 18, 'nota_media' => 8.5],
        ['nombre' => 'Oscar', 'curso' => 'DAW', 'edat' => 18, 'nota_media' => 8.5],
        ['nombre' => 'Enriqueta', 'curso' => 'DAW', 'edat' => 18, 'nota_media' => 8.5],
        ['nombre' => 'Victor', 'curso' => 'DAW', 'edat' => 18, 'nota_media' => 8.5],
        ['nombre' => 'Navau', 'curso' => 'DAW', 'edat' => 18, 'nota_media' => 8.5],
    ]

    /* COUNT
    count — Cuenta todos los elementos de un array o en un objeto
    */
    $total_alumnos = count($alumnos);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            padding: 15px;
        }
        table td{
            padding: 20px;
            border: 1px solid black
        }
    </style>
</head>
<body>
    <table>
            <tr>
                <th>Nombre</th>
                <th>Curso</th>
                <th>Edad</th>
                <th>Nota</th>
            </tr>
        <?php foreach($alumnos as $a): ?>
            <tr>
                <td><?=$a['nombre']?></td>
                <td><?=$a['curso']?></td>
                <td><?=$a['edat']?></td>
                <td><?=$a['nota_media']?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <p><?="Total de alumnos: $total_alumnos"?></p>
</body>
</html>