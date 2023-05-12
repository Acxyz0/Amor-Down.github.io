<?php

session_start();
if (empty($_SESSION["id"])) {
    header("location: login.php");
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
    <section>
        <nav>
            <div class="container-fluid text-center float-right  bg-light text-muted mostrar_nombre" id="">
                <b>
                    <?php
                    echo $_SESSION["nombres"] . " " . $_SESSION["apellidos"];
                    ?>
                </b>
            </div>
        </nav>
    </section>

    <br>
    <br>
    <br>

    <section>
        <div>
            <div>
                <h1 class="text-center text-font: 20px titulo">
                    <b>
                        Bienvenido
                    </b>
                </h1>
            </div>

            <div>
                <a class="btn btn-warning" href="Ficha de Ingreso.php">Ficha de Ingreso</a>
            </div>

            <br>

            <div>
                <a class="btn btn-warning" href="archivos.php">Ver archivos pdf</a>
            </div>

            <br>

            <div>
                <a class="btn btn-warning" href="Sesiones.php">Asignar Sesiones</a>
            </div>

                        <div>
                <a class="btn btn-warning" href="Sesiones.php">Asignar Sesiones</a>
            </div>
            
            <br>

            <div>
                <a class="btn btn-warning" href="controlador/controlador_cerrar_sesion.php">Salir</a>
            </div>

        </div>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>