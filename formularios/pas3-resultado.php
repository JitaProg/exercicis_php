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
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
?>