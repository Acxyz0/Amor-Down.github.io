<?php
// Aquí puedes agregar la lógica necesaria para conectarte a la base de datos y realizar la consulta

// Ejemplo de conexión a una base de datos MySQL utilizando MySQLi
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "amordown";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
  die("Error de conexión: " . $conn->connect_error);
}

// Obtener el código del beneficiario enviado por Ajax
if (isset($_POST['codigo_beneficiario'])) {
  $codigoBeneficiario = $_POST['codigo_beneficiario'];

  // Realizar la consulta para obtener el nombre y apellido del beneficiario
  $sql = "SELECT nombre, apellido FROM beneficiario WHERE codigobeneficiario = '$codigoBeneficiario'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // Si se encontró un resultado, obtener el nombre y apellido
    $row = $result->fetch_assoc();
    $nombreBeneficiario = $row['nombre'];
    $apellidoBeneficiario = $row['apellido'];

    // Concatenar nombre y apellido
    $nombreCompleto = $nombreBeneficiario . ' ' . $apellidoBeneficiario;

    // Devolver el nombre completo del beneficiario como respuesta
    echo $nombreCompleto;
  } else {
    // No se encontró un beneficiario con el código proporcionado
    echo "No se encontró un beneficiario con ese código";
  }
} else {
  // El código del beneficiario no se proporcionó correctamente
  echo "Código de beneficiario no válido";
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
