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
  <title>Sesiones Asignadas</title>

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
      max-width: 800px;
      margin: 0 auto;
    }

    h1 {
      text-align: center;
      margin-bottom: 30px;
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


</body>

</html>