<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio de Sesión</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- Estilos personalizados -->
  <style>
    body {
      background-color: #f8f9fa;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .custom-login-container {
      max-width: 350px; /* Ajusta este valor para cambiar el ancho del formulario */
      width: 100%;
      margin: 0 auto;
      padding: 20px;
      background-color: #e6e6fa; /* Morado claro */
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .custom-login-container h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #483d8b; /* Azul medio */
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      font-weight: bold;
    }

    .btn-login {
      width: 100%;
      background-color: #483d8b; /* Azul medio */
      border-color: #483d8b; /* Azul medio */
    }

    .btn-login:hover {
      background-color: #6a5acd; /* Azul medio oscuro */
      border-color: #6a5acd; /* Azul medio oscuro */
    }
  </style>
</head>

<body>
  <?php
  include "Conexion BD/conexion.php";
  include "controlador/controlador_login.php";
  ?>

  <div class="custom-login-container">
    <h2>Iniciar Sesión</h2>
    <form method="post" action="">
      <div class="form-group">
        <label for="username">Usuario:</label>
        <input type="text" class="form-control" id="usuario" name="usuario" required>
      </div>
      <div class="form-group">
        <label for="password">Contraseña:</label>
        <div class="input-group">
          <input type="password" class="form-control" id="password" name="password" required>
          <div class="input-group-append">
            <button class="btn btn-outline-secondary toggle-password" type="button" onclick="togglePasswordVisibility()">
              <i class="fas fa-eye"></i>
            </button>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary btn-login" name="btningresar" value="INICIAR SESION">Iniciar Sesión</button>
    </form>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Font Awesome JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
  <!-- JavaScript personalizado -->
  <script>
    function togglePasswordVisibility() {
      var passwordInput = document.getElementById("password");
      var toggleButton = document.querySelector(".toggle-password");

      if (passwordInput.type === "password") {
        passwordInput.type = "text";
        toggleButton.innerHTML = '<i class="fas fa-eye-slash"></i>';
      } else {
        passwordInput.type = "password";
        toggleButton.innerHTML = '<i class="fas fa-eye"></i>';
      }
    }
  </script>
</body>

</html>
