<!DOCTYPE html>
<html>

<head>
  <title>Reporte</title>
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

    table td {
      border: none;
    }
  </style>
</head>

<body>

  <div class="container">
    <h1>Reporte</h1>

    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th>Pregunta</th>
          <th>Respuesta</th>
          <th>Observaciones</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if (isset($_POST['opciones']) && isset($_POST['observaciones'])) {
          $opciones = $_POST['opciones'];
          $observaciones = $_POST['observaciones'];

          // Array de preguntas
          $preguntas = array(
            "¿Balbucea?",
            "¿Produce sonidos guturales?",
            // Agregar las demás preguntas aquí
          );

          for ($i = 0; $i < count($opciones); $i++) {
            $pregunta = $preguntas[$i];
            $respuesta = $opciones[$i];
            $observacion = $observaciones[$i];

            echo "<tr>";
            echo "<td>$pregunta</td>";
            echo "<td>$respuesta</td>";
            echo "<td>$observacion</td>";
            echo "</tr>";
          }
        }
        ?>
      </tbody>
    </table>

    <div>
      <button class="btn btn-success">Aplicar</button>
      <button class="btn btn-danger">No Aplicar</button>
    </div>

  </div>

</body>

</html>
