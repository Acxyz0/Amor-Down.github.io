<?php
include "controlador/controlador_login.php";
?>

<?php
// Verificar si el usuario tiene una sesión activa
if (!isset($_SESSION["id"])) {
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Asignar Sesiones</title>
  <!-- Bootstrap CSS v5.2.1 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

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

    /* Sidebar */
    .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: 80px;
            height: 100vh;
            background-color: #8A2BE2;
            padding: 20px;
            box-sizing: border-box;
            transition: width 0.3s ease-in-out;
            overflow: hidden;
        }

        .sidebar:hover {
            width: 200px;
        }

        .menu {
            margin-bottom: 20px;
        }

        .menu ul {
            list-style: none;
            padding: 0;
        }

        .menu li {
            margin-bottom: 10px;
        }

        .menu li a {
            color: #fff;
            text-decoration: none;
            display: flex;
            align-items: center;
            padding: 8px;
            transition: background-color 0.3s ease-in-out;
        }

        .menu li a:hover {
            background-color: rgba(255, 255, 255, 0.3);
        }

        .menu li a i {
            margin-right: 10px;
            font-size: 26px;
        }

        .menu li a span {
            display: none;
            font-weight: bold;
            margin-left: 10px;
        }

        .sidebar:hover .menu li a span {
            display: inline;
        }

        .menu .submenu {
            display: none;
            margin-left: 20px;
        }

        .menu .submenu li {
            margin-bottom: 5px;
        }

        .menu li.active .submenu {
            display: block;
        }

        /* Estilos de la navbar */
        .navbar {
            background-color: #8a2be2;
            /* Color morado */
            padding: 10px 20px;
            /* Aumentar el padding para hacerla más ancha */
        }

        .navbar-text {
            margin-right: 10px;
            color: white !important;
            /* Texto blanco */
            font-size: 20px;
            /* Aumentar el tamaño de la letra */
        }
  </style>

</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <span class="navbar-text"><?php echo $_SESSION["nombres"] . " " . $_SESSION["apellidos"]; ?></span>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <div class="container">
    <h1>Asignar Sesión</h1>

    <form action="guardar_sesiones.php" method="post">
      <div class="form-group">
        <label for="nombre_beneficiario">Nombre del beneficiario:</label>
        <div class="input-group mb-3">
          <input type="text" name="nombre_beneficiario" id="nombre_beneficiario" class="form-control">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button" id="buscar_beneficiario">Buscar</button>
          </div>
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
        <select class="form-control" name="servicio2" id="servicio2">
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

         <!-- Div para la Sidebar -->
         <div class="sidebar">
            <div class="menu">
                <ul>
                    <li><a href="inicio.php"><i class="bi bi-house-fill"></i><span>Inicio</span></a></li>
                    <li><a href="#"><i class="fas fa-users"></i><span>Beneficiario</span></a>
                        <ul class="submenu">
                            <li><a href="Ficha de Ingreso.php"><span>Ficha de Ingreso</span></a></li>
                            <li><a href="Verbeneficiarios.php"><span>Ver beneficiario</span></a></li>
                            <li><a href="archivos.php"><span>Ver documentos PDF</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fas fa-book"></i><span>Sesiones</span></a>
                        <ul class="submenu">
                            <li><a href="Sesiones.php"><span>Asignar sesiones</span></a></li>
                            <li><a href="versesiones.php"><span>Sesiones Asignadas</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fas fa-chart-bar"></i><span>Reportes</span></a>
                        <ul class="submenu">
                            <li><a href="ReporteF9.php"><span>Reporte R9</span></a></li>
                            <li><a href="ReporteF8.php"><span>Reporte R8</span></a></li>
                            <li><a href="ReporteCuantitativo.php"><span>Reporte Cuantitativo</span></a></li>
                            <li><a href="ReporteCualitativo.php"><span>Reporte Cualitativo</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fas fa-users-cog"></i><span>Usuarios</span></a>
                        <ul class="submenu">
                            <li><a href="CRUD/IngresarUsuario.php"><span>Administrar Usuario</span></a></li>
                            <li><a href="CRUD/IngresarRol.php"><span>Administrar Rol</span></a></li>
                        </ul>
                    </li>
                    <li><a href="controlador_cerrar_sesion.php"><i class="fas fa-sign-out-alt"></i><span>Cerrar Sesión</span></a></li>
                </ul>
            </div>
        </div>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!-- Script para la Sidebar -->
  <script>
    const menuItems = document.querySelectorAll('.menu li');

    menuItems.forEach(item => {
      item.addEventListener('click', function() {
        if (this.classList.contains('active')) {
          this.classList.remove('active');
        } else {
          menuItems.forEach(item => {
            item.classList.remove('active');
          });
          this.classList.add('active');
        }
      });
    });
  </script>

  <script>
    $(document).ready(function() {
      $('#buscar_beneficiario').click(function() {
        var nombreBeneficiario = $('#nombre_beneficiario').val();
        if (nombreBeneficiario !== '') {
          $.ajax({
            url: 'obtener_nombre_beneficiario.php',
            method: 'POST',
            data: {
              nombre_beneficiario: nombreBeneficiario
            },
            success: function(response) {
              $('#codigo_beneficiario').val(response);
            },
            error: function() {
              // Manejar el error en caso de que la solicitud falle
            }
          });
        }
      });

      $('#obtener_servicio').click(function() {
        var nombreBeneficiario = $('#nombre_beneficiario').val();
        if (nombreBeneficiario !== '') {
          $.ajax({
            url: 'obtener_servicios.php',
            method: 'POST',
            data: {
              nombre_beneficiario: nombreBeneficiario
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