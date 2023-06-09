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

<!doctype html>
<html lang="en">

<head>
    <title>Inicio</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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

        /*Estilo del Carrusel */
        .carousel-inner img {
            width: 4000px;
            /* Establece un tamaño fijo para todas las imágenes */
            height: 4000px;
            object-fit: cover;
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
    <main>

        <section class="section-carrusel">
            <div class="container">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicadores -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                        <!-- Agrega más indicadores aquí -->
                    </ol>

                    <!-- Slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="img/imagen1.jpg" alt="Imagen 1">
                        </div>

                        <div class="item">
                            <img src="img/imagen2.jpg" alt="Imagen 2">
                        </div>

                        <div class="item">
                            <img src="img/imagen3.jpg" alt="Imagen 3">
                        </div>

                        <div class="item">
                            <img src="img/imagen4.jpg" alt="Imagen 4">
                        </div>
                    </div>

                    <!-- Controles de navegación -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon g    lyphicon-chevron-right"></span>
                        <span class="sr-only">Siguiente</span>
                    </a>
                </div>
            </div>
        </section>

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


    </main>
    <footer>
        <!-- place footer here -->
    </footer>
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

    <!-- Script Carrusel -->
    <script>
        $(document).ready(function() {
            // Inicia el carrusel automáticamente
            $('#myCarousel').carousel({
                interval: 5000 // Establece el intervalo en milisegundos (ejemplo: 3000 = 3 segundos)
            });
        });
    </script>
</body>

</html>