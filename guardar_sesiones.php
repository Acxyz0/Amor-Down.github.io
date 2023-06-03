<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Obtener la fecha actual
  $fechaActual = date('Y-m-d');

  // Obtener la fecha ingresada en el formulario
  $fechaIngresada = $_POST['fecha'];

  // Validar que la fecha ingresada no sea anterior a la fecha actual
  if ($fechaIngresada < $fechaActual) {
    $errores[] = "No puedes asignar una sesión en una fecha anterior a la actual";
  } else {
    // Obtener los demás datos del formulario
    $codigoBeneficiario = $_POST['codigo_beneficiario'];
    $nombreBeneficiario = $_POST['nombre_beneficiario'];
    $servicio = $_POST['servicio'];
    $horasSesion = isset($_POST['horas_sesion']) ? $_POST['horas_sesion'] : [];

    // Validar los datos y realizar las operaciones de guardado en la base de datos
    if (!empty($codigoBeneficiario) && !empty($nombreBeneficiario) && !empty($horasSesion)) {
      $errores = array(); // Almacenar los errores encontrados

      // Verificar si las horas seleccionadas son posteriores o iguales a la hora actual
      foreach ($horasSesion as $hora) {
        $horaActual = date('H:i');
        if ($hora < $horaActual) {
          $errores[] = "No puedes asignar una sesión en una hora pasada";
          continue; // Pasar a la siguiente iteración del bucle sin realizar la inserción
        }

        // Aquí puedes realizar las operaciones necesarias para guardar los datos en la base de datos

        // Ejemplo de inserción en una tabla "sesiones"
        $conexion = new mysqli('localhost', 'root', '', 'amordown');
        if ($conexion->connect_error) {
          die("Error en la conexión: " . $conexion->connect_error);
        }

        // Insertar la sesión en la base de datos
        $sql = "INSERT INTO sesiones (codigobeneficiario, nombre_beneficiario, hora_sesion, servicio, fecha) VALUES ('$codigoBeneficiario', '$nombreBeneficiario', '$hora', '$servicio', '$fechaIngresada')";
        if ($conexion->query($sql) === true) {
          echo "Sesión asignada correctamente en la fecha $fechaIngresada, hora $hora";
        } else {
          $errores[] = "Error al asignar la sesión en la fecha $fechaIngresada, hora $hora: " . $conexion->error;
        }

        $conexion->close();
      }
    } else {
      $errores[] = "Por favor, complete todos los campos del formulario y seleccione al menos una hora";
    }
  }
}
?>
