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
  <title>Informe Cuantitativo</title>
  <!-- Bootstrap CSS v5.2.1 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

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
            <span class="navbar-text"></span>
          </li>
        </ul>
      </div>
    </nav>
  </header>

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
    
</body>

</html>