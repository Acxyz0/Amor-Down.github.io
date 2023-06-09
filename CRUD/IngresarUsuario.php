<?php
include "../controlador/controlador_login.php";
?>

<?php
// Verificar si el usuario tiene una sesión activa
if (!isset($_SESSION["id"])) {
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Administrador de Usuarios</title>
  <!-- Bootstrap CSS v5.2.1 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

  <style>
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
    <h1>Administrador de Usuarios</h1>
    <br>

    <div>
      <button class="btn btn-primary mr-2" onclick="toggleForm()">
        <i class="fas fa-plus"></i> Agregar Usuario
      </button>
    </div>
    <br>

    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombres</th>
          <th>Apellidos</th>
          <th>Usuario</th>
          <th>Contraseña</th>
          <th>Teléfono</th>
          <th>Rol</th>
          <th>Fecha de Ingreso</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php
        // Realizar la conexión a la base de datos
        $dbHost = 'localhost';
        $dbName = 'amordown';
        $dbUser = 'root';
        $dbPass = '';

        $conn = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);

        // Consultar los usuarios en la tabla "usuarios" y obtener el nombre del rol desde la tabla "roles"
        $query = "SELECT u.ID, u.Nombres, u.Apellidos, u.Usuario, u.Contraseña, u.Telefono, r.Rol AS Rol, u.FechadeIngreso
                  FROM usuarios u
                  INNER JOIN roles r ON u.Rol = r.ID";
        $stmt = $conn->query($query);
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($users as $user) {
          echo "<tr>";
          echo "<td>{$user['ID']}</td>";
          echo "<td>{$user['Nombres']}</td>";
          echo "<td>{$user['Apellidos']}</td>";
          echo "<td>{$user['Usuario']}</td>";
          echo "<td>{$user['Contraseña']}</td>";
          echo "<td>{$user['Telefono']}</td>";
          echo "<td>{$user['Rol']}</td>";
          echo "<td>{$user['FechadeIngreso']}</td>";
          echo "<td>";
          echo "<div class='btn-group'>";
          echo "<button class='btn btn-primary mr-2' onclick='updateUser({$user['ID']})'>";
          echo "<i class='fas fa-edit'></i> Actualizar";
          echo "</button>";
          echo "<button class='btn btn-danger' onclick='deleteUser({$user['ID']})'>";
          echo "<i class='fas fa-trash'></i> Eliminar";
          echo "</button>";
          echo "</div>";
          echo "</td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </div>

  <div class="container">
    <h1 id="add-user-titulo" style="display: none;">Agregar Usuarios</h1>

    <div class="mb-3" id="add-user-form" style="display: none;">
      <form method="post" action="agregar_usuario.php">
        <div class="form-row">
          <div class="col">
            <input type="text" class="form-control" placeholder="Nombres" name="nombres" required>
          </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="Apellidos" name="apellidos" required>
          </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="Usuario" name="usuario" required>
          </div>
          <div class="col">
            <input type="password" class="form-control" placeholder="Contraseña" name="contraseña" required>
          </div>
          <div class="col">
            <input type="tel" class="form-control" placeholder="Teléfono" name="telefono" required>
          </div>
          <div class="col">
            <select class="form-control" name="rol" required>
              <?php
              // Realizar la conexión a la base de datos
              $dbHost = 'localhost';
              $dbName = 'amordown';
              $dbUser = 'root';
              $dbPass = '';

              $conn = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);

              // Consultar los roles en la tabla "roles"
              $query = "SELECT ID, Rol FROM roles"; // Obtener el ID del rol junto con el nombre
              $stmt = $conn->query($query);
              $roles = $stmt->fetchAll(PDO::FETCH_ASSOC);

              foreach ($roles as $rol) {
                echo "<option value='{$rol['ID']}'>{$rol['Rol']}</option>"; // Usar el ID del rol en lugar del nombre
              }
              ?>
            </select>
          </div>

          <div class="col">
            <input type="date" class="form-control" placeholder="Fecha de Ingreso" name="fecha" required>
          </div>
          <div class="col">
            <button type="submit" class="btn btn-primary">
              <i class="fas fa-save"></i> Guardar Usuario
            </button>
          </div>
        </div>
      </form>
    </div>

    <div class="text-center">
      <button class="btn btn-primary" onclick="hideForm()">
        <i class="fas fa-eye-slash"></i> Ocultar Formulario
      </button>
    </div>

    <h1 id="update-titulo" style="display: none;">Actualizar Usuario</h1>

    <div class="mb-3" id="update-form" style="display: none;">
      <form method="post" action="actualizar_usuario.php">
        <div class="form-row">
          <div class="col">
            <input type="hidden" id="update-id" name="update-id">
            <input type="text" class="form-control" placeholder="Nombres" id="update-nombres" name="update-nombres" required>
          </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="Apellidos" id="update-apellidos" name="update-apellidos" required>
          </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="Usuario" id="update-usuario" name="update-usuario" required>
          </div>
          <div class="col">
            <input type="password" class="form-control" placeholder="Contraseña" id="update-contraseña" name="update-contraseña" required>
          </div>
          <div class="col">
            <input type="tel" class="form-control" placeholder="Teléfono" id="update-telefono" name="update-telefono" required>
          </div>
          <div class="col">
            <select class="form-control" id="update-rol-id" name="update-rol-id" required>
              <?php
              // Realizar la conexión a la base de datos
              $dbHost = 'localhost';
              $dbName = 'amordown';
              $dbUser = 'root';
              $dbPass = '';

              $conn = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);

              // Consultar los roles en la tabla "roles"
              $query = "SELECT ID, Rol FROM roles";
              $stmt = $conn->query($query);
              $roles = $stmt->fetchAll(PDO::FETCH_ASSOC);

              foreach ($roles as $rol) {
                echo "<option value='{$rol['ID']}'>{$rol['Rol']}</option>";
              }
              ?>
            </select>
          </div>

          <div class="col">
            <input type="date" class="form-control" placeholder="Fecha de Ingreso" id="update-fecha" name="update-fecha" required>
          </div>
          <div class="col">
            <button type="submit" class="btn btn-primary">
              <i class="fas fa-edit"></i> Actualizar Usuario
            </button>
          </div>
        </div>
      </form>
    </div>


    <div class="container" id="role-form" style="display: none;">
      <h1>Agregar Rol</h1>

      <div class="mb-3">
        <form method="post" action="agregar_rol.php">
          <div class="form-row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Nombre del Rol" name="nombrerol" required>
            </div>
          </div>
          <div class="text-center mt-3">
            <button type="submit" class="btn btn-primary">
              <i class="fas fa-save"></i> Guardar Rol
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Div para la Sidebar -->
  <div class="sidebar">
    <div class="menu">
      <ul>
        <li><a href="../inicio.php"><i class="bi bi-house-fill"></i><span>Inicio</span></a></li>
        <li><a href="#"><i class="fas fa-users"></i><span>Beneficiario</span></a>
          <ul class="submenu">
            <li><a href="../Ficha de Ingreso.php"><span>Ficha de Ingreso</span></a></li>
            <li><a href="../Verbeneficiarios.php"><span>Ver beneficiario</span></a></li>
            <li><a href="../archivos.php"><span>Ver documentos PDF</span></a></li>
          </ul>
        </li>
        <li><a href="#"><i class="fas fa-book"></i><span>Sesiones</span></a>
          <ul class="submenu">
            <li><a href="../Sesiones.php"><span>Asignar sesiones</span></a></li>
            <li><a href="../versesiones.php"><span>Sesiones Asignadas</span></a></li>
          </ul>
        </li>
        <li><a href="#"><i class="fas fa-chart-bar"></i><span>Reportes</span></a>
          <ul class="submenu">
            <li><a href="../ReporteF9.php"><span>Reporte R9</span></a></li>
            <li><a href="../ReporteF8.php"><span>Reporte R8</span></a></li>
            <li><a href="../ReporteCuantitativo.php"><span>Reporte Cuantitativo</span></a></li>
            <li><a href="../ReporteCualitativo.php"><span>Reporte Cualitativo</span></a></li>
          </ul>
        </li>
        <li><a href="#"><i class="fas fa-users-cog"></i><span>Usuarios</span></a>
          <ul class="submenu">
            <li><a href="IngresarUsuario.php"><span>Administrar Usuario</span></a></li>
            <li><a href="IngresarRol.php"><span>Administrar Rol</span></a></li>
          </ul>
        </li>
        <li><a href="../controlador_cerrar_sesion.php"><i class="fas fa-sign-out-alt"></i><span>Cerrar Sesión</span></a></li>
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


  <script>
    function deleteUser(userId) {
      if (confirm("¿Estás seguro de eliminar este usuario?")) {
        fetch('eliminar_usuario.php', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: 'userId=' + userId,
          })
          .then(response => response.json())
          .then(data => {
            if (data.success) {
              location.reload();
            } else {
              alert(data.message);
            }
          })
          .catch(error => {
            console.error('Error:', error);
          });
      }
    }

    function deleteUser(userId) {
      if (confirm("¿Estás seguro de eliminar este usuario?")) {
        fetch('eliminar_usuario.php', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: 'userId=' + userId,
          })
          .then(response => response.json())
          .then(data => {
            if (data.success) {
              location.reload();
            } else {
              alert(data.message);
            }
          })
          .catch(error => {
            console.error('Error:', error);
          });
      }
    }

    function updateUser(userId) {
      fetch('obtener_usuario.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
          },
          body: 'userId=' + userId,
        })
        .then(response => response.json())
        .then(data => {
          if (data.success) {
            document.getElementById('update-form').style.display = 'block';
            document.getElementById('update-id').value = data.user.ID;
            document.getElementById('update-nombres').value = data.user.Nombres;
            document.getElementById('update-apellidos').value = data.user.Apellidos;
            document.getElementById('update-usuario').value = data.user.Usuario;
            document.getElementById('update-contraseña').value = data.user.Contraseña;
            document.getElementById('update-telefono').value = data.user.Telefono;
            document.getElementById('update-rol').value = data.user.Rol;
            document.getElementById('update-fecha').value = data.user.FechadeIngreso;
          } else {
            alert(data.message);
          }
        })
        .catch(error => {
          console.error('Error:', error);
        });
    }

    function updateUser(userId) {
      fetch('obtener_usuario.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
          },
          body: 'userId=' + userId,
        })
        .then(response => response.json())
        .then(data => {
          if (data.success) {
            document.getElementById('update-titulo').style.display = 'block'; // Muestra el título
            document.getElementById('update-form').style.display = 'block'; // Muestra el formulario
            document.getElementById('update-id').value = data.user.ID;
            document.getElementById('update-nombres').value = data.user.Nombres;
            document.getElementById('update-apellidos').value = data.user.Apellidos;
            document.getElementById('update-usuario').value = data.user.Usuario;
            document.getElementById('update-contraseña').value = data.user.Contraseña;
            document.getElementById('update-telefono').value = data.user.Telefono;
            document.getElementById('update-rol').value = data.user.Rol;
            document.getElementById('update-fecha').value = data.user.FechadeIngreso;
          } else {
            alert(data.message);
          }
        })
        .catch(error => {
          console.error('Error:', error);
        });
    }
  </script>

  <script>
    function hideForm() {
      document.getElementById('update-titulo').style.display = 'none'; // Oculta el título
      document.getElementById('update-form').style.display = 'none'; // Oculta el formulario
    }
  </script>

  <script>
    function toggleForm() {
      var titulo = document.getElementById('add-user-titulo');
      var form = document.getElementById('add-user-form');

      if (titulo.style.display === 'none') {
        titulo.style.display = 'block';
        form.style.display = 'block';
      } else {
        titulo.style.display = 'none';
        form.style.display = 'none';
      }
    }
  </script>

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