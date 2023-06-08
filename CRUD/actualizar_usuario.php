<?php
// Verificar si se recibieron los datos del formulario de actualización
if (isset($_POST['update-id']) && isset($_POST['update-nombres']) && isset($_POST['update-apellidos']) && isset($_POST['update-usuario']) && isset($_POST['update-contraseña']) && isset($_POST['update-telefono']) && isset($_POST['update-rol-id']) && isset($_POST['update-fecha'])) {
  // Obtener los datos del formulario de actualización
  $userId = $_POST['update-id'];
  $nombres = $_POST['update-nombres'];
  $apellidos = $_POST['update-apellidos'];
  $usuario = $_POST['update-usuario'];
  $contraseña = $_POST['update-contraseña'];
  $telefono = $_POST['update-telefono'];
  $rolId = $_POST['update-rol-id']; // Obtener el ID del rol seleccionado en lugar del nombre
  $fecha = $_POST['update-fecha'];

  // Realizar la conexión a la base de datos
  $dbHost = 'localhost';
  $dbName = 'amordown';
  $dbUser = 'root';
  $dbPass = '';

  $conn = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);

  // Actualizar el usuario en la tabla "usuarios"
  $query = "UPDATE usuarios SET Nombres = ?, Apellidos = ?, Usuario = ?, Contraseña = ?, Telefono = ?, Rol = ?, FechadeIngreso = ? WHERE ID = ?";
  $stmt = $conn->prepare($query);
  $stmt->execute([$nombres, $apellidos, $usuario, $contraseña, $telefono, $rolId, $fecha, $userId]);

  // Redireccionar a la página principal
  header('Location: IngresarUsuario.php');
  exit();
} else {
  echo "Error: Datos de actualización incompletos";
}
?>
