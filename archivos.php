<?php
include "controlador/controlador_login.php";
?>

<?php
// Verificar si el usuario tiene una sesión activa
if (!isset($_SESSION["id"])) {
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <style>
    body {
      background-color: #f2f2f2;
    }

    .container {
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      margin-top: 50px;
    }

    h1 {
      color: #333;
      text-align: center;
      margin-bottom: 30px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      font-weight: bold;
    }

    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }

    .btn-primary:hover {
      background-color: #0069d9;
      border-color: #0062cc;
    }

    .btn-success {
      background-color: #28a745;
      border-color: #28a745;
    }

    .btn-success:hover {
      background-color: #218838;
      border-color: #1e7e34;
    }

    .btn-warning {
      background-color: #ffc107;
      border-color: #ffc107;
    }

    .btn-warning:hover {
      background-color: #e0a800;
      border-color: #d39e00;
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

    .navbar-brand {
      font-weight: bold;
      color: white !important;
      /* Texto blanco */
      font-size: 20px;
      /* Aumentar el tamaño de la letra */
    }

    .navbar-text {
      margin-right: 10px;
      color: white !important;
      /* Texto blanco */
      font-size: 18px;
      /* Aumentar el tamaño de la letra */
    }
  </style>

  <title>Ver Archivos de Beneficiarios</title>
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
    <h1>Mostrar archivos</h1>
    <div class="form-group">
      <label for="codigoBeneficiario">Código del beneficiario:</label>
      <input type="text" id="codigoBeneficiario" name="codigoBeneficiario" class="form-control">
    </div>
    <button onclick="mostrarArchivos()" class="btn btn-primary">Mostrar archivos</button>

    <br>
    <br>
    <div class="btn btn-warning" id="listaArchivos"></div>

    <br>
    <br>
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

  <script>
    function mostrarArchivos() {
      var codigoBeneficiario = document.getElementById("codigoBeneficiario").value;
      var xhr = new XMLHttpRequest();
      xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("listaArchivos").innerHTML = this.responseText;
        }
      };
      xhr.open("GET", "mostrarArchivos.php?codigoBeneficiario=" + codigoBeneficiario, true);
      xhr.send();
    }
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