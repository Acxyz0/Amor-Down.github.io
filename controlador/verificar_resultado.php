<?php
$servername = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "diagnostico";

// Obtén los valores enviados por el formulario
$codigoPaciente = $_POST["codigo_paciente"];
$sintoma1 = $_POST["sintoma1"];
$sintoma2 = $_POST["sintoma2"];

// Verifica el resultado basado en los síntomas seleccionados
$contadorSi = 0;
$contadorNo = 0;

foreach ($sintoma1 as $valor) {
  if ($valor == "si") {
    $contadorSi++;
  } elseif ($valor == "no") {
    $contadorNo++;
  }
}

foreach ($sintoma2 as $valor) {
  if ($valor == "si") {
    $contadorSi++;
  } elseif ($valor == "no") {
    $contadorNo++;
  }
}

// Calcula el resultado final
$resultado = ($contadorSi > $contadorNo) ? "Positivo" : "Negativo";

// Guarda el resultado en la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Error de conexión a la base de datos: " . $conn->connect_error);
}

$sql = "INSERT INTO diagnostico (resultado, codigo_paciente) VALUES ('$resultado', '$codigoPaciente')";
if ($conn->query($sql) === TRUE) {
  echo "Resultado guardado correctamente en la tabla diagnostico";
} else {
  echo "Error al guardar el resultado en la tabla diagnostico: " . $conn->error;
}

$conn->close();
