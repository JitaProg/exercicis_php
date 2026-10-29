<?php

//FUNCIONES PRESTABLECIDAS DE PHP

//isset() --> Permite saber si una variable existe en nuestro programa


//unset() --> Para liberar espacio en memoria (destruir) de una variable

$var = "10";

if(isset($var)){
    echo "La variable $var existe";
}

unset($var);
if(isset($var)){
    echo "La variable $var existe";
}else{
    echo "La variable $var no existe<br>";
}

//gettype() --> Nos retorna el tipo de variable que pasamos por parametro

//settype() --> Assignamos un tipo de dato a la variable que pasamos por parametro

//empty() --> Funcion que mira si una variable esta vacia, no existe o su valor es 0

//is_integer(var), is_double(var), is_array(var), is_string(var) --> para saber si una variable es de algun de este tipo

//EX1: for para la tabla de multiplicar del 5
//var existe?
$tabla = 5;
if(isset($tabla)){
    for($i=1; $i<=10; $i++){
        echo "$i x $tabla = " . $tabla*$i;
        echo "<br>";
    }
}else{
    echo "La variable $tabla no existe<br>";
}


//EX2: mostrar los numeros pares del 1 al 100
for($i=0;$i<=100;$i++){
    if($i%2==0){
        echo "Numero: $i<br>";
    }
}
//EX3: dibuja una tabla html donde salgan 
// las tablas de multiplicar del 1 al 10
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
            border: 1px solid black;
            border-radius: 40px;
        }
        table th{
            border: 1px solid black;
            padding: 10px;
            border-radius: 15px;
        }
        table td{
            text-align: center;
            padding: 15px;
            border: 1px solid black;
            border-radius: 15px;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
            <?php for($tabla = 1; $tabla <= 10; $tabla++): ?>
                <th><?php echo "Tabla del $tabla"?></th>
            <?php endfor; ?>
            </tr>
        </thead>
        <tbody>
            <?php for($i = 1; $i <= 10; $i++): ?>
                <tr colspan="10">
                    <?php for($tabla = 1; $tabla <= 10; $tabla++): ?>
                        <td><?php echo "$tabla x $i = " . $i*$tabla?></td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>
</body>
</html>