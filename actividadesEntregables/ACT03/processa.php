<?php
//Array para controlar errores
$errores = [];

//Si el usuario a introducico por url directamente la direccion:
if($_SERVER['REQUEST_METHOD'] !== 'POST'){

    echo '<p>Tienes que llegar aqui des de el formulario</p>';
    echo '<p>Vuelve al formulario</p>';
    exit;

//Si el usuario a dado al boton de enviar y se efectua el metodo POST del form:
}else{

    //Creamos el array asociativo donde guardaremos directamente lo que recojemos en el form
    $usuario = [
        //Variables con trim
        'Nombre' => trim($_POST['name'] ?? ''),
        'Apellidos' => trim($_POST['lastName'] ?? ''),
        'Nacimiento' => trim($_POST['date'] ?? ''),
        'Telefono' => trim($_POST['phone'] ?? ''),
        'Correo' => trim($_POST['email'] ?? ''),
        'Usuario' => trim($_POST['nameUser'] ?? ''),
        'Direccion' => trim($_POST['street'] ?? ''),
        'Ciudad' => trim($_POST['city'] ?? ''),
        'Codigo Postal' => trim($_POST['postalCode'] ?? ''),
        'Tipo' => trim($_POST['tipeClient'] ?? ''),
        'Descubrimiento' => trim($_POST['conocer'] ?? ''),
        //Variables con isset (ya que checkbox devuelve true o false)
        'Boletin' => isset($_POST['boletin']) ? 'Sí' : 'No',
        'Condiciones' => isset($_POST['condiciones']) ? 'Sí' : 'No'
    ];

    //Variables de password fuera del array para no mostrarlo al recorrer el array
    //y que nunca mostremos informacion sensible
    $password = trim($_POST['password'] ?? '');
    $passwordTwo = trim($_POST['passwordTwo'] ?? '');

    //Validaciones de todos los campos, o casi todos...
    if($usuario['Nombre'] === ''){
        $errores[] = 'Introduce un nombre.';
    }

    if($usuario['Apellidos'] === ''){
        $errores[] = 'Introduce unos apellidos.';
    }

    if($usuario['Nacimiento'] === ''){
        $errores[] = 'Introduce una fecha de nacimiento.';
    }

    if($usuario['Telefono'] === ''){
        $errores[] = 'Introduce un numero de telefono.';
    }elseif(strlen($usuario['Telefono']) < 9){
        $errores[] = 'Numero de telefono no valido.';
    }

    if($usuario['Correo'] === ''){
        $errores[] = 'Introduce un email.';
    }elseif(filter_var($usuario['Correo'], FILTER_VALIDATE_EMAIL) === false){
        $errores[] = 'Email con formato no valido.';
    } 

    if($usuario['Usuario'] === ''){
        $errores[] = 'Introduce un nombre de usuario.';
    }elseif(strlen($usuario['Usuario']) < 4){
        $errores[] = 'Nombre de usuario con formato invalido.';
    }

    if($password === '' || $passwordTwo === ''){
        $errores[] = 'Introduce una contarseña y su repeticion.';
    }elseif(strlen($password) < 6 && strlen($passwordTwo) < 6){
        $errores[] = 'Contraseña con formato invalido.';
    }elseif($password !== $passwordTwo){
        $errores[] = 'Las contraseñas no coinciden.';
    }

    if($usuario['Codigo Postal'] === ''){
        $errores[] = 'Introduce un codigo postal.';
    }elseif(strlen($usuario['Codigo Postal']) !== 5){
        $errores[] = 'Codigo postal con formato invalido.';
    }

    if($usuario['Tipo'] === ''){
        $errores[] = 'Seleccione el tipo de cliente';
    }

    if($usuario['Condiciones'] === 'No'){
        $errores[] = 'Condiciones de servicio vacio.';
    }
}
//Ya hemos hecho todas las comprovaciones y printearemos en html

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado formulario</title>
    <link rel="stylesheet" href="estils.css">
</head>
    <body>
        <?php if(count($errores) > 0): ?>
            <div class="error">
                <h2>El usuario no se ha podido registrar.</h2>
                <h3>#Errores:</h3>
                <ul>
                <?php foreach($errores as $error): ?>
                    <li><?= htmlspecialchars($error)?></li>
                <?php endforeach; ?>
                </ul>
            </div>
        <?php else: ?>
            <div class="correcto">
                <h2>Usuario <?= htmlspecialchars($usuario['Nombre'])?> creado</h2>
                <table>
                    <?php foreach($usuario as $clave => $valor): ?>
                    <tr>
                        <th><?= htmlspecialchars($clave)?></th>
                        <td><?= htmlspecialchars($valor)?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        <?php endif; ?>
    </body>
</html>