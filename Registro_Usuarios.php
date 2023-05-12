<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <section>
        <div class="registro-content">
            <form method="post" action="">
                <div>
                   <h1 class="titulo"> Registre al usuario</h1>
                </div>

                <?php
                include("modelo/conexion.php");
                include("controlador/controlador_registro.php");
                ?>

                <div class="div">
                    <label>Nombre</label>
                    <input id="nombres" type="text" class="input" name="nombre_usuario"></input>
                </div>

                <div class="div">
                    <label>Apellido</label>
                    <input id="apellidos" type="text" class="input" name="apellido_usuario"></input>
                </div>
                
                <div class="div">
                    <label>Usuario</label>
                    <input id="usuario" type="text" class="input" name="r_usuario"></input>
                </div>

                <div class="div">
                    <lavel>Contraseña</lavel>
                    <input id="contraseña" type="text" class="input" name="contraseña_usuario"></input>
                </div>

                <div class="div">
                    <lavel>Rol</lavel>
                    <input id="rol" type="text" class="input" name="rol_usuario"></input>
                </div>

                <div class="cuenta">
                    <input class="boton_registrar" type="submit" value="REGISTRAR" name="btnregistrar">
                </div>

                <div class="cuenta">
                    <a href="login.php">Salir</a>
                </div>

            </form>
        </div>
    </section>
</body>
</html>