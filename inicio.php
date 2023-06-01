<?php
include "controlador/controlador_login.php";
?>

<?php
// Verificar si el usuario tiene una sesión activa
if (!isset($_SESSION["id"])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        .my-background {
            background-image: url(img/fondo.jpg);
            background-size: cover;
            background-position: center;
        }

        .welcome-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100px;
            background-color: rgba(255, 255, 255, 0.7);
            border-radius: 10px;
        }

        .welcome-text {
            font-size: 36px;
            font-weight: bold;
            text-align: center;
        }

        .titulo {
            font-size: 80px;
        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Inicio</title>
</head>

<body class="container my-background">
    <br>
    <div class="welcome-container">
        <h3 class="welcome-text">Bienvenido/a <?php echo $_SESSION["nombres"] . " " . $_SESSION["apellidos"]; ?></h3>
    </div>
    <br>
    <a class="btn btn-light" href="controlador_cerrar_sesion.php">Cerrar sesión</a>
    <br>
    <br>

    <section>
        <div>
            <div>
                <h1 class="text-center text-font: 20px titulo">
                    <b>
                        BIENVENIDO
                    </b>
                </h1>
            </div>

            <div>
                <a class="btn btn-success" href="Ficha de Ingreso.php">Ficha de Ingreso</a>
            </div>

            <br>

            <div>
                <a class="btn btn-success" href="archivos.php">Ver Archivos PDF</a>
            </div>

            <br>

            <div>
                <a class="btn btn-success" href="Evaluaciones.php">Evaluaciones</a>
            </div>

            <br>

            <div>
                <a class="btn btn-success" href="Sesiones.php">Asignar Sesiones</a>
            </div>

            <br>

            <div>
                <a class="btn btn-success" href="versesiones.php">Ver Sesiones Asignadas</a>
            </div>

        </div>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
