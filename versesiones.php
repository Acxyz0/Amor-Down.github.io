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

    <?php
    // Conexión a la base de datos
    $conexion = new mysqli('localhost', 'root', '', 'amordown');
    if ($conexion->connect_error) {
      die("Error en la conexión: " . $conexion->connect_error);
    }

    // Verificar si se ha hecho clic en el botón de "Mostrar todas las sesiones"
    if (isset($_POST['mostrar_todas'])) {
      // Consulta para obtener todas las sesiones
      $sql = "SELECT nombre_beneficiario, servicio, hora_sesion FROM sesiones";
    } else {
      // Consulta para obtener las sesiones con la fecha actual
      $sql = "SELECT nombre_beneficiario, servicio, hora_sesion FROM sesiones WHERE fecha = CURDATE()";
    }

    $resultado = $conexion->query($sql);
    if ($resultado && $resultado->num_rows > 0) {
    ?>
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
          ?>
        </tbody>
      </table>
    <?php
    } else {
      echo "<p>No hay sesiones asignadas para el día actual.</p>";
    }

    // Cerrar la conexión a la base de datos
    $conexion->close();
    ?>

    <br>
    <br>

    <?php
    // Verificar si se ha hecho clic en el botón de "Mostrar todas las sesiones"
    if (isset($_POST['mostrar_todas'])) {
    ?>
      <form method="post">
        <button type="submit" name="mostrar_actual" class="btn btn-primary">Mostrar sesiones de la fecha actual</button>
      </form>
    <?php
    } else {
    ?>
      <form method="post">
        <button type="submit" name="mostrar_todas" class="btn btn-primary">Mostrar todas las sesiones</button>
      </form>
    <?php
    }
    ?>

    <br>
    <br>

    <div>
      <a class="btn btn-success" href="inicio.php">Inicio</a>
    </div>

  </div>

</body>

</html>
