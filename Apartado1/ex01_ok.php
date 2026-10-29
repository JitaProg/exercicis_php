<?php
//SINTAXIS PHP echo
echo 'Hola';
echo 'Hola', '', 'mundo';
echo '<p>Text</p>';

//METODOS
print 'Hola'; //retona 1
//Error 1 no printea x, la crearmos
$x= 10;
var_dump($x); //para depurar
//Error 2 no printea dades, la creamos
$dades = 'Aun no hay datos<br>';
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

//no hay nada declarado, las declaramos
$a = 'Borja';
$b = 'Lozano';
var_dump($a, $b);

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
$mensaje = '<br>Hola';

function saluda($mensaje){
  echo $intern = '<br>Adeu';
  return $mensaje;
}

$retornSalulda = saluda($mensaje);
echo $retornSalulda;