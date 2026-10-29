<?php
//FUNCIONES
/* 
function nomFuncion($arg, $arg){
    codigo de la funcion
    return valor o no;
}
*/

//Funcion con return
function funcionTest(){
    $var = 10;
    return $var;
}

$guardarFuncion = funcionTest();
echo "La variable igualada a la funcion es: $guardarFuncion<br>";

//Funcion sin return
function funcionTestSin(){
    $var = 20;
    echo "La variable dentro de la funcion vale: $var<br>";
}

funcionTestSin();

//Como podemos utilizar de las funciones variables globales
$var2 = 50;

function funcionConGlobal(){
    //Para poder utilizar una variable de fuera del ambito
    //de la funcion se utiliza la palabra reservada global
    global $var2;

    echo "La variable var2 de la funcion vale: $var2<br>";
}

funcionConGlobal();


//RECURSIVIDAD
//Una funcion se puede llamar a si misma o a otra

function factorial($numero){
    if($numero == 1){
        return $numero;
    }else{
        return $numero * factorial($numero - 1);
    }
}
echo "El factorial de 7 es: " . factorial(7) . "<br>";

?>