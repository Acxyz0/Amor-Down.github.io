<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtener el código del paciente
  $codigoPaciente = $_POST['codigopaciente'];

  // Obtener los valores de los checkboxes
  $opciones = $_POST['opciones'];

  $recuento = array_count_values($opciones);
  $si = isset($recuento['si']) ? $recuento['si'] : 0;

  // Obtener el diagnóstico (negativo o positivo)
  $diagnostico = ($si >= 7) ? "positivo" : "negativo";

  // Establecer la conexión a la base de datos (reemplaza los valores con los de tu configuración)
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "amordown";

  $conn = new mysqli($servername, $username, $password, $database);

  // Verificar la conexión
  if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
  }

  // Insertar el diagnóstico en la tabla
  $sql = "INSERT INTO diagnosticospre_o (codigobeneficiario, diagnostico) VALUES ('$codigoPaciente', '$diagnostico')";
  if ($conn->query($sql) === true) {
    echo "<h1>El diagnóstico se ha guardado correctamente.</h1>";
  } else {
    echo "Error al guardar el diagnóstico: " . $conn->error;
  }

  $conn->close();
}
?>
