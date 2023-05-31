<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestión de Usuarios</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Estilos personalizados -->
  <style>
    /* Estilos para la ventana emergente */
    .modal-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      display: none;
      justify-content: center;
      align-items: center;
      z-index: 9999;
    }

    .modal-content {
      width: 400px;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      text-align: center;
    }

    .modal-content input {
      width: 100%;
      margin-bottom: 10px;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .modal-content button {
      width: 100%;
      padding: 8px;
      border-radius: 4px;
    }
  </style>
</head>

<body>
  <div class="container">
    <h2>Gestión de Usuarios</h2>

    <!-- Formulario para agregar nuevo usuario -->
    <form>
      <button type="submit" class="btn btn-primary" name="agregarusuario">Agregar Usuario</button>
    </form>

    <br>

    <!-- Tabla de usuarios -->
    <table class="table">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Usuario</th>
          <th>Contraseña</th>
          <th>Teléfono</th>
          <th>Fecha de Ingreso</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Nombre1</td>
          <td>Usuario1</td>
          <td>Contraseña1</td>
          <td>Teléfono1</td>
          <td>Fecha1</td>
          <td>
            <button class="btn btn-info" onclick="openModal()">Actualizar</button>
            <button class="btn btn-danger">Eliminar</button>
          </td>
        </tr>
        <tr>
          <td>Nombre2</td>
          <td>Usuario2</td>
          <td>Contraseña2</td>
          <td>Teléfono2</td>
          <td>Fecha2</td>
          <td>
            <button class="btn btn-info" onclick="openModal()">Actualizar</button>
            <button class="btn btn-danger">Eliminar</button>
          </td>
        </tr>
        <!-- Agrega más filas de usuarios aquí -->
      </tbody>
    </table>
  </div>

  <!-- Ventana emergente para actualizar usuario -->
  <div class="modal-overlay" id="modal-overlay">
    <div class="modal-content">
      <h2>Actualizar Usuario</h2>
      <form>
        <input type="text" id="nombre" placeholder="Nombre">
        <input type="text" id="usuario" placeholder="Usuario">
        <input type="password" id="contrasena" placeholder="Contraseña">
        <input type="tel" id="telefono" placeholder="Teléfono">
        <input type="date" id="fecha" placeholder="Fecha de Ingreso">
        <button class="btn btn-primary" onclick="updateUser()">Guardar</button>
        <button class="btn btn-secondary" onclick="closeModal()">Cancelar</button>
      </form>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- JavaScript personalizado -->
  <script>
    function openModal() {
      document.getElementById("modal-overlay").style.display = "flex";
    }

    function closeModal() {
      document.getElementById("modal-overlay").style.display = "none";
    }

    function updateUser() {
      // Aquí puedes agregar la lógica para guardar los datos actualizados en la base de datos
      // Puedes obtener los valores de los campos de la ventana emergente con document.getElementById()
      // Luego puedes realizar una solicitud AJAX para enviar los datos al servidor y actualizar el registro
      // Después de guardar los datos, puedes cerrar la ventana emergente con closeModal()
    }
  </script>
</body>

</html>
