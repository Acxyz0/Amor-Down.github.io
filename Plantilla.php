<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="menu">
            <ul>
                <li><a href="#"><i class="fas fa-users"></i><span>Beneficiario</span></a>
                    <ul class="submenu">
                        <li><a href="#"><span>Ficha de Ingreso</span></a></li>
                        <li><a href="#"><span>Ver beneficiario</span></a></li>
                        <li><a href="#"><span>Ver documentos PDF</span></a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="fas fa-book"></i><span>Sesiones</span></a>
                    <ul class="submenu">
                        <li><a href="#"><span>Asignar sesiones</span></a></li>
                        <li><a href="#"><span>Sesiones Asignadas</span></a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="fas fa-chart-bar"></i><span>Reportes</span></a>
                    <ul class="submenu">
                        <li><a href="#"><span>Reporte R9</span></a></li>
                        <li><a href="#"><span>Reporte R8</span></a></li>
                        <li><a href="#"><span>Reporte Cuantitativo</span></a></li>
                        <li><a href="#"><span>Reporte Cualitativo</span></a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="fas fa-users-cog"></i><span>Usuarios</span></a></li>
                <li><a href="#"><i class="fas fa-sign-out-alt"></i><span>Cerrar Sesión</span></a></li>
            </ul>
        </div>
    </div>

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
