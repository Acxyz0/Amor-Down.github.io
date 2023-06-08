<?php
  // Realizar la conexión a la base de datos
  $dbHost = 'localhost';
  $dbName = 'amordown';
  $dbUser = 'root';
  $dbPass = '';

  $conn = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);

  // Verificar si se ha enviado el formulario
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos del formulario
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $telefono = $_POST['telefono'];
    $rolId = $_POST['rol']; // Obtener el ID del rol seleccionado en lugar del nombre
    $fecha = $_POST['fecha'];

    // Preparar la consulta SQL para insertar un nuevo usuario
    $query = "INSERT INTO usuarios (Nombres, Apellidos, Usuario, Contraseña, Telefono, Rol, FechadeIngreso) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->execute([$nombres, $apellidos, $usuario, $contraseña, $telefono, $rolId, $fecha]);

    // Redirigir a la página principal después de agregar el usuario
    header('Location: IngresarUsuario.php');
    exit;
  }
  ?>