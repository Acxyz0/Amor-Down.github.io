<!DOCTYPE html>
<html>

<head>
  <title>Sesiones Asignadas</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa;
      padding-top: 40px;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
    }

    h1 {
      text-align: center;
      margin-bottom: 30px;
    }
  </style>
</head>

<body>

  <div class="container">
    <h1>Sesiones Asignadas</h1>

    <table class="table table-striped">
      <thead>
        <tr>
          <th>Nombre del Beneficiario</th>
          <th>Servicio</th>
          <th>Hora Sesión</th>
        </tr>
      </thead>
      <tbody>
        <?php
        // Obtener las sesiones asignadas desde la base de datos y mostrarlas en la tabla
        $conexion = new mysqli('localhost', 'root', '', 'amordown');
        if ($conexion->connect_error) {
          die("Error en la conexión: " . $conexion->connect_error);
        }

        $sql = "SELECT nombre_beneficiario, servicio, hora_sesion FROM sesiones";
        $resultado = $conexion->query($sql);
        if ($resultado && $resultado->num_rows > 0) {
          while ($fila = $resultado->fetch_assoc()) {
            $nombreBeneficiario = $fila['nombre_beneficiario'];
            $servicio = $fila['servicio'];
            $horaSesion = $fila['hora_sesion'];
        ?>
            <tr>
              <td><?php echo $nombreBeneficiario; ?></td>
              <td><?php echo $servicio; ?></td>
              <td><?php echo $horaSesion; ?></td>
            </tr>
        <?php
          }
        } else {
          echo "<tr><td colspan='3'>No hay sesiones asignadas</td></tr>";
        }

        $conexion->close();
        ?>
      </tbody>
    </table>

  </div>

</body>

</html>
