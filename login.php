<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>Login</title>
 
</head>
<body class="body-login">
  <section>
    <div class="login-content">
      <form method="post" action="">
        <h1 class="titulo">Bienvenido</h1>
          <?php 
          include "Conexion BD/conexion.php";
          include "controlador/controlador_login.php";
          ?>
        
        <div class="input-div one">
          <div class="i">
            <i class="fas fa-user"></i>
          </div>
          <div class="div">
            <h3>Usuario</h3>
            <input id="usuario" type="text" class="input" name="usuario"></input>
          </div>
        </div>
        
        <div class="input-div pass">
          <div class="i">
            <i class="fas fa-lock"></i> 
          </div>
          <div class="div">
            <h3>Contraseña</h3>
            <input id="password" type="password" class="input" name="password"></input>
          </div>
        </div>

        <input name="btningresar" class="btn" type="submit" value="INICIAR SESION"></input>

        <div>
          <input name="registro" class="btn" type="submit" value="REGISTRAR USUARIO"></input>
        </div>
        
      </form>
    </div>
  </section>
</body>
</html>