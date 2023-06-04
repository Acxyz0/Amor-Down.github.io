<html>

<head>
  <title>Asignar Sesión</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa;
      padding-top: 40px;
    }

    .container {
      max-width: 600px;
      margin: 0 auto;
    }

    h1 {
      text-align: center;
      margin-bottom: 30px;
    }

    .form-control {
      border-radius: 0;
    }

    .table {
      background-color: #fff;
    }

    .btn-primary {
      border-radius: 0;
    }
  </style>
</head>

<body>

  <div class="container">
    <h1>Asignar Sesión</h1>

    <form action="guardar_sesiones.php" method="post">
      <div class="form-group">
        <label for="codigo_beneficiario">Código del Beneficiario:</label>
        <div class="input-group mb-3">
          <input type="text" name="codigo_beneficiario" id="codigo_beneficiario" class="form-control">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button" id="buscar_beneficiario">Buscar</button>
          </div>
        </div>
      </div>

      <br>
      <div class="form-group">
        <label for="nombre_beneficiario">Nombre del beneficiario:</label>
        <div class="input-group mb-3">
          <input type="text" name="nombre_beneficiario" id="nombre_beneficiario" class="form-control" readonly>
        </div>
      </div>
      <br>

      <button type="button" id="obtener_servicio" class="btn btn-primary">Obtener Servicio</button>
      <br>
      <br>

      <div class="form-group">
        <label for="servicio">Servicio #1:</label>
        <select class="form-control" name="servicio1" id="servicio1">
        </select>
      </div>

      <div class="form-group">
        <label for="servicio">Servicio #2:</label>
        <select class="form-control" name="servicio1" id="servicio1">
        </select>
      </div>

      <div id="mensaje_error"></div>

      <div class="form-group">
        <label for="fecha">Fecha:</label>
        <input type="date" name="fecha" id="fecha" class="form-control" value="<?php echo date('Y-m-d'); ?>">
      </div>

      <table class="table">
        <thead>
          <tr>
            <th>Hora Sesión</th>
            <th>Asignar</th>
          </tr>
        </thead>
        <tbody>
          <?php
          // Generar las filas de la tabla con las horas de las sesiones
          $horaInicial = strtotime('8:00');
          $horaFinal = strtotime('16:00');

          while ($horaInicial <= $horaFinal) {
            $hora = date('H:i', $horaInicial);
          ?>
            <tr>
              <td><?php echo $hora; ?></td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="horas_sesion[]" value="<?php echo $hora; ?>">
                </div>
              </td>
            </tr>
          <?php
            $horaInicial = strtotime('+30 minutes', $horaInicial); // Incrementar 30 minutos
          }
          ?>
        </tbody>
      </table>

      <button type="submit" name="asignar" class="btn btn-primary">Asignar Sesión</button>
      <a class="btn btn-success float-right" href="inicio.php">Inicio</a>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  
  <script>
    $(document).ready(function() {
      $('#buscar_beneficiario').click(function() {
        var codigoBeneficiario = $('#codigo_beneficiario').val();
        if (codigoBeneficiario !== '') {
          $.ajax({
            url: 'obtener_nombre_beneficiario.php',
            method: 'POST',
            data: {
              codigo_beneficiario: codigoBeneficiario
            },
            success: function(response) {
              $('#nombre_beneficiario').val(response);
            },
            error: function() {
              // Manejar el error en caso de que la solicitud falle
            }
          });
        }
      });

      $('#obtener_servicio').click(function() {
        var codigoBeneficiario = $('#codigo_beneficiario').val();
        if (codigoBeneficiario !== '') {
          $.ajax({
            url: 'obtener_servicios.php',
            method: 'POST',
            data: {
              codigo_beneficiario: codigoBeneficiario
            },
            success: function(response) {
              $('#servicio1, #servicio2').html('<option value="">Seleccione un servicio</option>' + response);
            },
            error: function() {
              // Manejar el error en caso de que la solicitud falle
            }
          });
        }
      });

      // Evento de envío del formulario
      $('form').submit(function(event) {
        event.preventDefault(); // Evitar que el formulario se envíe de forma tradicional

        var form = $(this);

        $.ajax({
          url: form.attr('action'),
          method: form.attr('method'),
          data: form.serialize(),
          success: function(response) {
            console.log(response);
          },
          error: function() {
            // Manejar el error en caso de que la solicitud falle
          }
        });
      });
    });
  </script>

  <script>
    var mensajeError = "<?php echo $mensajeError; ?>";
    document.getElementById("mensaje_error").innerHTML = mensajeError;
  </script>


</body>

</html>