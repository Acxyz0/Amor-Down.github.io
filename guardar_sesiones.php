<?php
// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Obtener los datos del formulario
  $codigoBeneficiario = $_POST['codigo_beneficiario'];
  $nombreBeneficiario = $_POST['nombre_beneficiario'];
  $servicio = $_POST['servicio'];
  $horasSesion = $_POST['horas_sesion'];

  // Validar los datos y realizar las operaciones de guardado en la base de datos
  if (!empty($codigoBeneficiario) && !empty($nombreBeneficiario) && !empty($servicio) && !empty($horasSesion)) {
    // Aquí puedes realizar las operaciones necesarias para guardar los datos en la base de datos

    // Ejemplo de inserción en una tabla "sesiones"
    $conexion = new mysqli('localhost', 'root', '', 'amordown');
    if ($conexion->connect_error) {
      die("Error en la conexión: " . $conexion->connect_error);
    }

    $errores = array(); // Almacenar los errores encontrados

    // Verificar si ya existe una sesión en las horas seleccionadas
    foreach ($horasSesion as $hora) {
      $sql = "SELECT COUNT(*) AS cantidad FROM sesiones WHERE hora_sesion = '$hora'";
      $resultado = $conexion->query($sql);
      if ($resultado && $resultado->num_rows > 0) {
        $fila = $resultado->fetch_assoc();
        $cantidadSesiones = $fila['cantidad'];
        if ($cantidadSesiones > 0) {
          $errores[] = "Ya existe una sesión asignada en la hora $hora";
          continue; // Pasar a la siguiente iteración del bucle sin realizar la inserción
        }
      }

      // Insertar la sesión en la base de datos
      $sql = "INSERT INTO sesiones (codigobeneficiario, nombre_beneficiario, servicio, hora_sesion) VALUES ('$codigoBeneficiario', '$nombreBeneficiario', '$servicio', '$hora')";
      if ($conexion->query($sql) === true) {
        echo "Sesión asignada correctamente en la hora $hora";
      } else {
        $errores[] = "Error al asignar la sesión en la hora $hora: " . $conexion->error;
      }
    }

    $conexion->close();
  } else {
    $errores[] = "Por favor, complete todos los campos del formulario";
  }
}
?>
