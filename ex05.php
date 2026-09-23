<?php
$nom = 'Aina';
$nota = 3;

echo 'Hola $nom'; # Hola $nom
echo "<br>";
echo "Hola $nom"; # Hola Aina
echo "<br>";
echo 'Total: ' . $nota; # Total: 3
echo "<br>";
echo "Total: $nota"; # Total: 3
echo "<br>";
echo 'Preu: $' . $nota; # Total: $3
echo "<br>";
echo "Preu: \$$nota"; # Total: $3
echo "<br>";
echo "{$nota}a posició"; # 3a posició
echo "<br>";
echo '$nota' . "$nota"; # $n3
echo "<br>";
?>