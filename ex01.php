<?php
//SINTAXIS PHP echo
echo 'Hola';
echo 'Hola', '', 'mundo';
echo '<p>Text</p>';

//METODOS
print 'Hola'; //retona 1
var_dump($x); //para depurar
print_r($dades); //legible

//DECLARAR VARIABLES
$nom = 'Aina';
$edad = 19;
$actiu = true;

$nom = 'Bernat'; //Se puede cambiar
$total = $edad + 1;

echo $nom;

$x = 5; //numero
$x = 'cinco'; //ahora string

//CONCATENAR
$a = '10' + 5; // 15 (int)
$b = '10' . 5; // '105' (string)

var_dump($a, $v);

//COMO PRINTEAR VARIABLES
/* 
siempre con comillas dobles, 
sino no interpreta las variables
 */
$nombre = 'Aina';
echo "Hola $nombre<br>";

//COMO NO PRINTEAR
echo '<br>Hola $nombre<br>';

//TRES MANERAS DE PRINTEAR
$punts = 10;
$nom = 'Borja';
echo '<br>Hola ' . $nom . ', tens ' . $punts . ' punts.<br>';
echo "<br>Hola $nom, tens $punts punts.<br>";
echo "<br>Hola {$nom}, tens {$punts} punts.<br>";

//CONSTANTES
define('IVA', 0.21); //metodo 1 define
const BOTIGA = '<br>Ca la Web<br>'; //metodo 2 const

$base = 20;

echo BOTIGA; // SIN $
$total = $base * (1 / IVA);

echo "<br>Base: {$total}";

//IVA = 0.10; -->ERROR FATAL no se puede cambiar

//FUNCIONES
$mensaje = 'Hola';

function saluda(){
  echo $mensaje; // NO la puede ver la variable
  $intern = 'Adeu'; // SI la puede ver
}

saluda();
echo $intern;

//DIRECTIVAS
/* declare(strict_types=1); // Tipea de manera mas estrictia

ini_set('display_errors' , '1'); //Cambia un parametro solo con esta peticion

error_reporting(E_ALL); //Decide que nivel de error tiene

setlocale(); //idioma
date_default_timezone_set(); //Zona horaria */




