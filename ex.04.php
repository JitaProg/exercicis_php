<?php
/* 
ERROR1 = 1a lineanom, le falta el simbolo del $ ;
ERROR2 = 2a linea, falta el puntoYcoma ;
ERROR3 = 15a liena, falta parentesis para jerarquia de operación ;
ERROR4 = 18a linea, mala estructuracion en la concatenacion falataban . ;
ERROR5 = 19a linea, no se concatena con + ;
ERROR6 = 20a linea, no habia ; ;
*/
$nom = 'Aina';
$assignatura = 'Desenvolupament web';

$nota = 7;
$nota2 = 9;
$mitjana = ($nota + $nota2) / 2;

echo '<h1>Bulelti de notes</h1>';
echo '<p>Alumna: ' . $nom . '</p>';
echo '<p>Assignatura: ' . $assignatura . '</p>';
echo "<p>Mitjana: $mitjana</p>";

echo '<p>Generat el ' . date('d/m/Y') . '</p>';