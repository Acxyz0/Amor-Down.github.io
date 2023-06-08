<!DOCTYPE html>
<html>

<head>
  <title>Informe Cuantitativo</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f0f0f0;
    }

    .container {
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
      margin-top: 50px;
    }

    h1 {
      color: #007bff;
      text-align: center;
    }

    table {
      margin-top: 20px;
    }

    th {
      background-color: #007bff;
      color: #fff;
    }

    tbody tr:nth-child(even) {
      background-color: #f8f9fa;
    }

    .form-row {
      margin-bottom: 20px;
    }

    .generate-report {
            text-align: center;
            margin-bottom: 20px;
        }

        .generate-report button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

    .total-asistencias {
      background-color: #ffc107;
      color: #fff;
      font-weight: bold;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>Reporte Cuantitativo</h1>

    <form method="GET" action="">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="fechaDesde">Desde:</label>
          <input type="date" class="form-control" id="fechaDesde" name="fechaDesde">
        </div>
        <div class="form-group col-md-6">
          <label for="fechaHasta">Hasta:</label>
          <input type="date" class="form-control" id="fechaHasta" name="fechaHasta">
        </div>
      </div>

      <div class="generate-report">
        <button>Generar Reporte</button>
      </div>
    </form>

    <table class="table">
      <thead>
        <tr>
          <th>Código</th>
          <th>Nombres y Apellidos</th>
          <th>Niños (M/F)</th>
          <th>Adultos (M/F)</th>
          <th>Edad</th>
          <th>Diagnóstico</th>
          <th>Discapacidad</th>
          <th>Asistencia</th>
        </tr>
      </thead>
      <tbody>
        <?php
        // Obtener las fechas desde y hasta
        $fechaDesde = isset($_GET['fechaDesde']) ? $_GET['fechaDesde'] : '';
        $fechaHasta = isset($_GET['fechaHasta']) ? $_GET['fechaHasta'] : '';

        // Aquí puedes obtener los datos de tu base de datos o de alguna otra fuente de datos
        $data = array(
          array("001", "Juan Pérez", "M", "-", 8, "Autismo", "Sí", 2),
          array("002", "María López", "-", "F", 35, "Depresión", "No", 1)
        );

        // Variable para almacenar la suma de asistencias
        $totalAsistencias = 0;

        // Iterar sobre los datos y generar filas en la tabla
        foreach ($data as $row) {
          echo "<tr>";
          for ($i = 0; $i < count($row); $i++) {
            if ($i === 2) {
              echo "<td class='text-warning'>" . $row[$i][0] . "</td>";
            } elseif ($i === 3) {
              echo "<td class='text-warning'>" . $row[$i][0] . "</td>";
            } else {
              echo "<td>" . $row[$i] . "</td>";
            }
            // Verificar si es la columna de asistencia y sumar el valor
            if ($i === count($row) - 1 && is_numeric($row[$i])) {
              $totalAsistencias += $row[$i];
            }
          }
          echo "</tr>";
        }

        // Mostrar la fila de la suma de asistencias
        echo "<tr><td colspan='7'></td><td class='total-asistencias'>Total Asistencias: $totalAsistencias</td></tr>";
        ?>
      </tbody>
    </table>
  </div>
</body>

</html>