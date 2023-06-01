<!DOCTYPE html>
<html>

<head>
  <title>Administrador de Usuarios</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
  <div class="container">
    <h1>Administrador de Usuarios</h1>

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
    <h1>Agregar Usuarios</h1>

    <div class="mb-3">
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
            <input type="text" class="form-control" placeholder="Rol" name="rol" required>
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

    <h1>Actualizar Usuario</h1>

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
            <input type="text" class="form-control" placeholder="Rol" id="update-rol" name="update-rol" required>
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
  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
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
  </script>
</body>

</html>