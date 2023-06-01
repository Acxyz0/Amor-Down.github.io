<?php
// Verificar si se recibió el ID del usuario
if (isset($_POST['userId'])) {
  $userId = $_POST['userId'];

  // Realizar la conexión a la base de datos
  $dbHost = 'localhost';
  $dbName = 'amordown';
  $dbUser = 'root';
  $dbPass = '';

  $conn = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);

  // Consultar el usuario en la tabla "usuarios"
  $query = "SELECT * FROM usuarios WHERE ID = ?";
  $stmt = $conn->prepare($query);
  $stmt->execute([$userId]);
  $user = $stmt->fetch(PDO::FETCH_ASSOC);

  // Enviar una respuesta en formato JSON
  $response = [
    'success' => true,
    'user' => $user,
  ];
  echo json_encode($response);
} else {
  // Enviar una respuesta de error en formato JSON
  $response = [
    'success' => false,
    'message' => 'ID de usuario no proporcionado',
  ];
  echo json_encode($response);
}
?>
