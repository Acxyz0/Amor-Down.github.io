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
            background-size: 100% auto;
        }

        .mostrar_nombre {
            font-size: 25px;
            display: flex;
            float: left;
            width: 250px !important;
            height: 50px !important;
            justify-content: center;
            align-items: center;
            border-radius: 10px;
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
    <h1>Bienvenido/a <?php echo $_SESSION["nombres"] . " " . $_SESSION["apellidos"]; ?></h1>
    <a href="controlador_cerrar_sesion.php">Cerrar sesión</a>
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