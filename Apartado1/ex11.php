<?php
$cadena = "Hola";

echo "cadena aqui es: $cadena<br>";

$cadena[0] = "C";

echo "Ahora cadena es: $cadena <br>";

//Funciones prestablecidas de PHP

//strlen --> medir la longitud de la cadena
$cadena = "Aquesta cadena te moltes lletres";
$num_caracters = strlen($cadena);

echo "El total de caracteres es: $num_caracters<br>";

//strpos --> retorna la casilla donde se encuentra la subcadena
//dentro de la cadena pasada
//Siempre retorna la primera ocurrencia
$email = "hola@jviladoms.cat";
echo "Posicion del @: " . strpos($email, "@") . "<br>";

//strcmp --> string compare, compara dos cadenas
//si retorna  es igual
//strcmp($cad1, $cad2);
//si retorna <0 la primera cadena es mas pequeña
//si retorna >0 la segunda cadena es mas grande
$cad1 = "Alejandra";
$cad2 = "Pepe";
echo "Utilizamos strcmp: " . strcmp($cad1, $cad2) . "<br>";

//substr --> retorna una subcadena de caracteres de una
//cadena a partir de una posicion especificada hasta el final
//la cadena original no sufre ninguna modificacion

$cadena = "PHP es un lenguaje facil";
echo "El substr de 0 a 3 es: " . substr($cadena, 0, 3) . "<br>"; //saldra PHP
echo "El substr de 21" . substr($cadena, 21) . "<br>";

//trim: elimina los espacios en blanco y saltos de linea que hay
//al principio y al final de una cadena

echo "Ejemplo con trim: " .trim("      hola     que     tal      ") . "<br>";

//ltrim --> elimina los espacios que hay en blanco al principio de la cadena

echo "Ejemplo de ltrim: " . ltrim("       Hola que tal") . "<br>";

//str_replace($antigua, $nueva, $cadena) --> sustituye la cadena $antigua por
//la cadena $nueva dentro de $cadena
$cadena = "PHP es facil";
$antigua = "es facil";
$nueva = "no es dificil";

echo "Ejemplo str_replace: " .str_replace($antigua, $nueva, $cadena) . "<br>";

// ereg_replace // eregi_replace() --> 

// strtolower($cadena) --> Pasa todo a minuscula
// strtoupper($cadena) --> Pasa todo a mayuscula

//execici 1: busca en php.net la funcion str_word_count() y pon un ejemplo

//exercici 2: busca en php.net la funcion levenshtein() y pon un ejemplo

//exercici 3: busca que es el operador ternario y pon un ejemplo

//exercici 4: 
?>