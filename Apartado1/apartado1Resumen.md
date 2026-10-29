# Resumen Apartado 1  

---

## 1. Control de Acceso por Método HTTP (`$_SERVER`)
* **Explicación:** Impide que los usuarios accedan directamente a una página de procesamiento escribiendo la URL en el navegador. Comprueba que los datos hayan sido enviaron únicamente mediante una petición `POST`.
* **Ejemplo:**
  ```php
  if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
      echo '<p>Has d\'arribar aquí des del formulari. <a href="registre.html">Torna-hi</a></p>';
      exit;
  }
  ```

---

## 2. Recogida Segura de Datos (`trim` y Null Coalescing `??`)
* **Explicación:** Se recogen los datos del array superglobal `$_POST`. El operador `?? ''` evita avisos de PHP (*Undefined array key*) si la clave no fue enviada, y `trim()` elimina espacios en blanco al inicio y al final.
* **Ejemplo:**
  ```php
  $nombre = trim($_POST['nombre'] ?? '');
  ```

---

## 3. Manejo de Casillas de Verificación (*Checkboxes* con `isset()`)
* **Explicación:** Las casillas de verificación no marcadas no se envían al servidor (no existen en `$_POST`). Se debe usar `isset()` para determinar si la clave existe y asignar un valor representativo.
* **Ejemplo:**
  ```php
  $condiciones = isset($_POST['condiciones']) ? 'si' : 'no';
  ```

---

## 4. Almacenamiento Estructurado en Arrays Asociativos
* **Explicación:** Guarda los datos recogidos en un único array donde cada clave es el nombre del campo. Por motivos de seguridad, las contraseñas se almacenan en variables separadas y nunca en el array general que se expondrá posteriormente.
* **Ejemplo:**
  ```php
  $usuario = [
      'nombre'      => trim($_POST['nombre'] ?? ''),
      'email'       => trim($_POST['email'] ?? ''),
      'condiciones' => isset($_POST['condiciones']) ? 'si' : 'no'
  ];

  $password = trim($_POST['password'] ?? '');
  ```

---

## 5. Validaciones de Datos y Acumulación de Errores
* **Explicación:** Se comprueba el cumplimiento de restricciones (campos vacíos, longitud con `strlen()`, formato de correo con `filter_var()`, coincidencia de claves). Cada fallo se añade como un nuevo elemento a un array indexado `$errores`.
* **Ejemplo:**
  ```php
  $errores = [];

  // Validación de campo obligatorio
  if ($usuario['nombre'] === '') {
      $errores[] = 'El nombre es obligatorio.';
  }

  // Validación de email
  if ($usuario['email'] === '') {
      $errores[] = 'El email es obligatorio.';
  } elseif (filter_var($usuario['email'], FILTER_VALIDATE_EMAIL) === false) {
      $errores[] = 'El formato del email no es válido.';
  }

  // Validación de longitud
  if (strlen($usuario['nombre']) < 4) {
      $errores[] = 'El nombre debe tener al menos 4 caracteres.';
  }
  ```

---

## 6. Renderizado Condicional y Render de Errores
* **Explicación:** Mediante `count($errores) > 0` se verifica si existen fallos. Si existen, se recorre el array con un `foreach` para listar las incidencias; si no, se muestra el resultado final.
* **Ejemplo:**
  ```php
  if (count($errores) > 0) {
      echo '<h2>No se ha podido procesar el formulario</h2>';
      echo '<ul>';
      foreach ($errores as $error) {
          echo '<li>' . htmlspecialchars($error) . '</li>';
      }
      echo '</ul>';
  } else {
      // Procesamiento correcto
  }
  ```

---

## 7. Generación Dinámica de Tablas HTML y Prevención XSS (`htmlspecialchars`)
* **Explicación:** Para presentar los datos procesados, se recorre el array asociativo con un bucle `foreach ($usuario as $clave => $valor)`. Es **obligatorio** envolver cualquier variable enviada por el usuario en `htmlspecialchars()` para neutralizar posibles inyecciones de código HTML/JavaScript (Ataques XSS).
* **Ejemplo:**
  ```php
  <table border="1">
      <?php foreach ($usuario as $clave => $valor): ?>
          <tr>
              <th><?= htmlspecialchars($clave) ?></th>
              <td><?= htmlspecialchars($valor ?? '') ?></td>
          </tr>
      <?php endforeach; ?>
  </table>
  ```

---

## 8. Tipos de Arrays en PHP
* **Explicación:** 
  * **Array Indexado:** Claves numéricas automáticas (`0, 1, 2...`). Utilizado para listas simples de elementos (como el array `$errores`).
  * **Array Asociativo:** Claves de texto personalizadas (`'nombre' => 'Valor'`). Usado para representar fichas o entidades (como `$usuario`).
  * **Array Multidimensional:** Arrays conteniendo otros arrays dentro. Utilizado para tablas complejas o colecciones de registros.
* **Ejemplo:**
  ```php
  // Indexado
  $lista = ['manzana', 'pera'];

  // Asociativo
  $persona = ['nombre' => 'Borja', 'edad' => 25];

  // Multidimensional
  $usuarios = [
      ['nombre' => 'Borja', 'email' => 'borja@test.com'],
      ['nombre' => 'Ana', 'email' => 'ana@test.com']
  ];
  ```

---

## 9. Recorrido Correcto de Arrays con `foreach`
* **Explicación:** Es imprescindible definir el alias singular mediante la palabra reservada `as`. Acceder al array plural dentro del bucle provoca errores de clave no definida (*Undefined array key*).
* **Ejemplo:**
  ```php
  // Recorrido de array multidimensional/colección
  foreach ($usuarios as $usuario) {
      echo htmlspecialchars($usuario['nombre']);
  }
  ```